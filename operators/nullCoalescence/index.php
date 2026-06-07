<!-- Null Coalescence to check if a value is Null -->

<?php

$favouriteColor = 'red';

/*
--------> isset() ==> a variable is already set_error_handler
$color = isset($favouriteColor) ? $favouriteColor : 'blue';
echo $color; //red 

Refactoring:
*/

$color = $favouriteColor ?? 'blue';
//echo $color; //red

// multiple choices:
$color = isset($favouriteColor) ? $favouriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');
echo $color; //red
// Refactoring:
$color = $favouriteColor ?? $secondFavouriteColor ?? 'blue';
echo $color; //red




?>