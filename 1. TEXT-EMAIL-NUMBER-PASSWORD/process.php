<?php include_once ('templates/header.php') ?>
<ul class="list-group">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $message = $_POST["message"];
}
?>
    <li class="list-group-item"><?php echo $name; ?></li>
    <li class="list-group-item"><?php echo $email; ?></li>
    <li class="list-group-item"><?php echo $password; ?></li>
    <li class="list-group-item"><?php echo $number; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php include_once('templates/footer.php') ?>