<?php
require 'config.php';
# combine the words.
$combined = $random1.$random2.$random3.$random4;


# Just defining final here for now, we definitely are not done.
$final = ""; 
# Finish up!
if($debug == true){
	# if debug is true, print all other stuff as well
	echo "Original Words: ".$random1.", ".$random2.", ".$random3.", ".$random4."\n\n";
	echo "Combined: ".$combined."\n\n";
	echo "Original Salt: ".$originalSalt."\n\n";
	echo "Final Result: ".$final;
}else {
	echo "Final Result: ".$final;
}

?>