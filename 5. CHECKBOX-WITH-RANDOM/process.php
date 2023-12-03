<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];

function getRandomColor($colors)
{
    $index = array_rand($colors);
    return $colors[$index];
}
$subjects = ['HTML', 'CSS', 'JavaScript', 'PHP'];
$selectedSubjects = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['subject'])) {
        $selectedSubjects = $_POST['subject'];
    }
}
?>
<div class="card">
    <div class="card-body">
        <h3>Selected Subjects:</h3>
        <?php foreach ($subjects as $subject) {
            if (in_array($subject, $selectedSubjects)) {
                $color = getRandomColor($colors);
                echo "<button class='btn btn-$color'>$subject</button>";
            }
        } ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>