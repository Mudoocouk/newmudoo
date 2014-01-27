<?
/**
 * This will have all the configs in here and som other stuff too
 */
/**
 * This is the define section where you define everything
 */
define('DOC_ROOT', realpath(dirname(__FILE__) . '/../../'));
define('URL_ROOT', substr(DOC_ROOT, strlen(realpath($_SERVER['DOCUMENT_ROOT']))) . '/');



error_reporting(E_STRICT | E_ALL);
fCore::enableErrorHandling('html');
fCore::enableExceptionHandling('html');

fTimestamp::setDefaultTimezone('Europe/London');

fAuthorization::setLoginPage(URL_ROOT . 'log_in');

// This prevents cross-site session transfer
fSession::setPath(DOC_ROOT . '/storage/session/');


include DOC_ROOT . '/system/inc/constructor_functions.php';


/**
 * Automatically includes classes
 * 
 * @throws Exception
 * 
 * @param  string $class  Name of the class to load
 * @return void
 */
function __autoload($class)
{
	$flourish_file = DOC_ROOT . '/system/inc/flib/' . $class . '.php';
 
	if (file_exists($flourish_file)) {
		return require $flourish_file;
	}
	
	$file = DOC_ROOT . '/system/inc/classes/' . $class . '.php';
 
	if (file_exists($file)) {
		return require $file;
	}
	
	throw new Exception('The class ' . $class . ' could not be loaded');
}

?>
