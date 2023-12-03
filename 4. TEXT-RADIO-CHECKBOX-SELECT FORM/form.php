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
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
        </div>
        <div class="mb-3">
            <textarea placeholder="Enter message" name="message" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <select name="province" class="form-control">
                <option selected disabled>Choose province</option>
                <option value="Banteay Mean Chey">Banteay Mean Chey</option>
                <option value="Battambang">Battambang</option>
                <option value="Siem Riep">Siem Riep</option>
                <option value="Prey Veng">Prey Veng</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="checkbox" class="form-control-check" id="html" name="subjects" value="HTML">
            <label for="html" class="form-label">HTML</label>

            <input type="checkbox" class="form-control-check" id="css" name="subjects" value="CSS">
            <label for="css" class="form-label">CSS</label>

            <input type="checkbox" class="form-control-check" id="js" name="subjects" value="JavaScript">
            <label for="js" class="form-label">Javascript</label>

            <input type="checkbox" class="form-control-check" id="php" name="subjects" value="PHP">
            <label for="php" class="form-label">PHP</label>

        </div>
        <div class="mb-3">
            <input type="radio" class="form-control-check" id="Female" name="gender" value="Female">
            <label for="Female" class="form-label">Female</label>

            <input type="radio" class="form-control-check" id="Male" name="gender" value="Male">
            <label for="Male" class="form-label">Male</label>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>