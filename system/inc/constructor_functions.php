<?

/**
 * Creates functions for all classes meant to be instantiated in client code to allow for constructor method chaining
 * 
 * @copyright  Copyright (c) 2008 Will Bond
 * @author     Will Bond [wb] <will@flourishlib.com>
 * @license    http://flourishlib.com/license
 */

function fDate($date=NULL) {
	return new fDate($date);    
}

function fDirectory($directory) {
	return new fDirectory($directory);    
}

function fFile($file) {
	return new fFile($file);    
}

function fImage($file_path) {
	return new fImage($file_path);    
}

function fMoney($amount, $currency=NULL) {
	return new fMoney($amount, $currency);    
}

function fNumber($value, $scale=NULL) {
	return new fNumber($value, $scale);
}

function fTime($time=NULL) {
	return new fTime($time);    
}

function fTimestamp($datetime=NULL, $timezone=NULL) {
	return new fTimestamp($datetime, $timezone);    
}
 
?>
