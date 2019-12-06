<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
    </head>
    <body>
        <?php
            set_error_handler(function () {
                throw new Exception('');
            });
           
            try {
                echo 10 / 0;
            } catch( Exception $e ){
                $result = 0;
            }
           
            restore_error_handler();
            error_log ("kaas");
        ?>
    </body>
</html>