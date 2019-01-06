
<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/2/2018
 * Time: 11:21 AM
 */
include ('includes/header.php');
?>


<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w3-content w3-display-container">
    <form class="form-inline navbar-search" method="post" action="index.php" >
        <script>
            (function() {
                var cx = '004697359314774782786:vflitbvupdm';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
            })();
        </script>
        <gcse:search></gcse:search>
    </form>

  <img class="mySlides" src="themes/images/carousel/1.jpg" style="width:100%">
  <img class="mySlides" src="themes/images/carousel/10.jpg" style="width:100%">
  <img class="mySlides" src="themes/images/carousel/7.jpg" style="width:100%">
  <img class="mySlides" src="themes/images/carousel/4.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<!-- Java Script -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

<button type="button"><a href="angularjs/index.php">Angular JS</button></a>
<button type="button"><a href="json/user_json.php">Json</button></a>
<button type="button"><a href="xml/user_xml.php">Generate Xml</button></a>
<button type="button"><a href="xml/user.xml">View Generated Xml File</button></a>
<button type="button"><a href="xml/user_xmlstyle.xsl">View XSL File</button></a>



<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            
</body>
</html>


<?php
include ('includes/footer.php');
?>
