CREATE TABLE TYPE_FILIERE
( 
    id_filiere int NOT NULL PRIMARY KEY,
    filiere varchar(50) DEFAULT NULL
);
 
CREATE TABLE FORMATION
( 
    id_formation int NOT NULL PRIMARY KEY,
    id_type_filiere int NOT NULL,
    id_niveau_etude int NOT NULL,
    Id_ufr int DEFAULT NULL, --OK
    Id_calendrier int DEFAULT NULL, --OK
    Id_calendrier_derog int DEFAULT NULL, --OK
    Annee_formation varchar(4) DEFAULT NULL, --OK
    Date_vote_livret varchar(20) DEFAULT NULL, --OK
    type_formation varchar(50) NOT NULL, --OK
    intitule_formation varchar(50) DEFAULT NULL, --OK
    description_formation text DEFAULT NULL, --OK
    secretariat_formation varchar(50) DEFAULT NULL, --OK
    responsable_formation varchar(50) DEFAULT NULL, --OK
    url_formation varchar(100) DEFAULT NULL, --OK
    responsable_rel_inter varchar(50) DEFAULT NULL, --OK
    desc_modalite_spec text DEFAULT NULL, --OK
    modalite_validation text DEFAULT NULL --OK
);


CREATE TABLE CALENDRIER --OK
( 
    id_calendrier int NOT NULL PRIMARY KEY,
    Annee_calendrier varchar(20) DEFAULT NULL,
    description_calendrier text DEFAULT NULL
);

CREATE TABLE CALENDRIER_DEROGATOIRE --OK
( 
    id_calendrier_derog int NOT NULL PRIMARY KEY,
    Annee_calendrier_derog varchar(20) DEFAULT NULL,
    description_calendrier_derog text DEFAULT NULL,
    Img_calendrier varchar(200) DEFAULT NULL
);

CREATE TABLE NIVEAU_ETUDE
( 
    id_niveau_etude int NOT NULL PRIMARY KEY,
    niveau_etude varchar(20) DEFAULT NULL,
);
 
CREATE TABLE UFR --OK
( 
    id_ufr int PRIMARY KEY,
    nom_ufr varchar(50) DEFAULT NULL,
    adresse_ufr varchar(100) DEFAULT NULL,
    directeur_ufr varchar(50) DEFAULT NULL,
    responsable_administratif varchar(50) DEFAULT NULL,
    url_ufr varchar(100) DEFAULT NULL
);
 
CREATE TABLE UE
( 
    id_ue int PRIMARY KEY,
    id_formation int NOT NULL,
    libelle_ue varchar(100) DEFAULT NULL
);
CREATE TABLE ENSEIGNANT --OK
( 
    id_enseignant int NOT NULL PRIMARY KEY,
    nom_enseignant varchar(50) DEFAULT NULL
);
 
CREATE TABLE LIENS_UNIVERSITE
( 
    id_lien int NOT NULL PRIMARY KEY,
    Id_formation int NOT NULL,
    nom_service varchar(100) DEFAULT NULL,
    url_service varchar(100) DEFAULT NULL
);

 
CREATE TABLE EC 
 
(
    id_ec int PRIMARY KEY, 
    id_enseignant int NOT NULL, 
    code_ec varchar(20) DEFAULT NULL, 
    libelle_ec varchar(50) DEFAULT NULL, 
    nb_heures_cm int DEFAULT NULL, 
    nb_heures_td int DEFAULT NULL, 
    Volume_horaire varchar(3) DEFAULT NULL,
    nb_ects int DEFAULT NULL, 
    description_ec text DEFAULT NULL, 
    annee_ec varchar(4) DEFAULT NULL, 
    acces_cel BOOLEAN DEFAULT NULL,
    acces_erasmus BOOLEAN DEFAULT NULL,
    oeuvres_au_programme text DEFAULT NULL 
); 
CREATE TABLE STAGE
( 
    id_stage int NOT NULL PRIMARY KEY,
    description_stage varchar(500) DEFAULT NULL,
    duree_stage varchar(100) DEFAULT NULL,
    date_debut varchar(100) DEFAULT NULL,
    contact_formation varchar(50) DEFAULT NULL
);
 
CREATE TABLE EC_UE
(
   Id_ec int NOT NULL,
   Id_ue int NOT NULL, 
   Id_formation int NOT NULL,
   Description_maquette text
);
