<?php

if(isset($_GET['submitForm']) ){
    $language = $_GET[ 'listLang' ];
    echo 'The Selected Language is' .' '. $language;
}else{
    echo 'Please Select Language';
}



?>