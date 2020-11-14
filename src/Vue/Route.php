<? php
espace de noms src \ Router ;



Classe  Route {

     chemin privé $ ;
    privé  $ callable ;
     matchs privés $ ;
    privé  $ params = [];

     fonction  publique __construct ( $ path , $ callable ) {

        $ this -> chemin = trim ( $ chemin , '/' );
        $ this -> callable = $ callable ;

    }

     fonction  publique avec ( $ param , $ regex ) {
        $ this -> params [ $ param ] = str_replace ( '(' , '(?:' , $ regex );
        retourne  $ this ;
    }

     correspondance de fonction  publique ( $ url ) {
        $ url = trim ( $ url , '/' );
        // print_r ($ this-> chemin);
        $ path = preg_replace_callback ( '#: ([\ w] +) #' , [ $ this , 'paramMatch' ], $ this -> chemin );
        $ regex = "# ^ $ chemin $ # i" ;

        if (! preg_match ( $ regex , $ url , $ correspond )) {
            retourner  faux ;
        }
        array_shift ( $ correspond );
        $ this -> correspond = $ correspond ;
        retourne  vrai ;
    }

     fonction  privée paramMatch ( $ match ) {
        if ( isset ( $ this -> params [ $ match [ 1 ]])) {
            return  '(' . $ this -> params [ $ match [ 1 ]]. ')' ;
        }
        retourne  '([^ /] +)' ;

    }

     appel de fonction  publique () {
        if ( is_string ( $ this -> callable )) {
            $ params = exploser ( '#' , $ this -> appelable );
            $ controller = "src \\ Controller \\" . $ params [ 0 ]. "Contrôleur" ;
            $ controller = nouveau  $ controller ();
            return  call_user_func_array ([ $ controller , $ params [ 1 ]], $ this -> correspond );
        } else {
            return  call_user_func_array ( $ this -> appelable , $ this -> correspond );
        }
    }

     fonction  publique getUrl ( $ params ) {
        $ chemin = $ this -> chemin ;
        foreach ( $ params  as  $ k => $ v ) {
            $ chemin = str_replace ( ": $ k" , $ v , $ chemin );
        }
        return  $ chemin ;
    }
}