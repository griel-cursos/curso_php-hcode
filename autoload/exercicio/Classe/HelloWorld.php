<?php 

class HelloWorld {

	private $txt1;
	private $txt2;


	public function getTxt1() {
		$this->txt1 = $txt1;
	}

	public function setTxt1($txt1) {
		return $this->txt1 = $txt1;
	}

	public function getTxt2() {
		$this->txt2 = $txt2;
	}

	public function setTxt2($txt2) {
		return $this->txt2 = $txt2;
	}

	public function Falar() {
		echo $this->txt1 . " " . $this->txt2;
	}


}


 ?>