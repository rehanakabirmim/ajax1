<?php 
	$call = $_GET['call'];
	

	$call();

	function add(){
		$fNumber = $_GET['fNumber'];
		$sNumber = $_GET['sNumber'];
		$c = $fNumber + $sNumber;
		echo $c;
	}
	function sub(){
		$fNumber = $_GET['fNumber'];
		$sNumber = $_GET['sNumber'];
		echo $fNumber - $sNumber ;
	}
	function mult(){
		$fNumber = $_GET['fNumber'];
		$sNumber = $_GET['sNumber'];
		echo $fNumber * $sNumber ;
	}
	function div(){
		$fNumber = $_GET['fNumber'];
		$sNumber = $_GET['sNumber'];
		echo $fNumber / $sNumber ;
	}
	
 ?>