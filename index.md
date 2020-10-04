<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>NeLLo Records</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>


<div class="nav">
    <ul>
        <li><a href="#HOME">HOME</a></li>
        <li><a href="#ABOUT">ABOUT</a></li>
        <li><a href="#CONTACT">CONTACT</a></li>
    </ul>
</div>
<div class="dark-mode-btn">
    <button class="btn" onclick="myFunction()"><img src="moon.png"/></button>
</div>
<div class="header" id="header">

    <h1>NeLLo</h1>


    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
            element.classList.toggle("invert");

        }
    </script>
</div>

<div class="middle" id="middle">

    <p>Launching Soon...</p>

</div>



<div id="footer" class="footer">
    <footer>
    <p1>Copyright @ 2020, NeLLo.</p1>
    </footer>
</div>

</body>
</html>