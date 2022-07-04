<?php
    require './classes/stringClass.class.php';
    
    
    $setStringResult = '';
    $testString = '';
    $getStringResult = '';
    $indexOfResult = '';

    if (isset($_POST['myString'])  && isset($_POST['testString'])) {
        $myString = new StringClass(htmlspecialchars($_POST['myString']), htmlspecialchars($_POST['testString']));
        $getStringResult = $myString -> getString();
        $indexOfResult = $myString -> indexOf();
        $trimResult = $myString -> trim();
        $toUppercaseResult = $myString -> toUppercase();
        $includesResult = $myString -> includes();
        $substringResult = $myString -> substring();
    }

?>  