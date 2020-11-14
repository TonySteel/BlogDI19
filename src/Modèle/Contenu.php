<? php
espace de noms src \ Model ;


class  Contenu {
    privé  $ Id ;
    private  $ Titre ;
    privé  $ Description ;
    // privé $ Nom;


    / **
     * @return mixte
     * /
     fonction  publique getId ()
    {
        return  $ this -> Id ;
    }

    / **
     * @param mixte $ Id
     * @return Contenu
     * /
     fonction  publique setId ( $ Id )
    {
        $ this -> Id = $ Id ;
        retourne  $ this ;
    }

    / **
     * @return mixte
     * /
     fonction  publique getTitre ()
    {
        return  $ this -> Titre ;
    }

    / **
     * @param mixte $ Titre
     * @return Contenu
     * /
     fonction  publique setTitre ( $ Titre )
    {
        $ this -> Titre = $ Titre ;
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
     * @return Contenu
     * /
    public  function  setDescription ( $ Description )
    {
        $ this -> Description = $ Description ;
        retourne  $ this ;
    }

    public  function  getCategorie () {
        return  $ this -> Categorie ;
    }

    public  function  setCategorie ( $ Categorie ) {
        $ this -> Categorie = $ Categorie ;
        return  $ Categorie ;
    }

}
