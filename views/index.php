
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $url = fURL::getDomain();
        $url2 = fURL::getQueryString();
        $url3 = fURL::get();
        echo $url.'<br>'.$url2.'<br>'.$url3.'<br> this is all';
        // put your code here
        ?>
    </body>
</html>
