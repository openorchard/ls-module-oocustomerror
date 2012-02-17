<?php

/**
 * Init file for ooCustomError
 *
 * 	Initializes the custom response object which will replace
 *  some functionality of the core class
 * 	
 * 	@author Joe Richardson
 *
 */


//Overwrite the request object that existed
PHPr::$response = new ooCustomError_Response();


//eof /init/init.php