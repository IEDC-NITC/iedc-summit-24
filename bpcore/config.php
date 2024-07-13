<?php
// error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/*======CONFIG LOCAL========
============================*/


// define("SITE_URL","http://localhost/xampp_server/works/palamurbio/" );
// define("ADMIN_URL","http://localhost/xampp_server/works/palamurbio/loginpanel" );
// define("ROUTER_URL","http://localhost" );
// define("ROUTER_SUB_URL","/xampp_server/works/palamurbio" );


define("SITE_URL","http://localhost/iedc/" );
define("ADMIN_URL","http://localhost/iedc/loginpanel" );
// define("ROUTER_URL","http://localhost" );
// define("ROUTER_SUB_URL","/pm" );


/*======DBCONFIG REMOTE========
============================*/


// define("SITE_URL","https://pmicse.farookcollege.ac.in/" );
// define("ADMIN_URL","https://pmicse.farookcollege.ac.in/loginpanel" );
// define("ROUTER_URL","https://palamurbio.com" );
// define("ROUTER_SUB_URL","" );


define("SITE_TITLE","iedc" );
define("XCBPFNAME","cCMS" );
define("XCBPFCONSOLENAME","iedc" );
define("XCBPFCONSOLELOGO",SITE_URL."assets/images/amigoz.jpg");
define("XCBPFVERSION","v3.6" );
define("XCBPFSUPPORTURL","https://xctllp.com" );
define("XCBPFMETANAME","BACKPOOLFRAMEWORKv3.6" );
define("USERACCOUNTLOCKDURATION", (2 * 60 * 60));
define("MAXFAILEDNOLOGIN", (7));



// All login attempts are counted from the past 2 hours. 

/*======DBCONFIG LOCAL========
============================*/

// define("DBHOST", "localhost");     
// define("DBUSER", "u365263609_tbi_iedc");    
// define("DBPASSWORD", "ym5h>#t2wE/");    
// define("DATABASE", "u365263609_tbi_iedc"); 

define("DBHOST", "localhost");     
define("DBUSER", "root");    
define("DBPASSWORD", "");    
define("DATABASE", "iedc"); 

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE); 

 
/*======DBCONFIG REMOTE========
============================*/

 // define("DBHOST", "localhost");
 // define("DBUSER", "fxuauksuuj");
 // define("DBPASSWORD", "weyyJT35aJ");
 // define("DATABASE", "fxuauksuuj");
 // define("CAN_REGISTER", "any");
 // define("DEFAULT_ROLE", "member");
 // define("SECURE", false);


 /*======TIME ZONE LOCAL========
 ============================*/
 date_default_timezone_set("Asia/Calcutta"); 


/*======RECAPTCHA VARIABLES========
 ==================================*/

 define("RECAPTCHA_SITE_KEY", "");
 define("RECAPTCHA_SECRET_KEY", "");
 define("CONTACT_MAIL", "");
 define("SITE_ADDRESS", "");
 define("FORM_PURPOSE", "");
 ?>
