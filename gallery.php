<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Gallery</title>
</head>
<style>
    .main-gallery{
        column-count: 3;
        max-width: 60rem;
        width: 100%;
    }
    .img-box img{
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
    }
</style>
<body>
<header>
        <?php include'components/header.php' ?>
</header>

<div class="container-fluid">
    <div class="container main-gallery text-center mt-5">
        <div class="img-box">
            <img src="images/image1.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
        <img src="images/image2.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image3.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image4.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image5.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image6.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image7.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image8.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image9.jpg" alt="" srcset="">
        </div>
        <div class="img-box">
<img src="images/image10.jpg" alt="" srcset="">
        </div>
    </div>    
</div>


<footer>
        <?php include'components/footer.php' ?>
</footer>
</body>
</html>