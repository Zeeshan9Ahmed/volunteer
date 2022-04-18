<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppoutunities</title>





    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />
    <link rel="stylesheet" type="text/css" href="css/slick-carousel.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet"
        href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="css/style.css">






</head>
<body>
    


   <?php include_once('assets/nav-bar.php');?>


    <div class="hero-banner">
        <div class="container">
            <div class="hero-banner-text">
                <div class="hero-banner-heading">
                   Post Volunteer Opportunities
                </div>
               
                <button type="button" class="btn btn-warning text-dark btn-banner"><i class="fas fa-play"></i></button>
            </div>
        </div>
    </div>





    <div class="post_app">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-app-form">
                        <form method="POST" action="Controller/PostOpportunity.php">
    
                            <div class="form-row">
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault01">Start Date</label>


                                    <div class="input-group mb-3 date" id='datepicker'>
                                        <input type="date" class="form-control" name="start_date" placeholder="dd-mm-yyyy" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><span class="fas fa-calendar"></span></span>
                                        </div>
                                      </div>
                                    
                                   
                                </div>
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault02">End Date</label>
                                    <div class="input-group mb-3 date" id='datepicker2'>
                                        <input type="date" class="form-control" name="end_date" placeholder="dd-mm-yyyy" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><span class="fas fa-calendar"></span></span>
                                        </div>
                                      </div>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault01">Name of the event</label>
                                    <input type="text" class="form-control" name="name" id="validationDefault01" value="Mark"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault02">Category</label>
                                    <select class="form-control" name="category_id" id="cars">
                                        <option value="1">Volvo</option>
                                        <option value="2">Saab</option>
                                        <option value="3">Opel</option>
                                        <option value="4">Audi</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault01">How many volunteer needed</label>
                                    <input type="number" class="form-control" name="no_of_volunteers" id="validationDefault01" value="Mark"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3 form-row-height">
                                    <label for="validationDefault02">Location</label>
                                    <input type="text" class="form-control" name="location" id="validationDefault01" value="Mark"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3 form-row-height">
                                    <label for="validationDefault01">Opportunity Type</label>
                                    <select class="form-control" name="type_id" id="cars">
                                        <option value="1">Volvo</option>
                                        <option value="2">Saab</option>
                                        <option value="3">Opel</option>
                                        <option value="4">Audi</option>
                                    </select>
                                </div>
                               
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-8 mb-3 form-row-height">
                                    <label for="validationDefault01">Detailed Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-8 mb-3 form-row-height">
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 form-row-height"></div>
                            </div>
    
                            <div class="form-row col-md-12 form-row-height">
                                <div class="form-image">
                                    <h4>Photo Gallery</h4>
                                    <img src="images/sample image-1.png" alt="">
                                    <img src="images/sample image-10.png" alt="">
                                    <img src="images/sample image-11.png" alt="">
                                    <img src="images/sample image-14.png" alt="">
    
    
                                    <i class="fas fa-plus"></i>
    
                                </div>
    
                            </div>
    
                            <div class="form-row ">
                                <div class="col-md-12 form-row-height">
                                    <button class="btn btn-success post-btn" type="submit" name="submit">Post Now</button>
    
                                </div>
                            </div>
    
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    








    <footer class="footer-04" >
        <div class="container" style="padding-bottom: 6em;">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading"><a href="#" class="logo"><img src="images/logo.jpg"  alt=""></a></h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Categories</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Buy &amp; Sell</a></li>
                        <li><a href="#" class="py-1 d-block">Merchant</a></li>
                        <li><a href="#" class="py-1 d-block">Giving back</a></li>
                        <li><a href="#" class="py-1 d-block">Help &amp; Support</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14763.537593284394!2d91.81770479828492!3d22.320211343637336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1647808645463!5m2!1sen!2sbd" width="100%" height="250px" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Follow us</h2>
                   
                   
                        <i class="fab fa-facebook-f" style="color: white;font-size: 20px; margin-right: 20px;"></i>
                        <i class="fab fa-instagram" style="color: white;font-size: 20px; margin-right: 20px;"></i>
                        <i class="fab fa-youtube" style="color: white;font-size: 20px; margin-right: 20px;"></i>
                        <i class="fab fa-twitter" style="color: white;font-size: 20px; margin-right: 20px; "></i>
                   
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 border-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="copyright">
                            All right reserved by helpvilla
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>





    <script src="js/jquery 3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/universal_tilt.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js">
    </script>
    <script src="js/script.js"></script>

</body>
</html>