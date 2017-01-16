<?php
class Alanstormdotcom_Helloworld_MessagesController extends Mage_Core_Controller_Front_Action {
	public function goodbyeAction()
	{
		echo 'Another Goodbye';
	}
	
	public function ShowXmlAction()
	{
		//header('Content-Type: text/xml');
		header('Content-Type: text/plain');
		echo $config = Mage::getConfig()
		->loadModulesConfiguration('system.xml')
		->getNode()
		->asXML();
		exit;
	}
	public function getconfigAction()
	{
		$config = Mage::getStoreConfig('web/unsecure/base_url');
		if ($config){
			echo $config;
		}else{
			echo 'no data';
		}
	}
}
?>