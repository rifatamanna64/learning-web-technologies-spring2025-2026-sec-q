<?php
if(isset($_POST['submit'])){
    if(!isset($_POST['degree'])){
        echo "No degree selected!";
    } else {
        foreach($_POST['degree'] as $d){
            echo $d . "<br>";
        }
    }
}
?>