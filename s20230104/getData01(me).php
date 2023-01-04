<?php
function dd($data){
    $myData= var_dump($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data=$_GET;
dd($data);
?>