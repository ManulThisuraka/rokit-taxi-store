<!DOCTYPE html>
<html>
<head>
<title>RoKit Games </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "../css/test1.css" />

</head>
<body>

<div class="header">
  <div class="header-right">
  <img src="../images/Rokit.png" width="150" height="50">
  
    <a href="view/aboutus.php" >About Us</a>
    <a href="news/news.php">News</a>
    <a href="tournaments/Tournaments.php">Tournments</a>
    <a href="store/store.php" >Store</a>


</div>
</div>

<div class="slideshow-container">
<div class="mySlides">
  <img src="../images/1.jpg" style="width:100%">

</div>

<div class="mySlides">
  <img src="../images/2.jpg" style="width:100%">
</div>

<div class="mySlides">
  <img src="../images/3.jpg" style="width:100%">
</div>

<div class="mySlides">
  <img src="../images/4.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
<hr class="hrLine">
<br><br><br><br>
<div class="newRelease">
  <h3>New Releases</h3>
  <div class="testdiv" style="width:auto; margin:100px; margin-top: 15px">
        <div class="gameImg">
          <p class="gameName">Township</p>
          <img src="../images/township.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Rayman Legends</p>
          <img src="../images/raymanLegends1.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Getaway Blast</p>
          <img src="../images/getaway blast.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Angry Birds</p>
          <img src="../images/angryBirds1.jpg" alt="House" style="width:99%">
        </div>
      </div>
</div>

<br><br><br><br>
<div class="mostPopular">
  <h3>Most Popular</h3>
  <div class="testdiv" style="width:auto; margin:100px; margin-top: 15px">
        <div class="gameImg">
          <p class="gameName">Super Mario</p>
          <img src="../images/supermario1.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Splatoon 2</p>
          <img src="../images/splatoon2_2.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Minions</p>
          <img src="../images/minions1.jpg" alt="House" style="width:99%">
        </div>
        <div class="gameImg">
          <p class="gameName">Disney Infinity</p>
          <img src="../images/infinity1.jpg" alt="House" style="width:99%">

        </div>
      </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="coupon">
  
  <img src="../images/discount1.jpg" alt="Avatar" style="width:100%;">
  <img src="../images/discount2.jpg" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:orange">
    <h2><b>MIDWEEK MADNESS!</b></h2> 
    <p>Give your Steam library a boost with the biggest and best PC game bundles around. Exclusively curated for Fanatical and available for a limited time only, our bundles offer incredible value for money with huge savings of up to 99%. Featuring everything from top AAA titles to hidden Indie gems, check back regularly for our latest offers.</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">FQ85H69</span></p>
    <p class="expire">Expires: Dec 30, 2020</p>
  </div>
</div>
          
<footer>
  <div class="footerDiv" style="margin:10px; margin-bottom: 0">
  <p>© 2020, RoKit Games, Inc. All rights reserved. in the Sri Lanka and elsewhere. Other brands or product names are the trademarks of their respective owners. Non-LK transactions through RoKit Games International, S.à r.l.   </p>
  </div>
  <a href="view/termscon.php">Terms of Service</a>
<br>&nbsp;</br>
<a href="view/privacypoli.php">Privacy Policy</a>
<br>&nbsp;</br>
  <div class="footerLogo" >
  	<img src="../images/fb.png" style="width:2%">
  	<img src="../images/insta.png" style="width :2%">
  	<img src="../images/twitter.png" style="width:2%"><br>
</footer>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
