<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoicon.png" type="image/x-icon"> <!-- add website in favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--cdn-> contanet delivery network css file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact us</title>
</head>
<style>
  body{
    background-color: #948DA6 !important;
  }
  .contact-menu div{
    color:white;
  }
  .contact-menu i{
    color: black;
  }
  .map{
    width: 100%;
  }
  .main-form{
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('https://images.unsplash.com/photo-1530099486328-e021101a494a?q=80&w=2147&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;                      /* Ensures the image covers the entire section */
    background-position: center;                 /* Centers the image */
    background-repeat: no-repeat;   
    filter: blur(2px);
    width: 100%;
    height: 100vh;
    position: absolute;
    z-index: -1;
    
    background-attachment: fixed;

}
.Main-container{
    height: 60vh;
}
.Main-container input ,button{
    background: transparent;
    border: 2px solid white;
    color: white;
    border-radius: 5px;
    transition: transform 0.3s ease color 0.3s ease;
}
.Main-container input::placeholder{
    color: white;
}
.my-form {
    h5{
        color:  #ffffff !important;
    }
}

</style>
<body>
<?php include'components/header.php' ?>

<div class="container-fluid">
    <div class="container contact-menu">
        <div class="row text-center ">
            <div class="col-lg-6 col-sm-12 mt-5">
                <i class="fa-solid fa-phone  fa-3x"></i>
                <h4>Phone No.</h4>
                <p>+910000000000</p>
            </div>
            <div class="col-lg-6 col-sm-12  mt-5">
                <i class="fa-solid fa-clock fa-3x"></i>
                <h4>Opening Hours.</h4>
                <p>9:00AM to 4:20PM</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-6 col-sm-12 mt-5">
                <i class="fa-solid fa-envelope-open fa-3x"></i>
                <h4>E-mail.</h4>
                <p>poly@gmail.com</p>
            </div>
            <div class="col-lg-6 col-sm-12 mt-5 ">
                <i class="fa-solid fa-location-dot fa-3x"></i>
                <h4>Address.</h4>
                <p>At post  Vangali Indapur Dist - Pune - 413106</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid main-form ">
</div>
<div class="container Main-container mt-5">
    <div class="my-form mt-5">
         <div class="row mt-5">
                <div class="col-12 text-center">
                    <h5>Enquiry Form</h5>
                </div>
         </div>
        
        
           
            <form action="enquriyform.php" method="POST">
            <div class="row ">
                <div class="col-lg-6 col-12 text-lg-end text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="First_Name" id="" placeholder="First Name" required>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-lg-start  text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="Last_Name" id="" placeholder="Last Name"  required>
                    </div>
                </div>
             </div>
    
             <div class="row ">
                <div class="col-lg-6 col-12 text-lg-end text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="Address" id="" placeholder="Address"  required>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-lg-start text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="class" id="" placeholder="10th or 12th "  required>
                    </div>
                </div>
             </div>
    
             <div class="row ">
                <div class="col-lg-6 col-12 text-lg-end text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="CN_Name" id="" placeholder="Contact Number"  required>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-lg-start text-center mt-lg-4 mt-2">
                    <div>
                        <input type="text" name="Dep_Name" id="" placeholder="Department"  required>
                    </div>
                </div>
             </div>
             <div class="row text-center mt-lg-4 mt-2">
                <div class="col-12">
                    <button name="submit" type="submit">Submit</button>
                </div>
             </div>
             
            </form>

    </div>
</div>



<div class="container-fluid mt-5">
    <div class="continer">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.361456047287!2d74.97389317464362!3d18.147255680472107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc47f64ffd773fb%3A0x5fc4a28e583488fb!2sS%20B%20Patil%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1744231764843!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php include'components/footer.php' ?>
</body>
</html>

