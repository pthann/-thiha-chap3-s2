<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : [];
    $country = $_POST["country"];
    
    // Generate the image URL based on gender
    $imageURL = ($gender == "male") ? "male.jpg" : "female.jpg";
    
    // Display the result in a card-like format
    echo "<div class='card'>";
    echo "<h2>Name: $name</h2>";
    echo "<img src='$imageURL' alt='Gender Image'>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Hobbies: " . implode(", ", $hobbies) . "</p>";
    echo "<p>Country: $country</p>";
    echo "</div>";
  }
?>