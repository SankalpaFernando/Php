<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="process.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="school">School:</label>
        <input type="text" name="school" id="school" required><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"></textarea><br>

        <label for="drawing">Drawing</label>
        <input type="file" name="drawing" id="drawing" accept="image/*" required><br>

        <input type="submit" value="Upload">
    </form>
</body>
</html>