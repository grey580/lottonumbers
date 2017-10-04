<h2>Lottery Numbers</h2>
<p>
Lotto 6 numbers<br />
<?php
mynums(6);
echo "\n";
?>
</p>

<p>
Powerball numbers<br />
<?php
mynumspb(5,1);
echo "\n";
?>
</p>

<p>
Lotto 5 numbers<br />
<?php
mynums(5);
echo "\n";
?>
</p>

<p>
Powerball 4 numbers + Powerball<br />
<?php
mynumspb(4,1);
echo "\n";
?>
</p>

<p>
Lotto 4 numbers<br />
<?php
mynums(4);
echo "\n";
?>
</p>

<p>
Lotto 3 numbers<br />
<?php
mynums(3);
echo "\n";
?>
</p>


<?php 
function mynums($length){
	$numarray = array();
	for($i=1;$i<=53;$i++){
		$numarray[] = $i;
	}
	//print_r($numarray);
	// grab numbers from the array
	$randarray = array_rand($numarray,$length);
	//print_r($randarray);
	
	// print out the array
	foreach($randarray as $key => $val){
		if($key < $length && $key != 0){
			echo " - ";
		}
		echo $numarray[$val];					
	}	
}
function mynumspb($length,$pb){
	$numarray = array();
	for($i=1;$i<=53;$i++){
		$numarray[] = $i;
	}
	//print_r($numarray);
	// grab numbers from the array
	$randarray = array_rand($numarray,$length);
	//print_r($randarray);
	
	// print out the array
	foreach($randarray as $key => $val){
		if($key < $length && $key != 0){
			echo " - ";
		}
		echo $numarray[$val];					
	}	
	
	$randarraypb = array();
	$randarraypb = array_rand($numarray,$pb);
	//print_r($randarraypb);
	echo " Powerball: ";
	echo rand(1,53);	
	//foreach($randarraypb as $key => $val){
		//echo $numarray[$val];					
	//}
	//print_r($numarray);
}
?>
