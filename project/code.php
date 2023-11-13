
<?php 
 
echo '<script>alert("masum")</script>'; 
  
?> 



if (isset($_POST['cancel'])) {


}
    ?>



    header("Location: admin.php");



    $sql = "SELECT * FROM account WHERE email = '$email' ";
$result = mysqli_query($conn, $sql);
$getData = mysqli_fetch_assoc($result);

$name = $getData['name'];
$address = $getData['address'];
$id = $getData['id'];






if (isset($_POST['button'])) {

$selectedProductID = $_POST['product_id'];
$selectedProductName = $_POST['product_name'];
$selectedProductPrice = $_POST['product_price'];
}



include "connection.php";


echo "submit unsuccessfully---->" . mysqli_error($conn);