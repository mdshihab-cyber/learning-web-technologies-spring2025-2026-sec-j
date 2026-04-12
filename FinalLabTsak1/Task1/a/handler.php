<?php
    // Check if the submit button was clicked
    if(isset($_POST['submit'])){
        
        // Retrieve data from the 'username' field
        $name = $_POST['username'];
        
        // Validation: check if field is empty
        if($name == ""){
            echo "Error: Name field cannot be empty!";
        } else {
            // Display the result on the handler page as requested
            echo "<h1>Handler Page</h1>";
            echo "The submitted name is: " . $name;
        }
    } else {
        // Redirect back if page is accessed directly without posting
        header('location: a.html');
    }
?>