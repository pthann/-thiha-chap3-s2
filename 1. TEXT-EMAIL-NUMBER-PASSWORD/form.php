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
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="number" placeholder="Enter number">
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password"  placeholder="Enter password">
            </div>
        </div>
        <div class="mb-3">
            <textarea placeholder="Enter message" name=" message" class="form-control"></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>  
</body>
</html>