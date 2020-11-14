<? php
espace de noms src \ Controller ;


utilisez src \ Model \ Bdd ;
utilisez src \ Model \ Categorie ;
utilisez src \ Model \ User ;

La classe  UserController  étend   AbstractController
{

     fonction  publique loginForm ()
    {
        unset ( $ _SESSION [ 'errorlogin' ]);
        return  $ this -> twig -> render ( 'User / login.html.twig' );
    }

     fonction  publique Accueil () {
        return  $ this -> twig -> render ( 'User / index.html.twig' );
    }

    public  function  welcome () {
        return  $ this -> twig -> render ( 'Article / Accueil.html.twig' );
    }

     inscription de fonction  publiqueForm ()
    {
        unset ( $ _SESSION [ 'errinscription' ]);
        unset ( $ _SESSION [ 'errinscriptionA' ]);
        unset ( $ _SESSION [ 'errinscriptionB' ]);
        return  $ this -> twig -> render ( 'User / inscription.html.twig' );
    }

     fonction  publique loginCheck ()
    {
        / * Fonction déclenchée par le clic sur le bouton de connexion.
          renvoi sur la page d'accueil si ok sinon renvoi sur la page connexion
        * /
        if ( trim ( $ _POST [ 'email' ]) == '' ) {
            $ _SESSION [ 'errorlogin' ] = "Veuillez entrer une adresse Email" ;
            header ( 'Emplacement: / login' );
            retour ;
        }

        if ( trim ( $ _POST [ 'mot de passe' ]) == '' ) {
            $ _SESSION [ 'errorlogin' ] = "Veuillez entrer un mot de passe" ;
            header ( 'Emplacement: / login' );
            retour ;
        }
        if ( trim ( $ _POST [ 'password' ])! = strip_tags ( trim ( $ _POST [ 'password' ]))) {
            $ _SESSION [ 'errorlogin' ] = "Le mot de passe n'est pas valide" ;
            header ( 'Emplacement: / login' );
            retour ;
        }
        if ( trim ( $ _POST [ 'email' ])! = strip_tags ( trim ( $ _POST [ 'email' ]))) {
            $ _SESSION [ 'errorlogin' ] = "L'adresse mail n'est pas valide" ;
            header ( 'Emplacement: / login' );
            retour ;
        }


        $ userall = nouvel  utilisateur ();
        $ emails = $ userall -> SqlGetAllEmail ( Bdd :: GetInstance ());
        $ email_exist = faux ;
        foreach ( $ emails  comme  $ email ) {
            if ( strtolower ( trim ( $ _POST [ 'email' ])) == ( strtolower ( trim ( $ email )))) {
                $ email_exist = vrai ;
            }
        }

        if ( $ email_exist == false ) {
            $ _SESSION [ 'errorlogin' ] = "EMail ou Mot de passe incorrect" ;
            header ( 'Emplacement: / login' );
            retour ;
        }

      // Test du Captcha
        // Ma clé privée
        $ secret = "6LcNR9YUAAAAANj9aeQhzcPHWc8pxjYlkQ63lhBy" ;
        // Paramètre renvoyé par le recaptcha
        $ response = $ _POST [ 'g-recaptcha-response' ];
        // Sur récupère l'adresse IP de l'utilisateur
        $ remoteip = $ _SERVER [ 'REMOTE_ADDR' ];

        $ api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
            . $ secret
            . "& response =" . $ réponse
            . "& remoteip =" . $ remoteip ;

        $ decode = json_decode ( file_get_contents ( $ api_url ), true );
      // ---

        $ options = [
            'salt' => md5 ( strtolower ( $ _POST [ 'email' ])),
            'cost' => 12  // le coût par défaut est 10
        ];
        define ( 'PEPPER' , sha1 ( strtolower ( $ _POST [ 'email' ])));
        $ pwd_hashed_entry = password_hash (( $ _POST [ 'mot de passe' ]). PEPPER , PASSWORD_DEFAULT , $ options );
        $ utilisateur = nouvel  utilisateur ();
        $ userInfoLog = $ utilisateur -> SqlGetLogin ( Bdd :: GetInstance (), ( $ _POST [ 'email' ]));
        $ pwd_hashed_bdd = $ userInfoLog [ 'USER_PASSWORD' ];

        if ( $ pwd_hashed_entry == $ pwd_hashed_bdd et $ decode [ 'success' ] == true ) {
            $ arrayRole = exploser ( "" , $ userInfoLog [ 'USER_ROLE' ]);
            $ _SESSION [ 'login' ] = array ( "id" => $ userInfoLog [ 'USER_ID' ],
                "roles" => $ arrayRole ,
                "projet" => $ userInfoLog [ 'USER_PROJET' ],
                "prenom" => $ userInfoLog [ 'USER_PRENOM' ],
                "email" => $ userInfoLog [ 'USER_EMAIL' ],
                "nom" => $ userInfoLog [ 'USER_NOM' ],
                "role" => $ userInfoLog [ 'USER_ROLE' ],
                "valider" => $ userInfoLog [ 'USER_VALIDER' ],
                "comme" => $ userInfoLog [ 'USER_LIKE' ]);

            return  $ this -> twig -> render ( 'Article / Accueil.html.twig' );

        } else {
            $ _SESSION [ 'errorlogin' ] = "Email, Mot de passe ou captcha incorrect" ;
            header ( 'Emplacement: / login' );

        }
    }



    // Rôles utilisateurs: administrateur ou redacteur
     fonction publique statique  roleNeed ( $ roleATester ) 
    {
        if ( isset ( $ _SESSION [ 'login' ])) {
            if (! in_array ( $ roleATester , $ _SESSION [ 'login' ] [ 'roles' ])) {
                $ _SESSION [ 'errorlogin' ] = "Manque le rôle:" . $ roleATester ;
                header ( 'Location: / Contact' );
            }
        } else {
            $ _SESSION [ 'errorlogin' ] = "Veuillez vous identifier" ;
            header ( 'Emplacement: / login' );
        }
    }

    // permet de visualiser les utilisateurs non validé
     fonction  publique AfficherUtilisateur () {
        $ utilisateur = nouvel  utilisateur ();
        $ listUtilisateur = $ utilisateur -> SqlUtilisateur ( Bdd :: GetInstance ());

        return  $ this -> twig -> render ( 'User / Utilisateur.html.twig' , [ 'utilisateurlist' => $ listUtilisateur ]);
    }

    // permet de visualiser les utilisateurs validé
     fonction  publique Affichertlm () {
        $ utilisateur = nouvel  utilisateur ();
        $ listUtilisateur = $ utilisateur -> Sqltlm ( Bdd :: GetInstance ());

        return  $ this -> twig -> render ( 'User / ListUtilisateur.html.twig' , [ 'utilisateurlist' => $ listUtilisateur ]);
    }

    public  function  AfficheMatch () {
        $ utilisateur = nouvel  utilisateur ();
        $ listUtilisateur = $ utilisateur -> Matchtlm ( Bdd :: GetInstance ());

        return  $ this -> twig -> render ( 'User / Matching.html.twig' , [ 'utilisateurlist' => $ listUtilisateur ]);
    }

     fonction  publique AfficherMatch () {
        $ utilisateur = nouvel  utilisateur ();
        $ listUtilisateur = $ utilisateur -> SqlPersonne ( Bdd :: GetInstance ());

        return  $ this -> twig -> render ( 'User / Match.html.twig' , [ 'utilisateurlist' => $ listUtilisateur ]);
    }



    // Permet la validation d'un utilisateur
     fonction publique statique  ValUtilisateur ( $ id ) { 
    $ Utilisateur = nouvel  utilisateur ();
    $ Utilisateur -> SQlValUtilisateur ( Bdd :: GetInstance (), $ id );

        header ( 'Location: / Utilisateur' );
    }

    // Permet de supprimer un utilisateur
     fonction publique statique  delUtilisateur ( $ id ) { 
        $ Utilisateur = nouvel  utilisateur ();
        $ Utilisateur -> SQldel ( Bdd :: GetInstance (), $ id );

        header ( 'Location: / Utilisateur' );
    }

    public  static  function  listMatch ( $ id ) {
        $ Utilisateur = nouvel  utilisateur ();
        $ Utilisateur -> SQlMatch ( Bdd :: GetInstance (), $ id );

        header ( 'Location: / match' );
    }

      fonction  publique Edit ()
    {
        $ id = $ _SESSION [ "login" ] [ "id" ];

        if ( $ _POST ) {

            $ Edit = nouvel  utilisateur ;

            $ Edit -> setUSERNOM ( $ _POST [ "nom" ]);
            $ Edit -> setUSERPRENOM ( $ _POST [ "prenom" ]);
            $ Edit -> setUSERAGE ( $ _POST [ "age" ]);
            $ Edit -> setUSERVILLE ( $ _POST [ "ville" ]);
            $ Edit -> setUSERSEXE ( $ _POST [ "sexe" ]);
            $ Edit -> setUSERPROJET ( $ _POST [ "projet" ]);
            $ Edit -> setUSERDESC ( $ _POST [ "description" ]);
            $ Edit -> setUSERCENTRE ( $ _POST [ "center" ]);
            $ Edit -> setUSERPROFESSION ( $ _POST [ "profession" ]);
            $ Edit -> setUSERMOI ( $ _POST [ "moi" ]);
            $ Edit -> setUSERSITUATION ( $ _POST [ "situation" ]);
            $ Edit -> setUSERCHERCHE ( $ _POST [ "cherche" ]);
            $ Edit -> EditProfile ( Bdd :: GetInstance (), $ id );

        } else {

            // Récupérer les données de l'utilisateur avec l'id => $ id
            $ utilisateur = nouvel  utilisateur ();
            $ datauser = $ utilisateur -> GetProfile ( Bdd :: GetInstance (), $ id );

            return  $ this -> twig -> render ( 'User / readFile.html.twig' , [ 'utilisateur' => $ datauser ]);
        }
    }


     fonction  publique Chercher ()
    {
        // Moteur de recherche par mot clé
        $ Utilisateur = nouvel  utilisateur ();
        $ MotCle = strip_tags ( $ _POST [ 'recherche' ]);
        $ listUtilisateur = $ Utilisateur -> SqlGetChercher ( Bdd :: GetInstance (), $ MotCle );

        retourne  $ this -> twig -> render (
            'User / ListUtilisateur.html.twig' , [
            'utilisateurlist' => $ listUtilisateur ]);
    }

    // fonction Inscription utilisateur
     fonction  publique InscriptionCheck ()
    {
        if ( $ _POST ) {
            if (! var_filtre (
                $ _POST [ 'mot de passe' ],
                FILTER_VALIDATE_REGEXP ,
                tableau (
                    "options" => tableau ( "regexp" => "/ [a-zA-Z] {5,} /" )
                    )
                )
            )

            {
                $ _SESSION [ 'errinscription' ] = "Le mot de passe ne peut être inférieur à 5 caractères" ;
                en-tête ( 'Emplacement: / inscription' );
            } else {
                if (( $ _POST [ 'mot de passe' ])! = ( $ _POST [ 'mot de passe2 ' ])) {

                    $ _SESSION [ 'errinscription' ] = "Les mots de passe ne correspondant pas" ;
                    en-tête ( 'Emplacement: / inscription' );
                    retour ;
                }
                $ userall = nouvel  utilisateur ();
                $ emails = $ userall -> SqlGetAllEmail ( Bdd :: GetInstance ());
                $ email_exist = faux ;
                foreach ( $ emails  comme  $ email ) {
                    if ( strtolower ( trim ( $ _POST [ 'email' ])) == $ email ) {
                        $ email_exist = vrai ;
                    }
                }

                        if ( $ email_exist == true ) {
                            $ _SESSION [ 'errinscriptionB' ] = '/ login' ;
                            $ _SESSION [ 'errinscriptionA' ] = "Se connecter" ;
                            $ _SESSION [ 'errinscription' ] = "L'email est déja utilisé" ;
                            en-tête ( 'Emplacement: / inscription' );
                            retour ;
                        } else {
                            $ options = [
                                'salt' => md5 ( strtolower ( $ _POST [ 'email' ])),
                                'cost' => 12  // le coût par défaut est 10
                            ];
                            define ( 'PEPPER' , sha1 ( strtolower ( $ _POST [ 'email' ])));
                            $ pwd_hashed = password_hash (( $ _POST [ 'mot de passe' ]). PEPPER , PASSWORD_DEFAULT , $ options );

                            $ utilisateur = nouvel  utilisateur ();
                            $ utilisateur -> setUSERPRENOM ( $ _POST [ "prenom" ]);
                            $ utilisateur -> setUSERNOM ( $ _POST [ "nom" ]);
                            $ utilisateur -> setUSEREMAIL ( strtolower ( $ _POST [ 'email' ]));
                            $ utilisateur -> setUSERPASSWORD ( $ pwd_hashed );
                            $ utilisateur -> SqlAdd ( Bdd :: GetInstance ());
                            unset ( $ _SESSION [ 'errinscription' ]);
                            unset ( $ _SESSION [ 'errorlogin' ]);
                            header ( 'Emplacement: / login' );

                            if ( $ email_exist == false ) {
                                $ _SESSION [ 'errorlogin' ] = "EMail ou Mot de passe incorrect" ;
                                header ( 'Emplacement: / login' );
                                retour ;
                            }
                        }
                }
            }

        }

        // fonction Déconnexion
        Publique
         déconnexion de la fonction ()
        {
            unset ( $ _SESSION [ 'login' ]);
            unset ( $ _SESSION [ 'errorlogin' ]);

            en-tête ( 'Emplacement: /' );
        }

        // Afficher le fichier test.css dans la page d'édition css
         fonction  publique readFile () {
            $ fichier = 'test.css' ;
            $ dataCss = file_get_contents ( 'assets /' . $ file );

            $ Categorie = nouvelle  catégorie ();
            $ listCategorie = $ Categorie -> SqlGetCateg ( Bdd :: GetInstance ());
            return  $ this -> twig -> render ( 'User / readFile.html.twig' , [
                // contenu du fichier css envoyé dans la vue
                'cssFileData' => $ dataCss
                , 'listCat' => $ listCategorie
            ]);
        }

        // Ecrit les modifications CSS dans le fichier test.css
        public  function  writeFile () {
            $ fichier = 'test.css' ;
            file_put_contents ( 'assets /' . $ file , $ _POST [ 'cssFileData' ]);
            en-tête ( "emplacement: / Utilisateur" );
            retour ;
        }
}