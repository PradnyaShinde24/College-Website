<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!--link css file -->
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Home</title>
</head>
<style>
    body {
        background-color: #948DA6;
    }



    .divcontanet {
        background-color: rgb(255, 255, 255);
    }

    .name {
        color: #4B3F6E;
        text-transform: uppercase;
    }

    .navbar {
        background-color: #4B3F6E;

    }

    .text-sm-center {
        text-align: center;
    }

    /* css for card in slidebarsection of card */
    .custom-card {
        width: 100%;
        height: 99%;
        background-color: white;
        box-shadow: -5px 5px 10px rgba(0, 0, 0, 0.85);
        border-radius: 0 0 0 97px;
    }

    #navbarCollapse a {
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        color: #ffff;
    }

    a {
        margin-right: 10px;
    }



    .hiding {
        color: #4B3F6E;
        font-size: 24px;
        font-family: Inter;
        font-weight: 700;
        word-wrap: break-word;

    }

    .star {
        margin-right: 4px;
        margin-top: -10px;
        margin-left: 33px;
    }



    .about-btn {
        width: 190px;
        height: 52px;
        background: #4B3F6E;
        border-radius: 15px;
        color: #ffff;

    }




    .card {
        width: 135px;
        height: 202px;
        position: relative;
        margin-right: 13px;
    }

    .list-container img {
        width: 100%;
        height: 100%;
    }

    .black {
        position: absolute;
        background-color: hsla(0, 0%, 0%, 0.33);
        width: 100%;
        height: 55px;
        border-radius: 8px;
        top: 72.5%;
        text-align: center;
    }

    .black h6 {
        margin-top: 10%;
        color: white;
        font-size:12px;
    }

    .btn-read {
        width: 190px;
        height: 52px;
        color: #ffff;
        border-radius: 15px;
        background-color: #4B3F6E;
        text-align: center;
        color: white;
        font-size: 16px;
        font-family: Poppins;
        font-weight: 400;
        line-height: 28px;
    }

    .list-container {
        background-color: white;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
    }

    .btn-read img {
        width: 20px;
        height: 20px;

    }

    .main-gallery {
        column-count: 3;
        max-width: 60rem;
        width: 100%;
    }

    .img-box img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
    }

    .my-section {
        margin-top: 40px;
        position: relative;
        background-image: url('images/hirbg.jpg');
        /* Replace with your image URL */
        background-size: cover;
        /* Ensures the image covers the entire section */
        background-position: center;
        /* Centers the image */
        background-repeat: no-repeat;
        /* Ensures the image doesn't repeat */
        width: 100%;
        /* Ensures the section spans full width */
        height: 100vh;
    }

    .section-place {
        margin-top: 40px;
    }

    .section-place span {
        height: 300px;
        width: 300px;
    }

    .section-place .star {
        margin-left: 50%;
    }


    .text-primary {
        color: #ffff !important;
    }

    .footer {
        background-color: #4B3F6E !important;
    }

    .footer .btn-link {
        color: #ffff;
    }
    @media (max-width: 575.98px) { 
        .btn-read{
           margin-top: 20px !important; 
        }
    }
</style>

