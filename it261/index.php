<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portal page</title>
    <link href="css/styles.css" type="text/css"
    rel="stylesheet">
</head>
<body>

  <div id="wrapper">
<nav>
    <ul>
    <li><a href="">Home</a></li>
        <li><a href="">Switch</a></li>
        <li><a href="">Troubleshoot</a></li>
        <li><a href="">Calculator</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Database</a></li>
        <li><a href="">Gallery</a></li>
    </ul>
</nav>

<main>
<h2>About Vanessa</h2>
<img class="left" src="images/nessie.jpg" alt="vanessa">
<p>Hello, my name is Vanessa Quezada. I am a 25-year-old artist based in Seattle, Washington. Most days I focus on working with digital media, but I have skills with multiple mediums such as acrylic paintings, clay sculpting, Sewing, and more. Being an artist is a big part of my identity as I love to create and work with my hands. In my free time, I love reading, watching TV, and playing video games. My favorite video game right now is Hades as the character designs are interesting and it is a game with a plot but ultimately you can play it mindlessly, which is relaxing after a hard day.</p>
<p>I have taken my love of art and video games and channeled them into web designing as there are ways to create web page video games with just HTML and CSS.</p>

<img class="left" src="images/mamp1.png" alt="vanessa">
<img class="left" src="images/mamp2.png" alt="vanessa">

</main>

<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>

<ol>

<li><a href="weeks/week2/var.php">var.php</a></li>
<li><a href="weeks/week2/vars2.php">vars2.php</a></li>
<li><a href="weeks/week2/currency-logic.php">currency-logic</a></li>
<li><a href="weeks/week2/currency.php">currency</a></li>
<li><a href="">somethingagain.php</a></li>

</ol>

</aside>

</div>
<!--close wrapper-->

<footer>
    <ul>
        <li>Copyright &copy;
            2024</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by YOUR NAME</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
 </footer>

</body>
</html>