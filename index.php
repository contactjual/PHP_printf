<?php

function my_self ($f_name, $l_name, $address, $phone, $others = "none") {
    echo $f_name ." ". $l_name ."<br>". $address ."<br>". $phone ."<br>". $others;
}

// full_name("Rana", "Jual"); // Rana Jual

// use named argument (PHP_8) for set paramete's value

my_self (l_name: "Rana", f_name: "Jual", phone: "019***", address: "Mym...."); // Jual Rana






?>