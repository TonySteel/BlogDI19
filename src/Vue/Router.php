<? php
espace de noms src \ Router ;


Class  Router {

    private  $ url ;
    private  $ routes = [];
    private  $ namedRoutes = [];

     fonction  publique __construct ( $ url ) {
        $ this -> url = $ url ;
    }

     fonction  publique get ( $ path , $ callable , $ name = null ) {
        return  $ this -> add ( $ chemin , $ appelable , $ nom , 'GET' );
    }

     publication de fonction  publique ( $ chemin , $ appelable , $ nom = null ) {
        return  $ this -> add ( $ chemin , $ appelable , $ nom , 'POST' );
    }

    public  function  put ( $ path , $ callable , $ name = null ) {
        return  $ this -> add ( $ chemin , $ appelable , $ nom , 'PUT' );
    }

    public  function  delete ( $ path , $ callable , $ name = null ) {
        return  $ this -> add ( $ chemin , $ appelable , $ nom , 'DELETE' );
    }


     fonction  privée add ( $ chemin , $ appelable , $ nom , $ méthode ) {
        $ route = nouvelle  route ( $ chemin , $ appelable );
        $ this -> routes [ $ method ] [] = $ route ;
        if ( is_string ( $ callable ) && $ name === null ) {
            $ nom = $ appelable ;
        }
        if ( $ name ) {
            $ this -> namedRoutes [ $ name ] = $ route ;
        }
        return  $ route ;
    }

    public  function  run () {
        if (! isset ( $ this -> routes [ $ _SERVER [ 'REQUEST_METHOD' ]])) {
            throw  new  RouterException ( 'REQUEST_METHOD n'existe pas' );
        }
        foreach ( $ this -> routes [ $ _SERVER [ 'REQUEST_METHOD' ]] comme  $ route ) {
            if ( $ route -> match ( $ this -> url )) {
                return  $ route -> call ();
            }
        }
        throw  new  RouterException ( 'No matching routes' );
    }

     url de fonction  publique ( $ name , $ params = []) {
        if (! isset ( $ this -> namedRoutes [ $ name ])) {
            throw  new  RouterException ( 'Aucune route ne correspond à ce nom' );
        }
        return  $ this -> namedRoutes [ $ name ] -> getUrl ( $ params );
    }

}