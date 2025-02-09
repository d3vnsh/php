<?php
	$globalVar = "I am global"; // Global variable

	function testScope() {
    		global $globalVar;
    		$localVar = "I am local";
    		echo $localVar . "<br>";
    		echo $globalVar . "<br>";
	}

	testScope();
	echo $globalVar . "<br>";

	class MyClass {
    		public $instanceVar = "I am instance";

    		public function showVar() {
        		echo $this->instanceVar . "<br>";
    		}
	}	

	$obj = new MyClass();
	$obj->showVar();
	echo $obj->instanceVar . "<br><br>";
	echo "Done by Devansh(2220100268)";
?>
