<?php
require_once FILE_ACCESS_CORE_CODE.'/Framework/MVC_superClasses_Core/modelSuperClass_Core/modelSuperClass_Core.php';
class headerModel extends modelSuperClass_Core
{
	public function getHeaderData()
	{
		$FullFilename = 'Project/Code/'.DOMAIN.'/Panels/header/data/data.xml'; 
		$dataHandler = new dataHandler();
		return $dataHandler->loadDataSimpleXML($FullFilename);
	}
}
?>