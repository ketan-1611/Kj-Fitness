<?php
$insert = false;
if(isset($_POST['name'])){
   
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `tourform`.`tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    
    if($conn->query($sql) == true){
      
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    
    $conn->close();
}
?>
 <!-- <div class="header">
                <div class="name">
                    <h3><span>Name:-</span>Prerana jain</h3>
                    <h3><span>Btu Rollno:-</span>19EEACS069</h3>
                    <h3><span>Batch:-</span>C3</h3>
                </div> <div class="name">
                    <h3><span>Name:-</span>Jayesh kumar kharara</h3>
                    <h3><span>Btu Rollno:-</span>19EEACS069</h3>
                    <h3><span>Batch:-</span>C3</h3>
                </div> <div class="name">
                    <h3><span>Name:-</span>ketan kumar jain</h3>
                    <h3><span>Btu Rollno:-</span>19EEACS049</h3>
                    <h3><span>Batch:-</span>C3</h3>
                </div>
            </div>
            <div class="home">
                <div class="nav">
                    <img src="#"></img>
                </div>
                <div class="nav">
                    <h2>kj fitness</h2>
                </div>
                <div class="nav">
                   <a href="#">Home</a> 
                </div>
                <div class="nav">

                </div>
                <div class="nav"></div>
                <div class="nav"></div>
                <div class="nav"></div>
            </div> -->

            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ketan online food services</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <img id="image" src="logo.jpg">
            <a id="color" href="#home" class="item">Kj Fitness</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="right">
                <a href="#about" class="item">About</a>
                <a href="#menu" class="item">Record</a>
                <a href="#contact" class="item">Contact</a>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="header1" id="home">
        <img class="image" src="1.jpg" alt="Hamburger Catering">
        <div class="large">
            <h1>Let's get ready to be fit Let's hit the gym</h1>
            <br>
            <p>It;s your work out,Your time,Your body own it</p>
            <button id="button">let's start</button>
        </div>
    </header>

    <!-- Page content -->
    <div class="content">

        <!-- About Section -->
        <div class="content1" id="about">
            <div class="about1">
                <img src="2.jpg" alt="Table Setting">
            </div>
            <div class="about1" id="about2">
                <h1 class="w3-center">About Gym</h1><br>
                <h5 class="w3-center">Tradition since 1889</h5>
                <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                    consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.We only use <span
                        class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
                <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                    temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <hr>

        <!-- Menu Section -->
        <div class="content8" id="menu">
            <div class="menu9">
                <h1>Our record</h1>
                <p>when you are at the gym feeling like you will never be one of those people who look like they have
                    been at it their entire lives,remember that they all started somewhere </p>
            </div>
            <div class="menu5" id="menu2">
                <div class="box">
                    <img src="download.png">
                    <h3>2.7K</h3>
                    <p>Downloads</p>
                </div>
                <div class="box">
                    <img src="user.png">
                    <h3>1.3K</h3>
                    <p>Users</p>
                </div>
                <div class="box">
                    <img src="headphone.png">
                    <h3>74</h3>
                    <p>Files</p>
                </div>
                <div class="box">
                    <img src="places.png">
                    <h3>46</h3>
                    <p>Places</p>
                </div>
            </div>
        </div>
        <hr>
        <!-- Contact Section -->
        <div class="content4" id="contact">
            <h1 id="contact">Contact</h1><br>
             
            <div class="container10">
                <h1>Welcome to Kj Gym Center</h1>
                <p>Enter your details and submit this form to confirm your membership in the Gym </p>
                    <?php
        if($insert == true){
        echo "<p id='submit'>Thanks for submitting your form. We are happy to see you joining us for your good health</p>";
        }
    ?>
                    <form action="index.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                        <input type="text" name="age" id="age" placeholder="Enter your Age">
                        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                        <textarea name="desc" id="desc" cols="30" rows="10"
                            placeholder="Enter any other information here"></textarea>
                            <button id="button1" onclick=" return submits()">submit</button>
                    </form><script src="script.js"></script>
            </div>
        </div>

        <!-- End page content -->
    </div>
    <footer>
        <p>Powered by <a href="#" title="ketan.gym" target="_blank">
                ketan.gym</a></p>
    </footer>
    
</body>
</head>

</html>