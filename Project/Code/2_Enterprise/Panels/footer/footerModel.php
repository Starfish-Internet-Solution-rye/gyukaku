<?php
require_once FILE_ACCESS_CORE_CODE.'/Framework/MVC_superClasses_Core/modelSuperClass_Core/modelSuperClass_Core.php';
class footerModel extends modelSuperClass_Core
{

	public function getFooterData()
	{
		$FullFilename = 'Project/Code/'.DOMAIN.'/Panels/footer/data/data.xml'; 
		$dataHandler = new dataHandler();
		return $dataHandler->loadDataSimpleXML($FullFilename);
	}
}
?>