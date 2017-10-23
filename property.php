<?php


//class
class robot{


	//property
	public $suara='ngik ngik';
	public $berat=40;

}
$robot1 = new robot;

echo"Suara robot...". $robot1->suara.'<br>'."Beratnya...".$robot1->berat;
?>