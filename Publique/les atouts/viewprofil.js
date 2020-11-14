var  messageBox  =  document . querySelector ( '.js-message' ) ;
  var  btn  =  document . querySelector ( '.js-message-btn' ) ;
  var  carte  =  document . querySelector ( '.js-profile-card' ) ;
  var  closeBtn  =  document . querySelectorAll ( '.js-message-close' ) ;

  btn . addEventListener ( 'clic' , fonction  ( e )  {
      e . preventDefault ( ) ;
      carte . classList . add ( 'actif' ) ;
  } ) ;

  closeBtn . forEach ( fonction  ( élément ,  index )  {
     console . log ( élément ) ;
      élément . addEventListener ( 'clic' , fonction  ( e )  {
          e . preventDefault ( ) ;
          carte . classList . remove ( 'actif' ) ;
      } ) ;
  } ) ;