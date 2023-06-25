<!DOCTYPE html>
<html>
<head>
    <title>Process Drawing</title>
</head>
<body>
    <?php

    if (isset($_POST['name']) && isset($_POST['school']) && isset($_POST['description']) && isset($_FILES['drawing'])) {
        $uploadedFile = $_FILES['drawing']['tmp_name'];
        $fileName = $_FILES['drawing']['name'];
        $destination = 'files/' . $fileName;
        move_uploaded_file($uploadedFile, $destination);

        $name = $_POST['name'];
        $school = $_POST['school'];
        $description = $_POST['description'];

        echo '<img src="' . $destination . '" width="400" height="400" alt="Drawing"><br>';
        echo 'Name: ' . $name . '<br>';
        echo 'School: ' . $school . '<br>';
        echo 'Description: ' . $description . '<br>';
    } 
    ?>
</body>
</html>
