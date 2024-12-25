<?php 
// learn printf

$first_name = "jual";
$last_name= "rana";

echo "My name is: ".ucwords($first_name)." ".ucwords($last_name); // ucwords() function use for capital first latter of a string
// or 
printf ("My name is: %s %s", ucwords($first_name), ucwords($last_name)); // printf more urseful. [%s means string type data]




// here printf using in actual case 
$my_html = "<h1>My name</h1>
 <b>%s</b> <b>%s</b>
";
printf ($my_html, ucwords($first_name), ucwords($last_name));



// #12 to #19
?>

