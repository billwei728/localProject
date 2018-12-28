<?php
    /*define("GREETING","Hello you! How are you today?");
    echo defined("GREETING");
	echo "<br>";
	
	echo gettext("Your IP '$remoteIP' is not allowed into this area.");
	echo "<br>";*/
	
	/* $myfile = fopen("Silverstream Technology Kok Wei Info.txt", "r") or die("Unable to open file!");
	// Output one line until end-of-file
	while(!feof($myfile)) {
		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
	*/

	//Properties and Methods goes here
	class ParentClass {

		// protected $name = "Hey there!";
		private $name = "Hey there!";

		public function name() {

			return $this->name;
		}
		
	}
?>