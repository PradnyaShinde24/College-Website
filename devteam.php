<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <title>Developer Team</title>
</head>
<style>
    .review-section {
        
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .resecion {
        text-align: center;
        font-size: 20px;
    }

    .testimonial {
        position: relative;
        max-width: 900px;
        width: 100%;
        padding: 30px 0;
        overflow: hidden;
    }

    .testimonial .image {
        
        height: 170px;
        width: 170px;
        object-fit: cover;
        border-radius: 50%;
    }

    .testimonial .slide {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        row-gap: 30px;
    }

    .slide p {
        padding: 0 160px;
        font-size: 14px;
        font-weight: 100px;
    }

    .slide .quote-icon {
        font-size: 30px;
        color: rgb(21, 135, 135);
    }

    .slide .details {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .details .name {
        font-size: 14px;
        font-weight: 600;
        color: #100e0e;
    }

    .details .job {
        font-size: 12px;
        font-weight: 400;
        color: #100e0e;
    }

    .nav-btn {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        transform: translateY(30px);
        background-color: rgba(0, 0, 0, 0.1);
        transition: 0.2s;
    }

    .nav-btn:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }


    .swiper-pagination-bullet {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .swiper-pagination-bullet-active {
        background-color: #4070f4;
    }
</style>

<body>

    <header>
        <?php include'components/header.php' ?>
    </header>

    <div class="container-fluid">
        <div class="container">
            <h4 class="resecion mt-3">Developer team</h4>
            <div class="review-section">
                <div class="testimonial mySwiper">
                    <div class="testi-content swiper-wrapper">
                        <div class="slide swiper-slide">
                            <img class="image" src="Devloperteam/pra.jpg" alt="" srcset="">
                            <i class='bx bxs-quote-alt-left quote-icon'></i>
                            <div class="details">
                                <span class="name">Pradnya Shinde</span>
                            </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img class="image" src="Devloperteam/sa.jpg" alt="" srcset="">
                            <i class='bx bxs-quote-alt-left quote-icon'></i>
                            <div class="details">
                                <span class="name">Sandhya Shinde</span>
                                <span class="job">Designer</span>
                            </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img class="image" src="Devloperteam/san.jpg" alt="" srcset="">
                            <i class='bx bxs-quote-alt-left quote-icon'></i>
                            <div class="details">
                                <span class="name">Shinde Sanjivani</span>
                            </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img class="image" src="Devloperteam/sri.jpg" alt="" srcset="">
                            <i class='bx bxs-quote-alt-left quote-icon'></i>
                            <div class="details">
                                <span class="name">Shriyash Shinde</span>
                            </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img class="image" src="Devloperteam/tan.jpg" alt="" srcset="">
                            <i class='bx bxs-quote-alt-left quote-icon'></i>
                            <div class="details">
                                <span class="name">Tanmay Shinde</span>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next nav-btn"></div>
                    <div class="swiper-button-prev nav-btn"></div>
                    <div class="swiper-pagination "></div>
                </div>
            </div>

        </div>
    </div>

    <header>
        <?php include'components/footer.php' ?>
    </header>

</body>

<script src="swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        grabCursor: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    document.querySelectorAll('body img').forEach(Image => {
        Image.onclick = () => {
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = Image.getAttribute('src');
        }
    });
</script>
</html>