<? php
espace de noms src \ Model ;


 Catégorie de classe {
    // Catégorie de classe
    privé  $ Id ;
    privé  $ Nom ;
    privé  $ Description ;


     fonction  publique SqlGetCateg (\ PDO  $ bdd ) {
        // Requete pour toute la liste de categorie
        $ requete = $ bdd -> prepare ( 'SELECT * FROM categories' );
        $ requete -> execute ();
        $ arrayCategorie = $ requete -> fetchAll ();

        $ listCategorie = [];
        foreach ( $ arrayCategorie  as  $ categorieSQL ) {
            $ categorie = nouvelle  catégorie ();
            $ categorie -> setId ( $ categorieSQL [ 'Id' ]);
            $ categorie -> setNom ( $ categorieSQL [ 'Nom' ]);
            $ categorie -> setDescription ( $ categorieSQL [ 'Description' ]);

            $ listCategorie [] = $ categorie ;
        }
        return  $ listCategorie ;
    }

     fonction  publique SqlGet (\ PDO  $ bdd , $ idCategorie ) {
        // requete pour une categorie
        $ requete = $ bdd -> prepare ( 'SELECT * FROM categories where Id =: idCategorie' );
        $ requete -> exécuter ([
            'idCategorie' => $ idCategorie
        ]);
        $ arrayCategorie = $ requete -> fetch ();

            $ categorie = nouvelle  catégorie ();
            $ categorie -> setId ( $ arrayCategorie [ 'Id' ]);
            $ categorie -> setNom ( $ arrayCategorie [ 'Nom' ]);
            $ categorie -> setDescription ( $ arrayCategorie [ 'Description' ]);

        return  $ categorie ;
    }

     fonction  publique SqlAdd (\ PDO  $ bdd ) {
        // ajoute une categorie
        essayez {
            $ requete = $ bdd -> prepare ( 'INSERT INTO categories (Nom, Description) VALUES (: Nom ,: Description)' );
            $ requete -> exécuter ([
                "Nom" => $ this -> getNom (),
                "Description" => $ this -> getDescription (),
            ]);
            return  array ( "result" => true , "message" => $ bdd -> lastInsertId ());
        } catch (\ Exception  $ e ) {
            return  array ( "result" => false , "message" => $ e -> getMessage ());
        }
    }

     fonction  publique SqlUpdate (\ PDO  $ bdd ) {
        // Modifier une catégorie
        essayez {
            $ requete = $ bdd -> prepare ( 'UPDATE categories set Nom =: Nom, Description =: Description WHERE id =: IdCategorie' );
            $ requete -> exécuter ([
                'IdCategorie' => $ this -> getId ()
                , 'Nom' => $ this -> getNom ()
                , 'Description' => $ this -> getDescription ()
            ]);
            return  array ( "0" , "[OK] Update" );
        } catch (\ Exception  $ e ) {
            return  array ( "1" , "[ERREUR]" . $ e -> getMessage ());
        }
    }

     fonction  publique SqlDelete (\ PDO  $ bdd , $ idCategorie ) {
        essayez {
            $ requete = $ bdd -> prepare ( 'SUPPRIMER DES catégories où Id =: idCategorie' );
            $ requete -> exécuter ([
                'idCategorie' => $ idCategorie
            ]);
            retourne  vrai ;
        } catch (\ Exception  $ e ) {
            retourner  faux ;
        }
    }

    // ---- Se mettre ---
    / **
     * @return mixte
     * /
     fonction  publique getId ()
    {
        return  $ this -> Id ;
    }

    / **
     * @param mixte $ Id
     * Catégorie @return
     * /
     fonction  publique setId ( $ Id )
    {
        $ this -> Id = $ Id ;
        retourne  $ this ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getDescription ()
    {
        return  $ this -> Description ;
    }

    / **
     * @param mixed $ Description
     * Catégorie @return
     * /
    public  function  setDescription ( $ Description )
    {
        $ this -> Description = $ Description ;
        retourne  $ this ;
    }
    public  function  getNom () {
        return  $ this -> Nom ;
    }

    public  function  setNom ( $ Nom ) {
        $ this -> Nom = $ Nom ;
        return  $ Nom ;
    }

}