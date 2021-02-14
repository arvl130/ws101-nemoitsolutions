<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nemo IT Solutions</title>
        <?php
            // Global resources
            require('global/resources.html');

            // Local resources
            include('home/resources.html');
        ?>
</head>
<body>
    <?php
        // Navigation bar
        include('global/navbar.html');
    ?>
    <div class="content-stretch">  
    <?php
        // Main content
        include('home/mainbody.html');
        
        // Footer
        include('global/footer.html');
    ?>
    </div>
</body>
</html>