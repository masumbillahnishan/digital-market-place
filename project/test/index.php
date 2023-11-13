


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<section >

</section>
<div class="alert alert-secondary" role="alert">
    <p class="text-center">upload image</p>

</div>

<?php
if(isset($_POST['submit'])){
    include "connection.php";

// $imgName=$_POST["name"];

    $imageName = $_FILES['image']['name'];
    $imageType = $_FILES['image']['type'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);

    // Insert image data into the database
    $sql = "INSERT INTO images (filename, mime_type, image_data) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $imageName, $imageType, $imageData);

    if ($stmt->execute()) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image: " . $stmt->error;
    }

    $stmt->close();

    $sql2 = "SELECT * FROM `product`";
    $result = mysqli_query($conn, $sql2);

    while ($row = mysqli_fetch_assoc($result)) {
        $pName = $row["filename"];
        $image = $row["image_data"];
        echo '<div class="h-48">';
            echo '<img src="$image" alt="Product Image" class="object-cover w-full h-full rounded-lg">';
            echo '</div>';
     
           echo" <img src='$image'>";
    
    
    
    }
}

?>

    <form action="index.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="name">name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br><br>
    <a href="data.php">Data</a>
</body>

</html>