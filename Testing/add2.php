<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="headline">Headline:</label>
        <input type="text" name="headline" id="headline">
    </p>
    <p>
        <label for="story">story:</label>
        <input type="text" name="story" id="story">
    </p>
    <p>
        <label for="name">name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email">email:</label>
        <input type="text" name="email" id="email">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
