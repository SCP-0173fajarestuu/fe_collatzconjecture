
<?php

/*
The Collatz conjecture is a conjecture in mathematics that concerns a sequence defined as follows: start with any positive integer n. Then each term is obtained from the previous term as follows: if the previous term is even, the next term is one half the previous term. If the previous term is odd, the next term is 3 times the previous term plus 1. The conjecture is that no matter what value of n, the sequence will always reach 1.

formulation:
1. Take any natural numbers
2. if it's even half it, otherwise triple it and add one
3. repeat step 2 until you reach 4,2,1
*/
$x=99999;
for ($i=0; $i>=0 ; $i++) { 
	# code...
	
	if ($x%2==0) {
		# code...
		$x = $x/2;
	}
	elseif($x%2>0){
		$x = ($x*3)+1;
	}

	if ($x==1) {
		# code...
		$i=-2;
	}
	echo $x;
	echo "<br>";

	
}
?>