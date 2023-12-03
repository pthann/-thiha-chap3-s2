<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
        <div class="row mb-3 mt-3">
            <div class="col">
                <input type="color" name="color" class="form-range">
            </div>
            <div class="col">
                <input type="range" name="range" class="form-range" max="100" min="1">
            </div>
        </div>
        <div class="mb-3">
            <input type="date" name="date" class="form-control">
        </div>
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>