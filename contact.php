<!DOCTYPE html>
<html lang="en">

<?php
include('includes/head.php')
?>
<?php
include ('includes/header.php');
?>

<body>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
        </div>
    </div>
    <div id="mainBody">
        <div class="container">
            <hr class="soften">
            <h1>Contact Us</h1>

            <hr class="soften"/>
            <div class="row">
                <div class="span4">
                    <h4>Contact Details</h4>
                    <p> Kathmandu<br/>Nepal
                        <br/>New Baneshwor<br/>
                        <br/>
                        ﻿Tel 123-456-6780<br/>
                        Fax 123-456-5679<br/>
                    </p>
                </div>

                <div class="span4">
                    <h4>Opening Hours</h4>
                    <h5> Monday - Friday</h5>
                    <p>09:00am - 09:00pm<br/><br/></p>
                    <h5>Saturday</h5>
                    <p>09:00am - 07:00pm<br/><br/></p>
                    <h5>Sunday</h5>
                    <p>12:30pm - 06:00pm<br/><br/></p>
                </div>
                <div class="span4">
                    <h4>Email Us</h4>
                    <form class="form-horizontal" method="POST" action="includes/class/mail.php">
                        <fieldset>
                            <div class="control-group">

                                <input type="text" placeholder="name" class="input-xlarge" name="name"/>

                            </div>
                            <div class="control-group">

                                <input type="text" placeholder="email" class="input-xlarge" name="email"/>

                            </div>
                            <div class="control-group">

                                <input type="text" placeholder="subject" class="input-xlarge" name="subject"/>

                            </div>
                            <div class="control-group">
                                <textarea rows="3" id="textarea" class="input-xlarge" name="msg"></textarea>

                            </div>

                            <button class="btn btn-large" name="contact" type="submit">Send Messages</button>

                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="span12">

                <div id="googleMap" style="width:1200px;height:500px;"></div>

                    <script>
                    function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(27.692789, 85.319107),
                        zoom:5,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=
                        AIzaSyCH_zn2dqN3TebkxhJSWSuOJBq4jwFedj4 &callback=myMap"></script>

                     <!-- <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=27.6915196, &amp;q=New%20Baneshwor+(Online%20Cosmetic%20Collection)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br /> -->
               
             </div>
        </div>
   </div>
</div>




    <?php
    include ('includes/footer.php');
    ?>

