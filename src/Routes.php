<?php

//Définition du chemin des vues et des routes

$app['twig.loader.filesystem']->addPath($app['paths']['srcDir']."/Views/","views");
//Définir un préfixe de route pour ce module
$glp = $app['controllers_factory'];
$app->mount("/GLP/",$glp);

//Définition des routes subjacente + accronymes de module
$glp->get('/','Controllers\HomeControllers::indexPage')->bind('dashboard'); //Route vers la page d'accueil.
$glp->post('/','Controllers\HomeControllers::enreistrerLivret')->bind('enreistrerLivret'); 
$glp->get('/ListeLivret','Controllers\HomeControllers::listeLivret')->bind('listeLivret'); 
$glp->get('/Livret','Controllers\HomeControllers::genererPDF')->bind('livret'); 

?>