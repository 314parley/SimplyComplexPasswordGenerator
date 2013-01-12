<?php
# Get config.
require 'config.php';

# combine the words defined in config.
$combined = $random1.$random2.$random3.$random4;

# Basic encryption

crypt($combined,$salt);

# Just defining final here for now, we definitely are not done.
$final = ""; 
# Finish up!
if($debug == true){
	# if debug is true, print all other stuff as well
	echo "Original Words: ".$random1.", ".$random2.", ".$random3.", ".$random4."\n\n";
	echo "Combined: ".$combined."\n\n";
	echo "Original Salt: ".$originalSalt."\n\n";
	echo "New Salt: ".$salt."\n\n";
	echo "Final Result: ".$final;
}else {
	echo "Final Result: ".$final;
}

?>