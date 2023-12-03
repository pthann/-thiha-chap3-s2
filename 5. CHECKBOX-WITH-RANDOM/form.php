<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="POST">
        <div class="mb-3">
            <input type="checkbox" id="html" name="subject[]" value="HTML">
            <label for="html">HTML</label>

            <input type="checkbox" id="css" name="subject[]" value="CSS">
            <label for="css">CSS</label>

            <input type="checkbox" id="js" name="subject[]" value="JavaScript">
            <label for="js">JavaScript</label>

            <input type="checkbox" id="php" name="subject[]" value="PHP">
            <label for="php">PHP</label>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>