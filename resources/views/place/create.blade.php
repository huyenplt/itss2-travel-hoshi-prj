<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create new place</h2>
    <form action="" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Address">
            Address:
            <input type="text" name="address">
        </label><br><br>
        <label for="Content">
            Content:
            <input type="text" name="content">
        </label><br><br>
        <button type="submit">Create place</button>
    </form>
</body>
</html>
