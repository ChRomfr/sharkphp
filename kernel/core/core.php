<?php if( !defined('IN_VA') ) exit;
/*

                                                                               
                                     _,,                                   ,dW 
                                   ,iSMP                                  JIl; 
                                  sPT1Y'                                 JWS:' 
                                 sIl:l1                                 fWIl?  
                                dIi:Il;                                fW1"    
                               dIi:l:I'                               fWI:     
                              dIli:l:I;                              fWI:      
                            .dIli:I:S:S                     .       fWIl`      
                          ,sWSSIIIiISIIS w,_             .sMW     ,MWIl;       
                     _.,sWWW*"'*" , SWW' MWWMm mu,,._  .iSYISb, ,MM*SI!:       
                 _,s YMMWW'',sd,'MM WMMi "*MW* WWWMWMb MMS WWP`,MW' S1!`       
            _,os,'MMi YW' m,'WW; WWb`SWM Im,,  SIS ISW SISIP*  WSi  II!.       
         .osSMWMW,'WSi ',MMP SSb WSW ISII`SYYi III !Il lIi,ui:,*1:li:l1!       
      ,sSMMWWWSSSS,'SWbdWW*  *YSbiSS:'IlI 7llI il1: l! 'l:+'+l; `''+1i:1i      
   ,sYSMWMWY**"""'` 'WWSSIIiu,'**Y11';IIIb ?!li ?l:i,         `      `'l!:     
  sPITMWMW'`.M.wdWWb,'YIi `YT" ,u!1",ISIWWm,'+?+ `'+Ili                `'l:,   
  YIi1lTYfPSkyLinedI!i`I!" .,:!1"',iSWWMMMMMmm,                                
    "T1l1lI**"'`.2006? ',o?*'``  ```""**YSWMMMWMm,                             
         "*:iil1I!I!"` '                 ``"*YMMWWM,                           
               ii!                             '*YMWM,                         
               I'                                  "YM                         
                                                                               

*/
# Demarrage des sessions
session_start();

require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'secure.php';

# Inclusion du fichier de config
require_once ROOT_PATH . 'config' . DS . 'config.php';

# Inclusion de l autoload
require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'autoload.php';

# Connexion a la base de donnees
require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'DB' . DS . 'connexion.php';

# Fichier lang
require_once ROOT_PATH . 'kernel' . DS . 'base_app' . DS . 'lang' . DS . 'french.php';
require_once ROOT_PATH . 'app' . DS . 'local' . DS . 'french.php';	                   

require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'functions.php';
require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'function_error.php';
require_once ROOT_PATH . 'kernel' . DS . 'lib' . DS . 'markitup.bbcode-parser.php';

define('BASE_APP_PATH', ROOT_PATH . 'kernel' . DS . 'base_app' . DS);

$registry = new Registry();
$registry->router = new Router($registry);
$registry->session = new Session($registry);
$registry->cache = new MyCache($registry);
$registry->db = $db->getInstance();
$registry->smarty = new MySmarty($registry);
$registry->HTTPRequest = new HTTPRequest($registry);
$registry->form = new Form($registry);

$Session = new Session();

# Traitement Bundles
require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'bundle.php';

# Verification sessions
if( $Session->check() == false ):
    $Session->create('Visiteur'); // Creation d'une session visiteur
endif;

# Suppression des sessions de plus de 3h = 10800sec
$registry->db->delete(PREFIX . 'sessions', null, array('last_used <' => time() - 10800) );

$registry->smarty->assign('lang', $lang);

if( USE_TABLE_CONFIG ):
    $config = array_merge($config, getConfig($registry) );
endif;

$registry->smarty->assign('Helper', new Helper($config) );

$cache = $registry->cache;