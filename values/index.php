<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nemo IT Solutions | Values</title>
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
        $page_title = 'Values';
        include('../global/subdir-title.php');
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