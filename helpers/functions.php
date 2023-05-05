<?php 

if (!empty($_SESSION['length'])) {
    $passwordLength = $_SESSION['length'];
    $password = generatePassword($passwordLength); 
};


function generatePassword ($length) {
    $alphabet = range('a', 'z');
    $upperAlpha = range('A', 'Z');
    $numbers = range('0', '9');
    $symbols = str_split('!@#$%&_=+?');
    $characters = array_merge($alphabet, $upperAlpha, $numbers, $symbols);

    for ($i = 0; $i < $length; $i++) {
        $random = rand(1, 72);
        $passwordArray[$i] = $characters[$random]; 
    } 

    $password = join($passwordArray);

    return $password;
};

function redirect() {
    header('Location: ./password.php');
    die(); 
};

?>
