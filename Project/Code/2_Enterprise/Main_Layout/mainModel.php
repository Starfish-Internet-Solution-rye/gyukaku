<?php
require_once FILE_ACCESS_CORE_CODE.'/Framework/MVC_superClasses_Core/modelSuperClass_Core/modelSuperClass_Core.php';
class mainModel extends modelSuperClass_Core
{
	public function getMainLayoutData()
	{
		$FullFilename = 'Project/Code/'.DOMAIN.'/Main_Layout/data/data.xml'; 
		$dataHandler = new dataHandler();
		return $dataHandler->loadDataSimpleXML($FullFilename);
	}
}
?>