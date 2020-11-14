

var  onloadCallback  =  function ( )  {
    grecaptcha . rendre ( ) ;
    alert ( "grecaptcha est prêt!" ) ;
} ;

function  backend_API_challenge ( ) {
    var  reponse  =  grecaptcha . getResponse ( ) ;

    $ . ajax ( {
        tapez : "POST" ,
        url : "https://www.google.com/recaptcha/api/siteverify" ,
        données : { "secret" : "6LcNR9YUAAAAANj9aeQhzcPHWc8pxjYlkQ63lhBy" ,  "response" : response ,  "remoteip" : "localhost" } ,
        contentType : 'application / x-www-form-urlencoded' ,
        succès : fonction ( données )  {  console . log ( données ) ;  }
    } ) ;
}