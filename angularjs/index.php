<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
          <title>Angularjs</title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

          <!-- JS -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>
          <script type="text/javascript" src="assets/js/script.js"></script>
          <script type="text/javascript" src="assets/js/jquery.terseBanner.min.js"></script>
          <script type="text/javascript" src="assets/js/jquery.easy_slides.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
    
           
           <script>
            $(document).ready(function() {
                $("#hide").click(function() {
                    $("#maindata").hide();
                });
                $("#show").click(function() {
                    $("#maindata").show();
                });
            });
        </script>
        <style>
            tr {
                color: black;
            }

            td {
                color: black;
            }
        </style>  
      </head> 


      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">AngularJS of user table </h3>  <br>
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  

                <a href='javascript:self.history.back();' class="btn btn-warning">Go Back</a>
                <br><br>

                <button id="hide" class="btn btn-danger">Hide the data</button><br>
                <br>

                <button id="show" class="btn btn-success">Show the data</button>
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()" id="maindata" style="display: none;">

                     <table class="table table-bordered">  
                          <tr>  
                               <th>First Name</th>  
                               <th>Last Name</th> 
                               <th>User Name</th> 
                               <th>Email</th>
                               <th>Address</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.fname}}</td>  
                               <td>{{x.lname}}</td> 
                               <td>{{x.uname}}</td> 
                               <td>{{x.email}}</td> 
                               <td>{{x.address}}</td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>
   
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
 });  
 </script>  

