<? php
espace de noms src \ Model;
utiliser AOP;
classe Bdd {
    private static $ _instance = null;


    fonction publique statique InitInstance () {
        $ hostname = "mysql-mamie-a-jour.alwaysdata.net";
        $ username = "193283";
        $ mot de passe = "59nathan494";
        $ dbname = "mamie-a-jour_pullup";

        essayer
        {
           self :: $ _ instance = new PDO ('mysql: host ='. $ hostname. '; dbname ='. $ dbname. '; charset = utf8', $ username, $ password);
           self :: $ _ instance-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        }
        catch (\ Exception $ e)
        {
            die ('Erreur:'. $ e-> getMessage ());
        }

    }

    fonction publique statique GetInstance () {
        if (self :: $ _ instance == null) {
           self :: InitInstance ();
        }

        retourne self :: $ _ instance;
    }

}