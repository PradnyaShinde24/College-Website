<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>About Us</title>
</head>
<style>
   

    h5{
        color : #4B3F6E !important;
    }
    .own img{
        width: 150px;
        border-radius: 50%;
    }
    .vimi-row .col-lg-6 {
        margin-bottom: 50px !important;

    }

    .mission {
        background-color: rgba(0, 0, 0, 0.703);
        color: white;
        border-radius: 2px;
        padding: 10px;
        box-shadow: 3px 3px 10px black;
        transition: 1s;
    }

    .vison {
        background-color: rgba(214, 86, 86, 0.703);
        color: white;
        border-radius: 2px;
        padding: 10px;
        box-shadow: 3px 3px 10px black;
        transition: 1s;
    }

    .mission:hover {
        box-shadow: 6px 6px 20px rgb(0, 0, 0);
    }

    .vison:hover {
        box-shadow: 6px 6px 20px rgb(0, 0, 0);
    }
    @media (min-width: 992px)
    {
        .own img{
        width: 300px !important;
        border-radius: 50%;
        }
    }
</style>

<body>
    <header>
        <?php include'components/header.php' ?>
    </header>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h5><i class="fa-solid fa-star"></i>About Us</h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 text-center">
                    <div class="own">
                        <img src="https://sbpatilschool.in/images/Secretary.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5 mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi laborum, quas, obcaecati
                    deserunt alias debitis reiciendis quasi in perspiciatis consequuntur numquam laboriosam ex possimus,
                    aspernatur illo facere molestias quam.
                    Fugiat laboriosam, similique quidem molestias explicabo, saepe assumenda, nemo laudantium architecto
                    vel vero nulla sit. Nostrum odio vel, dolor maiores mollitia, nemo, dolores atque , mesciunt, error
                    quam corporis saepe provident omnis et numquam modi labore. Unde, consequatur.
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid " style="background-color: white;">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-12 text-center mt-5">
                    <h5><i class="fa-solid fa-star"></i>Mission and Vision</h5>
                </div>
            </div>
            <div class="row vimi-row mt-3">
                <div class="col-lg-6 ">
                    <div class="mission">
                        <h4>Mission</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi laborum, quas, obcaecati
                        deserunt alias debitis reiciendis quasi in perspiciatis consequuntur numquam laboriosam ex
                        possimus, aspernatur illo facere molestias quam.
                        Fugiat laboriosam, similique quidem molestias explicabo, saepe assumenda, nemo laudantium
                        architecto vel vero nulla sit. Nostrum odio vel, dolor maiores mollitia, nemo, dolores atque ,
                        mesciunt, error quam corporis saepe provident omnis et numquam modi labore. Unde, consequatur.
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="vison">
                        <h4>Vision</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi laborum, quas, obcaecati
                        deserunt alias debitis reiciendis quasi in perspiciatis consequuntur numquam laboriosam ex
                        possimus, aspernatur illo facere molestias quam.
                        Fugiat laboriosam, similique quidem molestias explicabo, saepe assumenda, nemo laudantium
                        architecto vel vero nulla sit. Nostrum odio vel, dolor maiores mollitia, nemo, dolores atque ,
                        mesciunt, error quam corporis saepe provident omnis et numquam modi labore. Unde, consequatur.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h5><i class="fa-solid fa-star"></i>Principal Desk</h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi laborum, quas, obcaecati
                    deserunt alias debitis reiciendis quasi in perspiciatis consequuntur numquam laboriosam ex possimus,
                    aspernatur illo facere molestias quam.
                    Fugiat laboriosam, similique quidem molestias explicabo, saepe assumenda, nemo laudantium architecto
                    vel vero nulla sit. Nostrum odio vel, dolor maiores mollitia, nemo, dolores atque , mesciunt, error
                    quam corporis saepe provident omnis et numquam modi labore. Unde, consequatur.
                </div>
                <div class="col-lg-6 text-center ">
                    <div>
                        <img src="images/stud.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container mt-5">
           
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h5><i class="fa-solid fa-star"></i>Governing Body</h5>
                </div>
            </div>

            <div class="row d-flex justify-content-center justify-content-lg-center mt-4">
                <div class="col-11 col-lg-7" >
                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ajit Bhimrav Shirgire</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>


    <footer>
        <?php include'components/footer.php' ?>
    </footer>

</body>

</html>