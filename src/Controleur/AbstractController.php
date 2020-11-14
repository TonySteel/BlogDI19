<? php
espace de noms src \ Controller ;

class  AbstractController {
    protected  $ loader ;
    protégé  $ twig ;

     fonction  publique __construct ()
    {
        // Configuration de TWIG
        $ this -> loader = new \ Twig \ Loader \ FilesystemLoader ( $ _SERVER [ 'DOCUMENT_ROOT' ]. '/../templates' );
        $ this -> twig = new \ Twig \ Environment (
            $ this -> chargeur , [
                'cache' => $ _SERVER [ 'DOCUMENT_ROOT' ]. '/../var/cache' ,
                'debug' => vrai
            ]
        );
        $ this -> twig -> addExtension ( new \ Twig \ Extension \ DebugExtension ());

        // Ajout d'une fonction PHP
        $ fileExist = new \ Twig \ TwigFunction ( 'file_exist' , function ( $ cheminFichier ) {
                si ( fichier_existe ( $ cheminFichier )) {
                    retourne  vrai ;
                } else {
                    retourner  faux ;
                }
        });
        $ this -> twig -> addFunction ( $ fileExist );

        $ this -> twig -> addGlobal ( 'session' , $ _SESSION );
    }

     fonction  publique getTwig () {
        retourne  $ this -> twig ;
    }
}