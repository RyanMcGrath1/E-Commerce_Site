

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="../colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../colorlib-regform-3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../colorlib-regform-3/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>
                <form id="reg" action="enroll.php" method="POST">
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Username" name="name" required>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Password" name="password" id="pass" required>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Confirm Password" name="confirm" id="confirm" required>
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="account_type">
                                <option disabled="disabled" selected="selected">Account Type</option>
                                <option>Customer</option>
                                <option>Employee</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" onclick="validate()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function validate(){
        // <form id = "reg">
        const pass = document.getElementById("pass").value;
        const confirm = document.getElementById("confirm").value;

        if (pass !== confirm){
            window.alert("Passwords do not match");
            window.location.href = "http://cyan.csam.montclair.edu/~mcgratr1/Final%20Project/src/registration.php";
        } else {
            document.forms["reg"].requestSubmit();
        }
    }
</script>
<!-- Jquery JS-->
<script src="../colorlib-regform-3/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="../colorlib-regform-3/vendor/select2/select2.min.js"></script>
<script src="../colorlib-regform-3/vendor/datepicker/moment.min.js"></script>
<script src="../colorlib-regform-3/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="../colorlib-regform-3/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
