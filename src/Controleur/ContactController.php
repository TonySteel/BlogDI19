<? php
espace de noms src \ Controller ;

utilisez src \ Model \ Bdd ;

La classe  ContactController  étend  AbstractController {
    privé  $ mailer ;
     transport $ privé ;

     fonction  publique __construct ()
    {
        parent :: __construct ();
        $ this -> transport = ( nouveau \ Swift_SmtpTransport ( 'smtp.mailtrap.io' , 465 ))
            -> setUsername ( '1144c7ac307f4a' )
            -> setPassword ( '32b6023a38c84d' );
        $ this -> mailer = new \ Swift_Mailer ( $ this -> transport );

    }

    public  function  showForm () {
        return  $ this -> twig -> render ( 'Contact / form.html.twig' );
    }

    // Envoi du mail
     fonction  publique sendMail () {
        $ mail = ( new \ Swift_Message ( 'Contact depuis le formulaire' ))
            -> setFrom ([ $ _POST [ "email" ] => $ _POST [ "nom" ]])
            -> setTo ( 'contact@monsite.fr' )
            -> setBody (
                $ this -> twig -> render ( 'Contact / mail.html.twig' ,
                    [
                        'message' => $ _POST [ "contenu" ]
                    ])
                , 'texte / html'
            );
        en-tête ( 'Emplacement: /' );
        $ result = $ this -> mailer -> send ( $ mail );

        return  $ result ;
    }
}