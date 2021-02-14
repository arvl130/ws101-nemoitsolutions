<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nemo IT Solutions | Contact</title>
        <?php
            // Global resources
            require('../global/resources.html');

            // Local resources
            include('resources.html');
        ?>
</head>
<body>
    <?php
        // Navigation bar
        include('../global/navbar.html');

        // Page title
        $page_title = 'Contact';
        include('../global/subdir-title.php');

        // Process POST requests
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['message'])) {
                require_once('../internals/db-init.php');
                $email = $_POST['email'];
                $message = $_POST['message'];
                $sql_cmd = "INSERT INTO messages_tbl (email, messages) VALUES (?, ?)";
                $sql = $conn -> prepare($sql_cmd);
                $sql -> bind_param('ss', $email, $message);

                if ($sql -> execute()) {
                    $success_message = "Added successfully";
                } else {
                    $error_message = "Failed!";
                    echo 'Noooo' . '<br />';
                }
            }
        }
    ?>
    <div class="content-stretch">  
    <?php
        // Main content
        include('mainbody.html');
        
        // Footer
        include('../global/footer.html');
    ?>
    </div>
</body>
</html>
