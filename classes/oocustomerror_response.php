<?php

/**
*  ooCustomError Response
*/
class ooCustomError_Response extends PHPr_Response
{
	
	public function openErrorPage( $Exception )
	{

		if(Phpr::$config->get('HIDE_ERROR_DETAILS') && Phpr::$config->get('OO_CUSTOM_ERROR') )
		{
			$Controller = Phpr::$classLoader->loadController(self::controllerApplication);
			if (!Phpr::$request->isRemoteEvent())
			{
				$Controller->setViewsDirPath('modules/oocustomerror/views');
				$Controller->loadView( 'error_page', false, true );
			} else {
				try
				{
					
					$new_exception = new Phpr_ApplicationException('Some error occurred');
					Phpr::$response->ajaxReportException($new_exception, true);
				}
				catch (exception $ex) {}
			}
		}else{
			parent::openErrorPage($Exception);	
		}
		 
	}

}

//eof /classes/oocustomerror_response.php