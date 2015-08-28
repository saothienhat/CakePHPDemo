<?php 


App::import('Model', 'Constants');

/**
 * Enter description here ...
 * @author binhtt
 *
 */
class MainController extends AppController{
//	var $name = "Main";
//	var $uses = array();
//	var $autoRender = false;
	
	/**
	 * Controller form: XYZController.php -> View folder for XYZ should has name is "XYZ"
	 */
	function index(){
		$this->set('mainCakePHPMessage', "Hello CakePHP from MainController class !");
		
		// Run testcases
		$this->runTestCases();
	}
	
	/**
	 * This method is used to run testcases.
	 */
	function runTestCases(){
		/*
		 * Test cases
		 */
//		$this->getAllStudents();
		$this->getStudentById(2);
		
	}
	
	/**
	 * Get expected Student by ID
	 */
	function getStudentById($id){
		$methodName = "getStudentById()";
		$this->printBeginTest($methodName);
		
		// fecth data from DB
		$this->loadModel(MODEL_STUDENT);
		$student = $this->Student->find('first', array('conditions' => array('Student.id' => $id)));
		
		// Display result
		echo "&nbsp&nbsp&nbsp&nbsp	ID: " . $id . "<br>";
		echo "&nbsp&nbsp&nbsp&nbsp	Name: " . $student[MODEL_STUDENT][COLUMN_LASTNAME] . " " . $student['Student'][COLUMN_FIRSTNAME] . "<br>";
		echo "&nbsp&nbsp&nbsp&nbsp	Address: " . $student[MODEL_STUDENT][COLUMN_ADDRESS] . "<br>";
		echo "&nbsp&nbsp&nbsp&nbsp	Email: " . $student[MODEL_STUDENT][COLUMN_EMAIL] . "<br>";

		$this->printEndTest($methodName);
	}
	
	/**
	 * Fecth all of Students from DB
	 */
	function getAllStudents(){
		$methodName = "getAllStudents()";
		$this->printBeginTest($methodName);
		
		// fecth data from DB
		$this->loadModel(MODEL_STUDENT);
		$students = $this->Student->find(CHARACTER_ALL);
		
		// Display result
		$count = 1;
		foreach ($students as $student) {
			echo "&nbsp Student " . $count . "<br>";
			echo "&nbsp&nbsp&nbsp&nbsp	Name: " . $student[MODEL_STUDENT][COLUMN_LASTNAME] . " " . $student['Student'][COLUMN_FIRSTNAME] . "<br>";
			echo "&nbsp&nbsp&nbsp&nbsp	Address: " . $student[MODEL_STUDENT][COLUMN_ADDRESS] . "<br>";
			echo "&nbsp&nbsp&nbsp&nbsp	Email: " . $student[MODEL_STUDENT][COLUMN_EMAIL] . "<br>";
			$count++;
		}
		
		$this->printEndTest($methodName);
	}
	
	
	function printBeginTest($methodName){
		echo "<h4><br>-----------------  Begin run \"$methodName\" testcase.....<br><br></h4>";		 
	}
	
	function printEndTest($methodName){
		echo "<h4><br>-----------------  End run \"$methodName\" testcase ! -----------------<br></h4>";		 
	}
	
	/**
	 * Method template for testcases
	 */
	function methodTemplate(){
		$methodName = "methodTemplate()";
		$this->printBeginTest($methodName);
		
		// code here
		
		$this->printEndTest($methodName);
	}
}

?>