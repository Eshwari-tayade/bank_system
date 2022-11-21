<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="https://media.northwesternmutual.com/images/field/team/216/logos/406e1627-3d72-46f2-832f-d4597e9975c9.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://media.northwesternmutual.com/images/field/team/216/logos/406e1627-3d72-46f2-832f-d4597e9975c9.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://media.northwesternmutual.com/images/field/team/216/logos/406e1627-3d72-46f2-832f-d4597e9975c9.png">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>HOME</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(255,255,255) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body style="background-color: white;">

<div id="lock"><img src="statics/PngItem_5146697.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            box-shadow: 0 0 2px orangered;
            border-radius: 5px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: red;
        }

        .mybtn:active {
            background-color: black;
            color: black;
        }
    </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:Times New Roman; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="https://media.northwesternmutual.com/images/field/team/216/logos/406e1627-3d72-46f2-832f-d4597e9975c9.png" alt=""
                    style="height: 60px; width: 6cm;margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li
                    class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">Customers</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                    </option>
                </ul></select>
            </b>
        </div>
    </nav>



    <div class="container-large"
        style="color:#343a40; height:500px; width: 100%; padding:8% 2% 2% 2%;background-image:linear-gradient(to right,#D70040,#FAA0A0,#F88379,#D2042D,red);
    clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%);">
        <div class="row">
            <div class="col" style="margin-left: 5%; font-size:60px;"><br>
                <h>Welcome to sparks...!</h>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
            <img src="images/12.png"  alt="" style="width:10cm;"> 
            </div>
        </div>
    </div>
    <img src="images/rotate.png" alt="" style="width:100%; position:absolute; z-index:-1">

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:#343a40;"><b>Our Facilities</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-user fa-7x"></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6>Customer of the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-money-check fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Transfer money.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-rupee-sign fa-7x"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h6>Check your bank balance.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-address-book fa-7x"></i><br><br>
                            <a href="contact_us.php"><button type="button" class="btn btn-outline-light mybtn">Contact
                                    Us</button></a><br>
                            <h6>Contact us any time.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-comment-dollar fa-7x"></i><br><br>
                            <a href="transactions.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    transaction</button></a><br>
                            <h6>View all transactions.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:white; color:#343a40; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-solid fa-address-card fa-7x"></i><br><br>
                            <a href="about_us.php"><button type="button" class="btn btn-outline-light mybtn">About
                                    Us</button></a><br>
                            <h6>About Us.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    

</div>
</body>

</html>