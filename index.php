<?php 

$_POST['var'] = 'Qualquer texto';

$func = function() use ($_POST) {
	$string = '_POST';
	var_dump(${$string});
    echo '<br>'; 

	var_dump(${'_POST'});
    echo '<br>';

	global ${$string};
	var_dump(${$string});
	echo '<br>';
}

// $string = '_POST';
// var_dump(${$string});
// echo '<br>';

$func;


?>