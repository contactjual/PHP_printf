<?php 

// learn printf .......................................

$first_name = "jual";
$last_name= "rana";

echo "My name is: ".ucwords($first_name)." ".ucwords($last_name); // ucwords() function use for capital first latter of a string
// or 
printf ("My name is: %s %s", ucwords($first_name), ucwords($last_name)); // printf more urseful. [%s means string type data]




// here printf using in actual case ................................................

$my_html = "<h1>My name</h1> <b>%s</b> <b>%s</b>"; // %s for string type value
printf ($my_html, ucwords($first_name), ucwords($last_name));

$num1 = 24;
printf("The pyment of goribs is: %d", $num1); // %d int type data

$num2 = 101.56;
printf("The pyment of boroloks is: %f", $num2); // %f for float type data

printf ('The values are: %2$d and %1$f', $num1, $num2); // use position$ to define argument number

$first_name1 = "Jual";
$last_name1 = "Rana";
printf("MY name is: %2\$s %1\$s", $last_name1, $first_name1); // used \ 



// printf for ASCII code [table: https://www.geeksforgeeks.org/ascii-table/]...........
$num3 = 23;
printf ("The binary value of 23 is: %b", $num3); // %b use for converting value to bainary; 





// int and float number type.............................
$num5 = 10.22;
printf("The int value is: %d", $num5); // 10
printf("The float value is: %f", $num5); // 10.22000
printf("The float value is: %.2f", $num5); // 10.22
printf("The int value is: %.0f", $num5); // 10





// string type 
$my_full_name = "Jual Rana";
printf("[%s]", $my_full_name); // [Jual Rana]
printf("[%15s]", $my_full_name); // [ Jual Rana]. start e 6 ta space diye 10 char miliye debi
printf("[%-15s]", $my_full_name); // [Jual Rana ]. last e 6 ta space diye 10 char miliye debi
printf("[%-'*15s]", $my_full_name); // [Jual Rana******]. last e 6 ta * diye 10 char miliye debi
printf("[%4.3s]", $my_full_name); // [ Jua]. 4 sonkar string dekhabi [Jual Rana] theke 3 ta char niye
printf("[%-'#4.3s]", $my_full_name); // [Jua#]
printf("[%-'#14.3s]", $my_full_name); // [Jua###########]







// #12 to #19
?>