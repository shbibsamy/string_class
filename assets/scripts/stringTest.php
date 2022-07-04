<?php
    require './classes/stringClass.class.php';
    
    $myString = new StringClass();
    $setStringResult = '';
    $testString = '';
    $getStringResult = '';
    $indexOfResult = '';

    if (isset($_POST['myString'])  && isset($_POST['testString'])) {
        $setStringResult = $myString -> setString(htmlspecialchars($_POST['myString']));
        $testString = $myString -> setTestString(htmlspecialchars($_POST['testString']));
        $getStringResult = $myString -> getString();
        $indexOfResult = $myString -> indexOf();
        $toUppercaseResult = $myString -> toUppercase();
    }

?>  