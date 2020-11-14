  
<? php
$ hostname = "mysql-mamie-a-jour.alwaysdata.net" ;
$ username = "193283" ;
$ mot de passe = "59nathan494" ;
$ dbname = "mamie-a-jour_pullup" ;

essayer
{
    $ bdd = new  PDO ( 'mysql: host =' . $ hostname . '; dbname =' . $ dbname . '; charset = utf8' , $ username , $ password );
    $ bdd -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
}
catch ( Exception  $ e )
{
    die ( 'Erreur:' . $ e -> getMessage ());
}