<?php

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Models\LivretQueries;

class HomeControllers {
    /**
     * Page d'accueil du site
     * @return un template twig qui correspond à la page d'accueil
     * */
    function indexPage(Application $app) {
        return $app['twig']->render('@views/base.html.twig',array('form_sent'   => false));
    }

    /**
     * Enregistrement d'un livret pédagogique
     * @param Request $request
     * @param Application $app instance du framework
     * @return mixed
    */
    public function enreistrerLivret(Request $request, Application $app){
        $get = $request->query->all();
        $post = $request->request->all();
        $livretQueries = new LivretQueries($app);

        //FORMATION
        $calendrier = array('description_calendrier' => $post['description_calendrier_univ'],
    						'Annee_calendrier' => date("Y"));
        $idCalendrier = $livretQueries->insertCalendrier($app, $calendrier);

        $ufr = array('nom_ufr' => $post['nom_ufr'],
    				 'adresse_ufr' => $post['adresse_ufr'],
    				  'url_ufr' => $post['url_ufr'],
    				  'directeur_ufr' => $post['direction_ufr'],
    				  'responsable_administratif' => $post['responsable_ufr']);
        $idUFR = $livretQueries->insertUFR($app, $ufr);

        //$enseignants = array('nom_enseignant' => $post['nom_professeur']);
        //$idEnseignant = $livretQueries->insertEnseignant($app, $enseignants);

        $niveauEtude = array('niveau_etude' => $post['niveau_etude']);
        $idNiveau = $livretQueries->insertNiveauEtude($app, $niveauEtude);

        //Insertion du calendrier dérogatoire
		$path = $app['paths']['webDir']."/uploads/";
		move_uploaded_file($_FILES['img_calendrier']['tmp_name'], $path.$_FILES['img_calendrier']['name']);
		$calendrierDerogatoireImg = $_FILES['img_calendrier']['name'];
        $calendrierDerogatoire = array('Annee_calendrier_derog' => date("Y"),
    				 					'description_calendrier_derog' => $post['description_calendrier_derog'],
    				  					'Img_calendrier' => $calendrierDerogatoireImg);
    	$idCalendrierDerogatoire = $livretQueries->insertCalendrierDerogatoire($app, $calendrierDerogatoire);

    	/***************************************************************/
    	/** 				Insertion Formation 					  **/
    	 /**************************************************************/
    	 $formation = array('id_type_filiere' => null,
    	 					'id_niveau_etude' => $idNiveau,
    	 					'Id_ufr' => $idUFR,
    	 					'Id_calendrier' => $idCalendrier,
    	 					'Id_calendrier_derog' => $idCalendrierDerogatoire,
    	 					'Annee_formation' => $post['annee_etude'],
    	 					'Date_vote_livret' => $post['date_vote_livret'],
    						'intitule_formation' => null,
    						'type_formation' => $post['mention'],
    						'description_formation' => $post['description_formation'],
    						'secretariat_formation' => $post['secretariat_formation'],
    						'responsable_formation' => $post['responsable_formation'],
    						'url_formation' => $post['url_formation'],
    						'responsable_rel_inter' => $post['sri'],
    						'desc_modalite_spec' => null,
    						'modalite_validation' => null);

    	$livretQueries->insertFormation($app, $formation);
        return $app['twig']->render('@views/base.html.twig', array('cache' => false,
            'auto_reload' => true,
            'form_sent'   => true
        ));
    }

    /**
     * Liste des livrets 
     * @return un template twig qui correspond à la page d'accueil
     * */
    function listeLivret(Application $app) {
        $livretQueries = new LivretQueries($app);
        $listeLivret = $livretQueries->getListeFormation($app);
        //var_dump($listeLivret);
        return $app['twig']->render('@views/liste.livrets.html.twig',array('livrets' => $listeLivret));
    }

    /**
     * Génération du PDF
     * @return un template twig qui correspond à la page d'accueil
     * */
    function genererPDF(Request $request, Application $app) {
        $livretQueries = new LivretQueries($app);
		$get = $request->query->all(); //Récupère $_GET
		$idFormation = intval($get['id']); //convertit string to int

        $livret = $livretQueries->getFormationByID($app, $idFormation);
        $livret = $livret[0];
        //var_dump($livret);
        $idNiveauEtude = $livret['id_niveau_etude'];
        $idUFR = $livret['Id_ufr'];
        $idCalendrier = $livret['Id_calendrier'];
        $idCalendrierDerogatoire = $livret['Id_calendrier_derog'];

        $niveauEtude = $livretQueries->getNiveauEtudeByID($app, $idNiveauEtude);
        $ufr = $livretQueries->getUFRByID($app, $idUFR);
        $calendrier = $livretQueries->getCalendrierByID($app, $idCalendrier);
        $calendrierDerogatoire = $livretQueries->getCalendrierDerogatoireByID($app, $idCalendrierDerogatoire);

        $niveauEtude = $niveauEtude[0];
        $ufr = $ufr[0];
        $calendrier = $calendrier[0];
        $calendrierDerogatoire = $calendrierDerogatoire[0];

        $livrets = array_merge($livret, $niveauEtude, $ufr, $calendrier, $calendrierDerogatoire);
        /*
        var_dump($livret);
        var_dump($niveauEtude);
        var_dump($ufr);
        var_dump($calendrier);
        var_dump($calendrierDerogatoire);
		*/
        return $app['twig']->render('@views/livret.html.twig', array('livret' => $livrets,
    								'ufr' => $ufr,
    								'calendrier' => $calendrier,
    								'calendrierDerogatoire' => $calendrierDerogatoire,
    								'niveauEtude' => $niveauEtude));
    }

}

?>