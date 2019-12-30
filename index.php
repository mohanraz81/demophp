<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archeplay</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="icon" type="image/png" sizes="16x16" href="fevicon.png">
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet"> href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>
    <main>
        <section>
            <div class="max-width">
                <div class="banner">
                    <img src="demo.jpg" alt="demo" style="width:100%;height:100vh">
                </div>
                <div class="plans-section flexRow">
                    <div class="each-plans flexColumn">
';
function insertlabassoc($dbo,$sql)
{
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbo->prepare($sql);
        $stmt->execute();
}
$labdbhost_read_name =  getenv("MY_DB_HOST_READ");
$labdatabase =  getenv("MY_DB_NAME");
$labusername = getenv("MY_DB_USER");
$labpassword = getenv("MY_DB_PASS");
try
{
        $dbo = new PDO('mysql:host='.$labdbhost_read_name.';dbname='.$labdatabase, $labusername, $labpassword);
}
catch (PDOException $e)
{
        print "We have trouble in our System we will be back soon.";
        die();
}

$candl_backend_query = "select * from product";
$candl_backend_array = querymultirowlab($dbo, $candl_backend_query );
foreach($candl_backend_array as $value)
{
    echo '<div class=prod-image><img src='.$value['image'].'></div>';
    echo '<div class=prod-name>'.$value['name'].'</div>';
    echo '<div class=prod-desc>'.$value['description'].'</div>';
    echo '<div class=prod-price style=font-weight:bold><i class="fas fa-rupee-sign"></i>'.$value['price'].'</div>';
}
}
echo '</div>
</div>
</div>
</section>
</main>
<footer class="fixed"><h6>&copy;Archeplay 2019</h6></footer>
</body>

</html>'
?>