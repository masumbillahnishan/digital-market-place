<!DOCTYPE html>
<html>

<head>
    <title>Confirm Delete</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle the form submission here (e.g., perform the delete operation)
        // ...

        echo "Record deleted successfully.";
    }
    ?>

    <form method="post">
        <input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this record?')">
    </form>

</body>

</html>