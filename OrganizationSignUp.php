<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick-carousel.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/style.css">
</head>


<style>

</style>


<body class="sign-two-body">
    <div class="sign container">
        <div class="row">
            <div class="col-md-12">



                <div class="signup-form-two">
                    <form action="Controller/OrganizationSignUp.php" method="post">
                        <h2>Sign Up</h2>
                        <h6 style=" text-align: center; color: #fff700;">Sign Up as Volunteer   <a href="VolunteerSignUp.php" style=" text-align: center; color: #fff;">Here!</a> </h6>

                        <p>Please fill in this form to create an account!</p>

                        <div class="form-group hello">

                            <input type="text" class="form-control" name="name" placeholder="Organization Name"
                                required="required">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                required="required">

                        </div>
                        <div class="form-group hello">
                            <input type="text" class="form-control" name="LinkedIn" placeholder="LinkedIn"
                                required="required">
                            <input type="text" class="form-control" name="location" placeholder="City"
                                required="required">
                        </div>
                        
                        <div class="form-group hello">
                            <input type="password" class="form-control" name="password"
                                placeholder="Password" required="required">
                            <input type="password" class="form-control" name="confrim_Password" placeholder="Confirm Password"
                                required="required">
                        </div>



                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primarys">Sign Up</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>





    <script src="js/jquery 3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/universal_tilt.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>