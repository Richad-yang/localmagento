<?php
class Alanstormdotcom_Weblog_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		echo 'Hello Index!';
	}
	public function testModelAction() {
		$params = $this->getRequest()->getParams();
		$blogpost = Mage::getModel('weblog/blogpost');
		echo("Loading the blogpost with an ID of ".$params['id']);
		$blogpost->load($params['id']);
		$data = $blogpost->getData();
		var_dump($data);
		$tille = $blogpost->getData('title');
		$origTitle = $blogpost->getOrigData('title');
		var_dump($tille);echo "<br />";
		var_dump($origTitle);
	}
}

?>