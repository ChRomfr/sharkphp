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

switch( $DB_Configuration['type'] ){
	
	case 'mysql':
		require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'DB' . DS . 'mysql.php';
		$dsn = 'mysql:host=' . $DB_Configuration['serveur'] .'; dbname='. $DB_Configuration['base'];
		try{
			$db = Db_mysql::getInstance($dsn, $DB_Configuration['utilisateur'], $DB_Configuration['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}
		
		catch (Exception $e){
			echo '<div><p>Erreur de connexion � la base de donn�es</p></div>';
			exit;
		}
		break;	
		
	case 'postgre':
				
		require_once ROOT_PATH . 'kernel' . DS . 'core' . DS . 'DB' . DS . 'postgre.php';
		
		$dsn = 'pgsql:host=' . $DB_Configuration['serveur'] .';port=5432;dbname='. $DB_Configuration['base'];
		
		try{
			$db = new Db_postgre($dsn, $DB_Configuration['utilisateur'], $DB_Configuration['password'], $DB_Configuration['schema']);
		}
		
		catch (Exception $e){
			echo '<div><p>Erreur de connexion � la base de donn�es</p></div>';
			exit;
		}
		$db->setSchema($DB_Configuration['schema']);
		break;
		
	default:
		echo '<div style="text-align:center;"><strong>Moteur de base de donn�es inconnu !</strong></div>';
		exit;
		break;
	
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);