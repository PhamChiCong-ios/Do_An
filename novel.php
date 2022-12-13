<?php
session_start();
require_once './config/database.php';
require_once './config/config.php';
spl_autoload_register(function ($class_name) {
    require './app/model/' . $class_name . '.php';
});

$pathURI = explode('-', $_SERVER['REQUEST_URI']);
$id = $pathURI[count($pathURI) - 1];

//$id = $_GET['id'];
$novelModel = new NovelModel();

$item = $novelModel->getNovelById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                    $mainPhoto = explode(',', $item['novel_hinh']);    
                ?>
                
                <img src="/<?php echo BASE_URL; ?>/public/images/<?php echo $mainPhoto[0]; ?>" class="img-fluid" alt="...">
                
                <?php    
                    foreach ($mainPhoto as $photo) {
                ?>               
                <?php 
                    }
                ?>
            </div>
            <div class="col-md-8">
                <h1><?php echo $item['novel_ten'] ?></h1>
                <p><?php echo $item['novel_theloai'] ?></p>
                <p>tác giả<?php echo $item['novel_tacgia'] ?></p>
                <p>số chương:<?php echo $item['novel_sochuong'] ?></p>                
                <p>
                    <?php echo $item['novel_noidung'] ?>
                </p>
               
            </div>
        </div>
    </div>
</body>
</html>