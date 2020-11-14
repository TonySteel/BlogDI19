<? php
session_start ();

nécessitent  '../vendor/autoload.php' ;

function  chargerClasse ( $ classe ) {
    $ ds = DIRECTORY_SEPARATOR ;
    $ dir = __DIR__. "{$ ds} .." ; // Remonte d'un cran par rapport à index.php
    $ classeName = str_replace ( '\\' , $ ds , $ classe );

    $ file = "{$ dir} {$ ds} {$ classeName} .php" ;
    if ( is_readable ( $ file )) {
        require_once  $ file ;
    }
}

spl_autoload_register ( 'chargerClasse' );

// Accueil
$ router = new \ src \ Router \ Router ( $ _GET [ 'url' ]);
$ router -> get ( '/' , "User # Accueil" );

// Editer le profil
$ router -> get ( '/ User /: id' , 'User # Edit # id' );
$ router -> post ( '/ User /: id' , 'User # Edit # id' );

// Match un utilisateur
$ router -> get ( '/ User / listMatch /: id' , 'User # listMatch # id' );
$ router -> post ( '/ User / listMatch /: id' , 'User # listMatch # id' );

// chercher un utilisateur
$ router -> post ( '/ Rechercher' , 'Utilisateur # Chercher' );

// condition générale d'utilisation
$ router -> get ( '/ condition' , 'Article # condition' );

// retour
$ router -> get ( '/ welcome' , 'User # welcome' );
$ router -> post ( '/ welcome' , 'User # welcome' );

// Utilisateur
$ router -> get ( '/ Contact' , 'Contact # showForm' );
$ router -> post ( '/ Contact / sendMail' , 'Contact # sendMail' );

//Une inscription
$ router -> get ( '/ inscription' , 'User # inscriptionForm' );
$ router -> post ( '/ inscription' , 'User # inscriptionCheck' );

//Rapport
$ router -> get ( '/ login' , 'User # loginForm' );
$ router -> post ( '/ login' , 'User # loginCheck' );

// Déconnexion
$ router -> get ( '/ Logout' , 'User # logout' );


// Afficher les utilisateurs devant être validé
$ router -> get ( '/ Utilisateur ' , 'User # DisplayUtilisateur' );

// supprimer l'utilisateur
$ router -> get ( '/ User / delUtilisateur /: id' , 'User # delUtilisateur # id' );

// Valider un utilisateur
$ router -> get ( '/ User / ValUtilisateur /: id' , 'User # ValUtilisateur # id' );
$ router -> post ( '/ User / ValUtilisateur /: id' , 'User # ValUtilisateur # id' );

// Afficher les utilisateurs validés
$ router -> get ( '/ ListUtilisateur' , 'User # DisplayTlm' );

// Afficher la correspondance
$ router -> get ( '/ match' , 'User # DisplayMatch' );

// Affiche Match
$ router -> get ( '/ Matching' , 'User # AfficheMatch' );


echo  $ routeur -> run ();

