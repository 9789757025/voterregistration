<?php
session_start();
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--- Fontaswesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- custom CSS-->
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!--Header-->

    <header class="text-center header-social-icon text-lg-start bg-primary text-white">
        <div class="container">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span class="mx-2"><i class="fa fa-phone"></i> +97798800800000</span>
                    <span><i class="fa fa-calendar mx-1"></i> Mon-Fri: 10.00-04.00</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->
        </div>
    </header>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Voter Registration</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                
                    
                     <!-- Login / Sign up -->
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <a href="login.php" class= "nav-link-active text-black">Login</a>
            <a href="signup.php" class="text-white text-decoration-none px-3 py-1 rounded-5" style="background-color: #f94ca4;">Sign Up</a>
          </div>
                   
                </ul>

            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <!--Carousel Start-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-100 w-100"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7da6e184253993.5d56acc35dd99.jpg"
                    class="d-block w-100">
                <div class="carousel-caption d-block">

                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100"
                    src="https://leadgenapp.io/wp-content/uploads/2023/01/Heres-how-you-can-register-property-online-in-Delhi.jpg"
                    class="d-block w-100">
                <div class="carousel-caption d-block">

                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100" src="image2.jpg" class="d-block w-100">
                <div class="carousel-caption d-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carousel End-->

    <!--About Sart-->
    <main id="about">
        <div class="about mt-5 mb-5">
            <div class="container">
                <!--Section Head-->
                <h2 class="h2-responsive fw-bold text-center my-2">
                    About Us
                </h2>
                <p class="text-center w-responsive mx-auto mb-1 fs-2">Automatic Voter Registration</p>
                <!--Section Head End-->
                <div class="row">
                    <div class="col-md-6 align-items-stretch">
                        <img class="img-fluid" src="about.jpg" alt="about my page" height="605" width="650">
                    </div>
                    <div class="col-md-6 gap-2">
                        <h2 class="h2-responsive fw-bold text-center-start section-heading">Our Website</h2>


                        <p class="lh-base fs-5 align-items-justify-content"> Automatic Voter Registration (AVR) offers a
                            modern and secure solution,
                            leveraging the information people already provide in other government transactions for voter
                            registration. AVR helps add eligible people to the rolls and keeps records up-to-date for
                            existing voters.</p>

                        <p class="lh-base fs-5 align-items-justify-content">AVR improves accessibility and efficiency,
                            using routine government agency
                            transactions to register people to vote and keep registration records current and accurate.
                            This process helps both voters and election officials by streamlining voter registration and
                            updating. Every voter registered through AVR is a person who does not need to register
                            through a paper form or at the polls on election day, saving time and money for election
                            officials. Better address data from state agencies also avoids election mail being sent to
                            the wrong address.</p>
                        <a href="" clas="btn btn-primary px-2 pl-2 mt-3">Read More</a>
                    </div>
                </div>


            </div>

        </div>
    </main>
    <!--About End-->

    <!--Service Start-->

    <main id="service">
        <div class="service mt-5 mb-5">
            <div class="container">
                <!--Section Head-->
                <h2 class="h2-responsive fw-bold text-center my-2">
                    Services
                </h2>
                <p class="text-center w-responsive mx-auto mb-1 fs-2">Applicant to create a new regsiter account and to
                    login your details</p>
                <!--Section Head End-->
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card box" style="width: 18rem;">
                            <img class="card-img-top"
                                src="https://img.freepik.com/free-vector/online-registration-form_23-2147979930.jpg"
                                alt="Register page" height="300 width=400">
                            <div class="card-body">
                                <h5 class="card-title">Register</h5>
                                <p class="card-text">To create a new account .</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box" style="width: 18rem;">
                            <img class="card-img-right"
                                src="https://colorlib.com/wp/wp-content/uploads/sites/2/free-html5-and-css3-login-forms.jpg"
                                alt="login page" height="300" width="400">
                            <div class="card-body">
                                <h5 class="card-title">Login</h5>
                                <p class="card-text">You have Login your account .</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box" style="width: 18rem;">
                            <img class="card-img-right"
                                src="https://images.hindustantimes.com/img/2022/08/31/1600x900/d0197ea8-2968-11ed-b699-b608dd3b520f_1661976745837.jpeg"
                                alt="Link aadhar" height="300" width="400">
                            <div class="card-body">
                                <h5 class="card-title" >Generate Voter Application</h5>
                                <p class="card-text">You have created successfully .</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!--Service End-->



    <!--Contact Start-->
    <div class="row">
        <div class="col-md-6">
    <main id="contact">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Form</title>
        </head>
        <body>
            
            <div class="contact mt-5 mb-5">
                <div class="container">
                    <!--Section Head-->
                    <h2 class="h2-responsive fw-bold text-center my-2">
                        Contact Us
                    </h2>
                    <p class="text-center w-responsive mx-auto mb-1 fs-2"></p>
                    <!--Section Head End-->
                    <form style="width: 26rem;">
      <!-- Name input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="text" class="form-control" name ="cname"required />
        <label class="form-label" for="form4name">Name</label>
      </div>
      
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="mail" required/>
        <label class="form-label" for="form4email">Email address</label>
      </div>
    
      <!-- Message input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <textarea class="form-control" id="text" rows="4" name="mssg" required></textarea>
        <label class="form-label" for="form4Example3">Message</label>
      </div>
    
      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="form4Example4"
          checked
        />
        <label class="form-check-label" for="form4Example4">
          Send me a copy of this message
        </label>
      </div>
    
      <!-- Submit button -->
      <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4" value="submit">Send</button>
    </form>
    <script>
    // Initialization for ES Users
    import { Input, Ripple, initMDB } from "mdb-ui-kit";
    
    initMDB({ Input, Ripple })
    </script>
            
        </body>
        </html>
       </main>
    </div>
    </div>
       </div>
       <div class="row mt-5">

        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.538940043731!2d79.75408577453284!3d12.00637194741156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53676c366fb72b%3A0x45985808df6f3997!2sSri%20Aravindar%20Arts%20and%20Science%20College!5e0!3m2!1sen!2sin!4v1711931296020!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       </div>




                <!--Contact End-->

                <footer>
                    <section class="">
                        <!-- Footer -->
                        <footer class="text-center text-white" style="background-color: #0a4275;">
                            <!-- Grid container -->
                            <div class="container p-4 pb-0">
                                <!-- Section: CTA -->
                                <section class="">
                                    <p class="d-flex justify-content-center align-items-center">
                                        <span class="me-3">Register for free</span>
                                        <button data-mdb-ripple-init type="button"
                                            class="btn btn-outline-light btn-rounded">
                                            Sign up!
                                        </button>
                                    </p>
                                </section>
                                <!-- Section: CTA -->
                            </div>
                            <div class="col-md-6 mb-md-0 mb-5">
                                

                            </div>
                            <div class="col-md-6">

                            </div>

                            <!-- Grid container -->

                            <!-- Copyright -->
                            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                                © 2024 Copyright:
                                <a class="text-white" href="https://mdbootstrap.com/">R Thendral</a>
                            </div>
                            <!-- Copyright -->
                        </footer>
                        <!-- Footer -->
                    </section>

                </footer>
</body>

</html>