<body>

    <?php include'components/header.php' ?>



    <section class="container-fluid">


        <div class="row row-cols-1 row-cols-md-2">


            <!-- Carousel Section -->
            <div class="col col-xl-8">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/image1.jpg" width="500" height="500" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/image2.jpg" width="500" height="500" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/image9.png" width="500" height="500" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <!-- Sidebar/Custom Card Section -->
            <div class="col col-xl-4">
                <div class="bg-white custom-card p-3">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>


        </div>

    </section>






    <!-- history section -->
    <section class="history container-fluid ">
        <div class="history-container container mt-5">


            <div class="box1">

                <div class="row">
                    <div class=" divcontanet  col-lg-6 col-12 p-3">
                        <div class="row">
                            <div class="col ">
                                <img class="star" src="images/svg/Star 1.svg" alt=""><span class="hiding">History</span>
                            </div>
                        </div>
                        <p class="contanet">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, error quisquam
                            minus
                            illum quos expedita, unde in nobis magni accusantium repellendus eius reprehenderit dolorem?
                            Quasi nisi amet provident debitis!
                            Perferendis nulla expedita pariatur? Dolorem similique aperiam cum fugiat praesentium, in
                            nobis
                            dolorum perferendis quibusdam ab debitis non exercitationem ratione, iste consequatur
                            voluptatibus nihil, maiores magnam cumque consectetur rerum ad?
                            Hic ut dicta quasi, consequatur error facere! Repellendus fugiat neque enim facere nobis
                            quam
                            libero nostrum consequuntur ut blanditiis doloremque excepturi aliquam, animi accusamus
                            optio ex
                            error molestias.
                        </p>
                        <div class="div-btn">
                            <button  class="about-btn" onclick="window.location.href='aboutus.php'" type="button"><img src="images/svg/circale.svg" alt="" srcset="">
                                Aboutus</button>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <video class="border rounded img-fluid" src="images/video_20250211_132234.mp4" autoplay muted
                            controls class="vedio">vedio not load</video>
                    </div>
                </div>


            </div>




        </div>
    </section>


    <div class="list-container container mt-5">
        <div class="row m-5">
            <div class="col-12 col-lg-12 white-col mt-5">
                <div class="row">
                    <div class="card col  p-0">
                        <img src="images/com.jpg" alt="">
                        <div class="black">
                            <h6>Compueter Science</h6>
                        </div>
                    </div>
                    <div class="card col p-0">
                        <img src="images/mech.jpg" alt="">
                        <div class="black">
                            <h6>Mechanical</h6>
                        </div>
                    </div>

                    <div class="card col p-0">
                        <img src="images/ele.jpg" alt="">
                        <div class="black">
                            <h6>Electrical</h6>
                        </div>
                    </div>

                    <div class="card col p-0">
                        <img src="images/en&tc.jpg" alt="">
                        <div class="black">
                            <h6>En & Tc</h6>
                        </div>
                    </div>

                    <div class="card col p-0">
                        <img src="https://img.freepik.com/vector-premium/ingeniero-civil-teodolito-ilustracion-personaje-dibujos-animados_338371-860.jpg?w=2000"
                            alt="">
                        <div class="black">
                            <h6>Civil</h6>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row text-center mt-2 mb-5 mt-sm-5">
                <div class="col-lg-12 mt-3">
                    <button type="button" class=" btn-read" onclick="window.location.href='Department.php'">READ MORE <img class="star " src="images/svg/arrow.svg"
                            alt=""></button>
                </div>
            </div>
        </div>
    </div>


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

    <div class="my-section">
        <section class="section-place container">

            <div class="row mt-3 ">
                <div class="col text-center">
                    <img style="margin-top: -10px; padding: 4px;" src="images/svg/Star 1.svg" alt=""><span class="hiding">Our Recruiters</span>
                </div>
            </div>

            <div class="row">
                <div class="nvdia col mt-5 ">
                    <img src="images/svg/Clip path group (1).svg" alt="" srcset="">
                </div>

                <div class="amzon col mt-4">
                    <img src="images/svg/Amazon.com, Inc..svg" alt="" srcset="">
                </div>


                <div class="tata col mt-5">
                    <img src="images/svg/Tata.svg" alt="" srcset="">
                </div>

                <div class="mcd col mt-5">
                    <img src="images/svg/Clip path group (3).svg" alt="" srcset="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="hyun col mt-5">
                    <img src="images/svg/Clip path group (4).svg" alt="" srcset="">
                </div>

                <div class="ibm col mt-5">
                    <img src="images/svg/Clip path group.svg" alt="" srcset="">
                </div>

                <div class="ford col mt-5">
                    <img src="images/svg/Group.svg" alt="" srcset="">
                </div>
            </div>




        </section>
    </div>

    <?php include'components/footer.php' ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>