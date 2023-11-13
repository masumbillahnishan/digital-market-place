<?php
$conn=mysqli_connect("localhost","root","","project");
if(!$conn){
    echo"failed connection";
}
else{
    echo"connected";
}

?>