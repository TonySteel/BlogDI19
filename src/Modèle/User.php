<? php
espace de noms src \ Model ;


class  User  implements \ JsonSerializable
{

    private  $ USERID ;
    private  $ USEREMAIL ;
    privé  $ USERNOM ;
    private  $ USERPRENOM ;
    private  $ USERTOKEN ;
    private  $ USERROLE ;
    private  $ USERSTATUS ;
    private  $ USERPASSWORD ;
    private  $ USERISADMIN ;
    privé  $ USERAGE ;
    privé  $ USERVILLE ;
    private  $ USERSEXE ;
    private  $ USERPROJET ;
    private  $ USERDESC ;
    privé  $ USERCENTRE ;
    private  $ USERPROFESSION ;
    privé  $ USERMOI ;
    privé  $ USERSITUATION ;
    privé  $ USERCHERCHE ;
    privé  $ USERLIKE ;

    / **
     * @return mixte
     * /
     fonction  publique getUSERISADMIN ()
    {
        return  $ this -> USERISADMIN ;
    }

    / **
     * @param mixte $ USERISADMIN
     * /
     fonction  publique setUSERISADMIN ( $ USERISADMIN )
    {
        $ this -> USERISADMIN = $ USERISADMIN ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERID ()
    {
        return  $ this -> USERID ;
    }

    / **
     * @param mixed $ USERID
     * /
    public  function  setUSERID ( $ USERID )
    {
        $ this -> USERID = $ USERID ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSEREMAIL ()
    {
        return  $ this -> USEREMAIL ;
    }

    / **
     * @param mixte $ USEREMAIL
     * /
    public  function  setUSEREMAIL ( $ USEREMAIL )
    {
        $ this -> USEREMAIL = $ USEREMAIL ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERNOM ()
    {
        retourne  $ this -> USERNOM ;
    }

    / **
     * @param mixte $ USERNOM
     * /
    public  function  setUSERNOM ( $ USERNOM )
    {
        $ this -> USERNOM = $ USERNOM ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERPRENOM ()
    {
        return  $ this -> USERPRENOM ;
    }

    / **
     * @param mixed $ USERPRENOM
     * /
    public  function  setUSERPRENOM ( $ USERPRENOM )
    {
        $ this -> USERPRENOM = $ USERPRENOM ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERTOKEN ()
    {
        return  $ this -> USERTOKEN ;
    }

    / **
     * @param mixte $ USERTOKEN
     * /
     fonction  publique setUSERTOKEN ( $ USERTOKEN )
    {
        $ this -> USERTOKEN = $ USERTOKEN ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERROLE ()
    {
        return  $ this -> USERROLE ;
    }

    / **
     * @param mixte $ USERROLE
     * /
     fonction  publique setUSERROLE ( $ USERROLE )
    {
        $ this -> USERROLE = $ USERROLE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERSTATUS ()
    {
        return  $ this -> USERSTATUS ;
    }

    / **
     * @param mixte $ USERSTATUS
     * /
    public  function  setUSERSTATUS ( $ USERSTATUS )
    {
        $ this -> USERSTATUS = $ USERSTATUS ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERPASSWORD ()
    {
        return  $ this -> USERPASSWORD ;
    }

    / **
     * @param mixed $ USERPASSWORD
     * /
    public  function  setUSERPASSWORD ( $ USERPASSWORD )
    {
        $ this -> USERPASSWORD = $ USERPASSWORD ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERAGE ()
    {
        return  $ this -> USERAGE ;
    }

    / **
     * @param mixte $ USERAGE
     * /
    public  function  setUSERAGE ( $ USERAGE )
    {
        $ this -> USERAGE = $ USERAGE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERVILLE ()
    {
        return  $ this -> USERVILLE ;
    }

    / **
     * @param mixte $ USERVILLE
     * /
     fonction  publique setUSERVILLE ( $ USERVILLE )
    {
        $ this -> USERVILLE = $ USERVILLE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERSEXE ()
    {
        return  $ this -> USERSEXE ;
    }

    / **
     * @param mixte $ USERSEXE
     * /
     fonction  publique setUSERSEXE ( $ USERSEXE )
    {
        $ this -> USERSEXE = $ USERSEXE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERPROJET ()
    {
        return  $ this -> USERPROJET ;
    }

    / **
     * @param mixte $ USERPROJET
     * /
     fonction  publique setUSERPROJET ( $ USERPROJET )
    {
        $ this -> USERPROJET = $ USERPROJET ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERDESC ()
    {
        return  $ this -> USERDESC ;
    }

    / **
     * @param mixte $ USERDESC
     * /
     fonction  publique setUSERDESC ( $ USERDESC )
    {
        $ this -> USERDESC = $ USERDESC ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERCENTRE ()
    {
        return  $ this -> USERCENTRE ;
    }

    / **
     * @param mixte $ USERCENTRE
     * /
     fonction  publique setUSERCENTRE ( $ USERCENTRE )
    {
        $ this -> USERCENTRE = $ USERCENTRE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERPROFESSION ()
    {
        return  $ this -> USERPROFESSION ;
    }

    / **
     * @param mixed $ USERPROFESSION
     * /
     fonction  publique setUSERPROFESSION ( $ USERPROFESSION )
    {
        $ this -> USERPROFESSION = $ USERPROFESSION ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERMOI ()
    {
        return  $ this -> USERMOI ;
    }

    / **
     * @param mixte $ USERMOI
     * /
     fonction  publique setUSERMOI ( $ USERMOI )
    {
        $ this -> USERMOI = $ USERMOI ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERSITUATION ()
    {
        return  $ this -> USERSITUATION ;
    }

    / **
     * @param mixed $ USERSITUATION
     * /
    public  function  setUSERSITUATION ( $ USERSITUATION )
    {
        $ this -> USERSITUATION = $ USERSITUATION ;
    }

    / **
 * @return mixte
 * /
     fonction  publique getUSERCHERCHE ()
    {
        return  $ this -> USERCHERCHE ;
    }

    / **
     * @param mixte $ USERCHERCHE
     * /
    public  function  setUSERCHERCHE ( $ USERCHERCHE )
    {
        $ this -> USERCHERCHE = $ USERCHERCHE ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getUSERLIKE ()
    {
        return  $ this -> USERLIKE ;
    }

    / **
     * @param mixte $ USERLIKE
     * /
    public  function  setUSERLIKE ( $ USERLIKE )
    {
        $ this -> USERLIKE = $ USERLIKE ;
    }


     fonction  publique jsonSerialize ()
    {
        retour [
            'userid' => $ this -> getUSERID (),
            'usermail' => $ this -> getUSEREMAIL (),
            'usernom' => $ this -> getUSERNOM (),
            'userprenom' => $ this -> getUSERPRENOM (),
            'usertoken' => $ this -> getUSERTOKEN (),
            'userrole' => $ this -> getUSERROLE (),
            'userstatus' => $ this -> getUSERSTATUS (),
            'userpassword' => $ this -> getUSERPASSWORD (),
            'userisadmin' => $ this -> getUSERISADMIN (),
            'userage' => $ this -> getUSERAGE (),
            'userville' => $ this -> getUSERVILLE (),
            'usersexe' => $ this -> getUSERSEXE (),
            'userprojet' => $ this -> getUSERPROJET (),
            'userdescription' => $ this -> getUSERDESC (),
            'usercentre' => $ this -> getUSERCENTRE (),
            'userprofession' => $ this -> getUSERPROFESSION (),
            'usermoi' => $ this -> getUSERMOI (),
            'usersituation' => $ this -> getUSERSITUATION (),
            'usercherche' => $ this -> getUSERCHERCHE (),
            'userlike' => $ this -> getUSERLIKE (),
        ];
    }

     fonction  publique SqlUtilisateur (\ PDO  $ bdd )
    {
        $ query = $ bdd -> prepare ( 'SELECT USER_ID, USER_PRENOM, USER_NOM FROM utilisateur où USER_VALIDER = 0' );
        $ query -> execute ();
        $ arrayUser = $ query -> fetchAll ();
        $ listUser = [];
        foreach ( $ arrayUser  as  $ UserSQL ) {

            $ Utilisateur = nouvel  utilisateur ();
            $ User -> setUSERID ( $ UserSQL [ 'USER_ID' ]);
            $ User -> setUSERNOM ( $ UserSQL [ 'USER_NOM' ]);
            $ User -> setUSERPRENOM ( $ UserSQL [ 'USER_PRENOM' ]);

            $ listUser [] = $ Utilisateur ;
        }

        return  $ arrayUser ;
    }

     fonction  publique SqlPersonne (\ PDO  $ bdd )
    {
        $ query = $ bdd -> prepare ( 'SELECT USER_ID, USER_PROJET, USER_NOM, USER_PRENOM FROM utilisateur où USER_LIKE = 0' );
        $ query -> execute ();
        $ arrayUser = $ query -> fetchAll ();
        $ listUser = [];
        foreach ( $ arrayUser  as  $ UserSQL ) {

            $ Utilisateur = nouvel  utilisateur ();
            $ User -> setUSERID ( $ UserSQL [ 'USER_ID' ]);
            $ User -> setUSERID ( $ UserSQL [ 'USER_PROJET' ]);
            $ User -> setUSERNOM ( $ UserSQL [ 'USER_NOM' ]);
            $ User -> setUSERPRENOM ( $ UserSQL [ 'USER_PRENOM' ]);

            $ listUser [] = $ Utilisateur ;
        }

        return  $ arrayUser ;
    }



     fonction  publique SqlGetChercher (\ PDO  $ bdd , $ MotCle ) {
        // requete de recherche par mot clé dans titre
        $ requete = $ bdd -> prepare ( 'SELECT * FROM utilisateur où USER_VALIDER = 1 et USER_PROJET LIKE: recherche' );
        $ requete -> exécuter (
            [ 'search' => "%" . $ MotCle . "%" ]
        );
        $ arrayUser = $ requete -> fetchAll ();

        $ listUtilisateur = [];
        foreach ( $ arrayUser  as  $ UtilisateurSQL ) {
            $ Utilisateur = nouvel  utilisateur ();
            $ Utilisateur -> setUSERID ( $ UtilisateurSQL [ 'USER_ID' ]);
            $ Utilisateur -> setUSERNOM ( $ UtilisateurSQL [ "USER_NOM" ]);
            $ Utilisateur -> setUSERPRENOM ( $ UtilisateurSQL [ "USER_PRENOM" ]);
            $ Utilisateur -> setUSERPROJET ( $ UtilisateurSQL [ "USER_PROJET" ]);

            $ listUtilisateur [] = $ Utilisateur ;
        }
        return  $ arrayUser ;
    }


     fonction  publique Sqltlm (\ PDO  $ bdd )
    {
        $ query = $ bdd -> prepare ( 'SELECT USER_ID, USER_PRENOM, USER_NOM, USER_ROLE, USER_PROJET FROM utilisateur où USER_VALIDER = 1' );
        $ query -> execute ();
        $ arrayUser = $ query -> fetchAll ();
        $ listUser = [];
        foreach ( $ arrayUser  as  $ UserSQL ) {

            $ Utilisateur = nouvel  utilisateur ();
            $ User -> setUSERID ( $ UserSQL [ 'USER_ID' ]);
            $ User -> setUSERNOM ( $ UserSQL [ 'USER_NOM' ]);
            $ User -> setUSERPRENOM ( $ UserSQL [ 'USER_PRENOM' ]);
            $ User -> setUSERROLE ( $ UserSQL [ 'USER_ROLE' ]);
            $ User -> setUSERPROJET ( $ UserSQL [ 'USER_PROJET' ]);


            $ listUser [] = $ Utilisateur ;
        }

        return  $ arrayUser ;
    }

     fonction  publique Matchtlm (\ PDO  $ bdd )
    {
        $ query = $ bdd -> prepare ( 'SELECT USER_PRENOM, USER_NOM, USER_PROJET FROM utilisateur où USER_LIKE = 1' );
        $ query -> execute ();
        $ arrayUser = $ query -> fetchAll ();
        $ listUser = [];
        foreach ( $ arrayUser  as  $ UserSQL ) {

            $ Utilisateur = nouvel  utilisateur ();
            $ User -> setUSERNOM ( $ UserSQL [ 'USER_NOM' ]);
            $ User -> setUSERPRENOM ( $ UserSQL [ 'USER_PRENOM' ]);
            $ User -> setUSERPROJET ( $ UserSQL [ 'USER_PROJET' ]);

            $ listUser [] = $ Utilisateur ;
        }

        return  $ arrayUser ;
    }

     fonction  publique SQlValUtilisateur (\ PDO  $ bdd , $ id ) {
        $ query = $ bdd -> prepare ( 'update user set USER_VALIDER = 1 where USER_ID =: id' );
        $ query -> exécuter ([
            'id' => $ id ,
        ]);
    }

     fonction  publique SQlMatch (\ PDO  $ bdd , $ id ) {
        $ query = $ bdd -> prepare ( 'update user set USER_LIKE = 1 where USER_ID =: id' );
        $ query -> exécuter ([
            'id' => $ id ,
        ]);
    }

     fonction  publique SQlDel (\ PDO  $ bdd , $ id ) {
        $ query = $ bdd -> prepare ( 'DELETE FROM user WHERE USER_ID =: id;' );
        $ query -> exécuter ([
            'id' => $ id ,
        ]);
    }

     fonction  publique SqlAdd (\ PDO  $ bdd )
    {
        $ query = $ bdd -> prepare ( 'INSERT INTO user (USER_PRENOM, USER_NOM, USER_PASSWORD, USER_EMAIL) VALUES (: prenom,: nom,: password,: email)' );
        $ query -> exécuter ([
            "prenom" => $ this -> getUSERPRENOM (),
            "nom" => $ this -> getUSERNOM (),
            "password" => $ this -> getUSERPASSWORD (),
            "email" => $ this -> getUSEREMAIL ()
        ]);
    }

     Message de fonction  publique (\ PDO $ bdd ) 
    {
        $ query = $ bdd -> prepare ( 'INSERT INTO articles (message) VALUES (: message)' );
        $ query -> exécuter ([
            "message" => $ this -> getMESSAGE (),
        ]);
    }

     fonction  publique SqlGetAllEmail (\ PDO  $ bdd ) {

        $ query = $ bdd -> prepare ( "SELECT USER_EMAIL FROM user" );
        $ query -> execute ();
        $ arrayUser = $ query -> fetchAll ();

        $ emailUsers = [];
        foreach ( $ arrayUser  comme  $ userSQL ) {
            $ utilisateur = nouvel  utilisateur ();
            $ utilisateur -> setUSEREMAIL ( strtolower ( $ userSQL [ 'USER_EMAIL' ]));

            $ emailUsers [] = $ utilisateur -> getUSEREMAIL ();
        }
        return  $ emailUsers ;
    }



     fonction  publique SqlGetLogin (\ PDO  $ bdd , $ emailuser ) {
        $ query = $ bdd -> prepare ( 'SELECT USER_PASSWORD, USER_ROLE, USER_EMAIL, USER_NOM, USER_PRENOM, USER_PROJET, USER_ID, USER_VALIDER, USER_LIKE FROM utilisateur WHERE USER_EMAIL =: useremail' );
        $ query -> exécuter ([
            'useremail' => $ emailuser

        ]);

        $ UserInfoLog = $ requête -> fetch ();
        $ utilisateur = nouvel  utilisateur ();
        $ utilisateur -> setUSERPASSWORD ( $ UserInfoLog [ 'USER_PASSWORD' ]);
        $ utilisateur -> setUSERID ( $ UserInfoLog [ 'USER_ID' ]);
        $ utilisateur -> setUSERNOM ( $ UserInfoLog [ "USER_NOM" ]);
        $ utilisateur -> setUSERPRENOM ( $ UserInfoLog [ "USER_PRENOM" ]);
        $ utilisateur -> setUSERPROJET ( $ UserInfoLog [ "USER_PROJET" ]);
        $ utilisateur -> setUSERROLE ( $ UserInfoLog [ "USER_ROLE" ]);
        $ utilisateur -> setUSERLIKE ( $ UserInfoLog [ "USER_LIKE" ]);

        $ UserInfoLog [] = $ utilisateur ;

        return  $ UserInfoLog ;
    }

     fonction  publique EditProfile (\ PDO  $ bdd , $ id )
    {
        $ query = $ bdd -> prepare ( 'update user set USER_NOM =: nom, USER_PRENOM =: prenom, USER_AGE =: age, USER_VILLE =: ville, USER_SEXE =: sexe, USER_PROJET =: projet, USER_DESC =: description, USER_CENTRE = : center, USER_PROFESSION =: profession, USER_MOI =: moi, USER_SITUATION =: situation, USER_CHERCHE =: cherche où USER_ID =: id ' );
        $ query -> exécuter ([
            'id' => $ id ,
            'nom' => $ this -> getUSERNOM (),
            'prenom' => $ this -> getUSERPRENOM (),
            'age' => $ this -> getUSERAGE (),
            'ville' => $ this -> getUSERVILLE (),
            'sexe' => $ this -> getUSERSEXE (),
            'projet' => $ this -> getUSERPROJET (),
            'description' => $ this -> getUSERDESC (),
            'center' => $ this -> getUSERCENTRE (),
            'profession' => $ this -> getUSERPROFESSION (),
            'moi' => $ this -> getUSERMOI (),
            'situation' => $ this -> getUSERSITUATION (),
            'cherche' => $ this -> getUSERCHERCHE (),

        ]);
    }

     fonction  publique GetProfile (\ PDO  $ bdd , $ id )
    {
        $ query = $ bdd -> prepare ( 'SELECT * FROM utilisateur où USER_ID =: id' );
        $ query -> exécuter ([
            'id' => $ id
        ]);

        return  $ query -> fetch ();
    }

}