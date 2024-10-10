<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $input = $_POST['input'];
    $email = $_POST['email'];

  
    $safe_input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    
    echo "<h2>Processed Input:</h2>";
    echo "<p>" . $safe_input . "</p>";

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email valid: " . htmlspecialchars($email) . "</p>";
    } else {
        echo "<p>Email tidak valid.</p>";
    }
} else {
    echo "No data submitted.";
}
?>
