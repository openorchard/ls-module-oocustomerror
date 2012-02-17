<?php
/**
 * ooCustomError Module
 *
 *	@author Joe Richardson
 */


class ooCustomError_module extends Core_ModuleBase
{
	

	protected function create_module_info()
	{
		return new Core_ModuleInfo(
			"Custom Error Handler",
			"Custom erorr handler enables you to provide your own error pages.",
			"OpenOrchard" );
	}

	protected function createModuleInfo()
	{
		return $this->create_module_info();
	}

}


//eof /classes/oocustomerror_module.php