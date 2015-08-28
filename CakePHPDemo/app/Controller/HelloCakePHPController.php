<?php 

/**
 * Refer: https://www.youtube.com/watch?v=gf2X7mQIyVE
 * @author binhtt
 *
 */
class HelloCakePHPController extends AppController{
	
//	var $name = "HelloCakePHP";
//	var $uses = array();
//	var $autoRender = false;
	
	/**
	 * index() method
	 */
	function index(){
//		echo "Hello CakePHP";

		$this->set('helloCakePHPMessage', "Hellow CakePHP framework from HelloCakePHPController class !!");
	}
}

?>