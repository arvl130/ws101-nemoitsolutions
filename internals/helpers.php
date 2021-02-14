<?php
    require_once('db-init.php');
    
    function authenticate_with_email($email, $password) {
        global $conn;
        $sql_command = "SELECT * FROM users_tbl";
		$result = $conn -> query("$sql_command");
        $conn -> close();

        $emailIsFound = false;
        $passwordIsCorrect = false;
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                if ($row["email"] == $email)
                    $emailIsFound = true;
                
            }

            if ($emailIsFound) {
                // Set the pointer back to the beginning
                // so we can fetch from the query result again.
                mysqli_data_seek($result, 0);
                while ($row = $result -> fetch_assoc()) {
                    if ($row["password"] == $password)
                        $passwordIsCorrect = true;
                }                
            }
            
            
        }
        
        return $passwordIsCorrect;
    }
?>