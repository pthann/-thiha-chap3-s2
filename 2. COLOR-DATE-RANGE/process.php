<?php include_once('templates/header.php') ?>
<?php
// YOUR CODE HERE 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];
    $slider = $_POST["range"];
    $date = $_POST["date"];
}
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $slider; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date; ?></span>
    </div>

<?php include_once('templates/footer.php') ?>