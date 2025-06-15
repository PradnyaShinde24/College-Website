<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Hostel</title>
</head>
<style>
    .navcontain {
        background-color: wheat;
        box-shadow: 2px 2px 5px 2px;
        border-radius: 20px;
    }

    hr {
        padding: 0;
        margin: 1px;
        margin-left: 1rem;
        margin-right: 1rem;

    }

    .hr {
        margin-left: 30%;
        margin-right: 30%;
        height: 3px;
    }
     .contain-bg{
        background-color:#D9D9D9;
     }

</style>

<body>
    <header>
        <?php include'components/header.php' ?>
    </header>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-12">
                    <?php include'components/navfcilities.php' ?>
                </div>
                <div class="col-lg-9 col-sm-12 contain-bg">
                    <div class="row mt-5" >
                        <div class="col-lg-4">
                            <div>
                                <h3>Girsl Hostel</h3>
                                <hr />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eveniet praesentium
                                    molestiae aliquam, ipsa eius voluptas cumque facere temporibus, vero itaque
                                    recusandae quam molestias, nostrum fugiat? Ad vero dolore magni?</p>
                                <ol>
                                    <li>Wifi</li>
                                    <li>Study Room</li>
                                    <li>24/7 Light Avalibality</li>
                                    <li>Night Study</li>
                                    <li>Seprete Bed</li>
                                    <li>RO Water</li>
                                    <li>Solar water</li>
                                    <li>Cupboard</li>

                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <img src="images/hostel.jpg" class="img-fluid rounded" alt="" srcset="" width="400"
                                    height="400">
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi neque quibusdam ullam id?
                            Similique error fugit beatae amet expedita necessitatibus perspiciatis, ducimus ex explicabo
                            dolor ut animi iure aliquam dolorum qui nisi libero pariatur corporis sequi maiores aut
                            distinctio ratione.</p>
                    </div>

                    <div class="mt-3">
                        <h3>Boys Hostel</h3>
                        <div class="text-center">
                            <img src="images/hostel.jpg" class="img-fluid rounded" alt="" srcset="" width="400" height="400">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ducimus quasi illo dolorem
                            saepe amet, voluptatem perspiciatis ut ipsam natus, nobis sequi, eum debitis. Aut commodi
                            quas vel iste labore.</p>
                            <h4 class="text-center">Facility</h4>
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li>Seprete Bed</li>
                                        <li>Cupboard</li>
                                        <li >Solar Water</li>
                                        <li>Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-6 ">
                                    <ul>
                                        <li>RO Water</li>
                                        <li>Study Chair</li>
                                        <li>Study Table</li>
                                        <li>HouseKeeping</li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <header>
        <?php include'components/footer.php' ?>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
    integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
    crossorigin="anonymous"></script>

</html>