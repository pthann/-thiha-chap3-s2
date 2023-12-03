<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $number = $_POST["number"];
        $message = $_POST["message"];
        $province = $_POST["province"];
        $gender = $_POST["gender"];
        $subjects = isset($_POST["subjects"]) ? $_POST["subjects"] : [];
    }
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $number; ?></td>
        <td><?php echo $message; ?></td>
        <td><?php echo $province; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $subjects; ?></td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>