<?php
require_once(FILE_ACCESS_CORE_CODE.'/Framework/MVC_superClasses_Core/viewSuperClass_Core/viewSuperClass_Core.php');
class footerView extends viewSuperClass_Core
{
	public function getFooter()
	{
		$content = $this->renderTemplate('Project/Design/'.DOMAIN.'/Panels/footer/templates/css_links.phtml');
		response::getInstance()->addContentToStack('css_used_on_every_page',array('FOOTER_CSS'=>$content));
		
		$content = $this->renderTemplate("Project/Design/".DOMAIN."/Panels/footer/templates/main_template.phtml");
		response::getInstance()->addContentToTree(array("FOOTER_CONTENT"=>$content));
		
	}
}

