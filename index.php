<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="NeLLo Records Official Website, Buy your quality beats here!"/>
<meta property="og:title" content="NeLLo Records"/>
<meta property="og:description" content="NeLLo Records Official Website, Buy your quality beats here!">
<meta property="og:image" itemprop="image" content="nellorecords.com/images/nellorecords.png">
<meta property="og:url" content="https://nellorecords.com">
<meta name="twitter:image" content="https://nellorecords.com/images/nellorecords.png">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:site_name" content="NeLLo Records">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/ico" href="images/favicon.ico/">

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-address-card, .fa-unlock, .fa-music, .fa-shopping-cart {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white nav-btn">Home</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white nav-btn">About</a>
        <a href="#beats" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white nav-btn">Beats</a>
        <a href="#projects" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white nav-btn">Projects</a>
        <a href="#store" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white nav-btn">Store</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white nav-btn">Contact</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#about" onclick="clicked()" class="w3-bar-item w3-button w3-padding-large">About</a>
        <a href="#projects" onclick="clicked()" class="w3-bar-item w3-button w3-padding-large">Projects</a>
        <a href="#beats" onclick="clicked()" class="w3-bar-item w3-button w3-padding-large">Beats</a>
        <a href="#store" onclick="clicked()" class="w3-bar-item w3-button w3-padding-large">Store</a>
        <a href="#contact" onclick="clicked()" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    </div>
</div>

<!-- Header -->
<header class="w3-container w3-black w3-center header" style="padding:128px 16px">
    <h1 class="w3-margin" style="font-family: LAMEBRAINS, sans-serif;font-size: 72px; text-shadow: 2px 2px 4px black;">NeLLo <br> Records</h1>
    <p class="w3-xlarge"></p>
    <a class="buy-btn" href="store">BUY BEATS NOW!</a>
</header>

<!-- First Grid -->
<div id="about" class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1><b>About</b></h1>
            <h5 class="w3-padding-16">What is NeLLo Records and who are we?</h5>

            <p class="w3-text-grey">NeLLo Records is a record label company that started making music that is made for people who <br> love music!
                We make music video's and we produce music itself. We also provide beats and more in the <a href="#store">store</a>.
                We are working with a couple of artists & producers right now such as: <br><br> <a class="socialbtn" href="https://www.youtube.com/watch?v=dIPixEva63o" target="_blank">DR!PD</a> — <a class="socialbtn" href="https://www.youtube.com/watch?v=zTV43RdgyOA" target="_blank">STEFFAX</a> — <a class="socialbtn" href="https://www.youtube.com/watch?v=lVBFiotFUlM" target="_blank">DON</a> — <a class="socialbtn" href="https://www.instagram.com/erik.stappenbelt/" target="_blank">ERICH</a> — <a class="socialbtn" href="https://www.instagram.com/prodnello/" target="_blank">NELLO</a> (Founder)
                <br><br> And finding more talents as always!
            </p>
        </div>

        <div class="w3-third w3-center">
            <iframe id="video" class="video" width="560" height="315" src="https://www.youtube.com/embed/dIPixEva63o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Second Grid -->
<div id="beats" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
            <i class="fa fa-music w3-padding-64 w3-text-black w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
            <h1><b>Beats</b></h1>
            <h5 class="w3-padding-32">To listen to beats we've made go <b><a href="beats.html">here!</a></b></h5>
            <p class="w3-text-grey"></p>
        </div>
    </div>
</div>

<!-- Third Grid -->
<div id="projects" class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1><b>Projects</b></h1><br> <br> <br>
            <a class="buy-btn w3-padding-16 seemore" href="beats.html">SEE MORE</a>
            <h5 class="w3-padding-16"></h5>

            <p class="w3-text-grey">
            </p>
        </div>

        <div class="w3-third w3-center">
            <i class="fa fa-unlock"></i>
        </div>
    </div>
</div>

<!-- Fourth Grid -->
<div id="store" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
            <i class="fa fa-shopping-cart w3-padding-64 w3-text-black w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
            <h1><b>Store</b></h1>
            <h5 class="w3-padding-32">You can buy and find all products <b><a href="store">here!</a></b></h5>

            <p class="w3-text-grey"></p>
        </div>
    </div>
</div>

<!-- Fifth Grid -->
<div id="contact" class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1><b>Contact</b></h1>
            <h5 class="w3-padding-32">For any bussiness or any contact what so ever:</h5>

            <p class="w3-text-grey">You can send us an email: <b> officialnellorecords@gmail.com </b></p>
        </div>

        <div class="w3-third w3-center">
            <i class="fa fa-address-card w3-padding-64 w3-text-black w3-margin-right"></i>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer-container">
    <div class="container">
        <div class="footer-heading footer-1">
            <h5><b>About Us</b></h5>
            <a href="#">FAQ</a>
            <a href="#">Terms of Service</a>
        </div>
        <div class="footer-heading footer-2">
            <h5><b>Social Media</b></h5>
            <a href="https://www.youtube.com/channel/UCjkcb95whu_-itrbjO6mepQ/" target="_blank">Youtube</a>
            <a href="https://www.instagram.com/NeLLoRecords/" target="_blank">Instagram</a>
            <a href="https://twitter.com/NeLLoRecords" target="_blank">Twitter</a>
        </div>
        <div class="footer-heading footer-3">
            <h5><b>Contact Us</b></h5>
            <a href="#contact">Contact</a>
        </div>
        <div class="footer-email-form">
            <h5><b>Join our newsletter</b></h5>
            <input type="email" placeholder="Enter your email adress" id="footer-email">
            <input type="submit" value="Sign Up" id="footer-email-btn">
        </div>
    </div>
</div>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>
