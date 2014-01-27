<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<? 
include '../system/inc/init.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>404 doc not found</title>
    </head>
    <body>
        <?php
        $gh = fURL::get();
        echo $gh. ' can not be found sorry';
        ?>
    </body>
</html>
