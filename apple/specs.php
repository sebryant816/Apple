<!DOCTYPE html>

<html lang="en">

<head>
    
   <!-- //meta data to allow pages to adjust to mobile devices//--->
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>APPLE SPECS</title>

      <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">



<style>
    .buy{
      background-color: #ddd;
      border: none;
      color: white;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 16px;
      background-color:#3399ff;
    }

</style>

</head>

<body>
 
                <?php

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                ?>

                <!--Nav-->
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center py-0">
                <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar10">
                <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;"><i class="fab fa-apple fa-1x" style="font-size:21px;"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">Mac</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">iPad</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">iPhone</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">Watch</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">TV</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">Music</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;">Support</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;"><i class="fas fa-search fa-1x"></i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;font-family: Arial Narrow;"><i class="fas fa-shopping-bag"></i></a>
                </li>
                </ul>
                </div>
                </div>
                </nav>

                <!--container for second menu-->

                <div class="container">
                  <div class="row">
                        <div class="col-md-6 text-left" style="font-size:25px;">
                      <strong>MacBook Pro</strong>
                  </div> <!--/col-->
                      <div class="col-md-6 text-right">
                     Overview    macOS   Tech Specs <button type="button" class="buy btn-primary btn-round btn-sm">Buy</button>
                    </div> <!--/col-->

                <!--button here-->

                <br><br>

                <div class="container  text-center" style="padding-top:100px;padding-bottom:100px;">
                  <div class="row">
                    <div class="col-md-12">
                    <a href="index.php#" class="btn btn-info" role="button" style="border:2px solid #3399ff;font-size:18px;padding-top:20px;padding-bottom:50px; background-color:white;color:black; width:175px; height:40px;"><strong>13-inch</strong></a>
                    <a href="15inch.php#" class="btn btn-info" role="button"style="border:2px solid #3399ff;font-size:18px;padding-top:20px;padding-bottom:50px; background-color:white;color:black; width:175px; height:40px;"><strong>15-inch</strong></a>
            </div>
          </div>
        </div>
        <br><br><br><br>

        <br><br><br><br>
        <!---New container for screen images--->

        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">

                       <span><img src="images/13inch1.jpeg" width=30%></span><span><img src="images/13inch1.jpeg" width=30%></span>
                       <br><br>
             </div>
          </div>
        </div>

        <!--container for touchbar text--->
        <div class="container  text-left" style="font-size:18px;">
          <div class="row">
            <div class="col-md-6">
                       <br>

                  <table>
                     <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=13";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <td><?=$row["description"]?></td>
                                <?
                              }
                            } else {
                              echo "0 results";
                            }

                             ?>
                   </tr>
                 </table>
           </div>
           <div class="col-md-6">

                        <br>

                 <table>
                    <tr>

                          <?php
                            $sql = "SELECT * FROM apple WHERE id=14";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <td><?=$row["description"]?></td>
                                <?
                              }
                            } else {
                              echo "0 results";
                            }
                                ?>
                   </tr>
                </table>
            </div>
           </div>
          </div>

                  <br><br>
                  <br><br>
                  <br><br>

                <!---Price col 1--->

           <div class="container" style="padding-top:150px;">
             <div class="row">
               <div class="col-md-4">

                      <h2>Price</h2>

                 </div>

                <!-- Price col  2 --->

                 <div class="col-md-2">
                        <p style="font-size:22px">$1299</p>

                 </div>

                <!-- Price col  3 --->

                <div class="col-md-2">

                        <p style="font-size:22px">$1499</p>
                        </div>

                  <!-- Price  col  4 --->

                  <div class="col-md-2">

                         <p style="font-size:22px">$1799</p>
                   </div>

                   <!-- Price  col  5--->

                   <div class="col-md-2">
                         <p style="font-size:22px">$1999</p></div>

                   </div>
               </div>



                <!---Finish col 1--->

            <div class="container" style="padding-top:150px;">
              <div class="row">
                 <div class="col-md-3">

                      <h2>Finish</h2>

                 </div>


                <!-- display col  2 --->

                <div class="col-md-9">

                    <img src="images/finish.png" style="width: 100%;padding-left:80px;" alt="" > 
                        </div>

               </div>
            </div>

                <!---Display col 1--->

            <div class="container" style="padding-top:150px;">
              <div class="row">
                <div class="col-md-4">

                      <h2>Display</h2>

                 </div>

                <!-- Display col  2 --->

                 <div class="col-md-4">

                     <table>
                         <tr>

                              <?php
 
                               $sql = "SELECT * FROM apple WHERE id=45";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                       </tr>
                   </table>
             </div>
                <!-- display col  3 --->

             <div class="col-md-4">
                 <table>
                    <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=46";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                        </tr>
                  </table>
             </div>
          </div>
       </div>

    <!---Processor col 1--->

        <div class="container" style="padding-top:150px;">
          <div class="row">
            <div class="col-md-4">

                      <h2>Processor</h2>

             </div>

                <!-- Processor col  2 --->
             <div class="col-md-4">
                   <table>
                        <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=43";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                     </div>

                <!-- Processor col  3 --->

                <div class="col-md-4">

                <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=44";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>
                        </div>
                   </div>
                </div>

                <!---Storage col 1--->

                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Storage</h2>

                     </div>

                <!-- Storage col  2 --->

                     <div class="col-md-2">

                     <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=39";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                     </div>

                <!-- Storage col  3 --->

                <div class="col-md-2">

                <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=40";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>
                        </div>

                  <!-- Storage col  4 --->

                  <div class="col-md-2">

                  <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=41";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>
                        </div>

                   <!-- Storage col  5--->

                   <div class="col-md-2">

                   <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=42";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table></div>

                   </div>
                </div>


                <!---Memory col 1--->

                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Memory</h2>

                     </div>

                <!-- Memory col  2 --->

                     <div class="col-md-4">

                     <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=37";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                     </div>
                <!-- Memory col  3 --->

                <div class="col-md-4">
                <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=38";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>
                        </div>

                   </div>
                </div>



                <!---Graphics col 1--->

                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Graphics</h2>

                     </div>

                <!-- Graphics col  2 --->

                     <div class="col-md-4">

                     <p style="font-size:18px;">Intel Iris Plus Graphics 640</p>

                     </div>
                <!-- Graphic col  3 --->

                <div class="col-md-4">

                <p style="font-size:18px;">Intel Iris Plus Graphics 655</p>
                        </div>

                   </div>
                </div>



                <!--Charging col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Charging and Expansion</h2>

                     </div>

                <!-- Charging col  2 --->

                     <div class="col-md-4">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=35";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                <!-- Charging  col  3 --->

                <div class="col-md-4">

                        <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=36";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>

                   </div>
                </div>



                <!--Charging col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Charging and Expansion</h2>

                     </div>

                <!-- Charging col  2 --->

                     <div class="col-md-4">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=33";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                <!-- Charging  col  3 --->

                <div class="col-md-4">

                        <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=34";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>

                   </div>
                </div>





                <!--keyboard col 1--->


                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-4">

                      <h2>Keyboard and Trackpad</h2>

                     </div>

                <!-- keyboard col  2 --->

                     <div class="col-md-4">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=33";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                <!-- keyboard col  3 --->

                <div class="col-md-4">

                        <table>

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=34";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>

                   </div>
                </div>

                <!--wireless col 1--->

                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Wireless</h2>

                     </div>

                <!-- wireless  col  2 --->

                     <div class="col-md-3">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=31";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                <!-- wireless  col  3 --->

                <div class="col-md-3">

                        <table style="margin-left:40px;">

                               <tr>

                            <?php

                               $sql = "SELECT * FROM apple WHERE id=32";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>
                        </div>
                        <div class="col-md-3">

                        </div>
                   </div>
                </div>


                <!--camera col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Camera</h2>

                     </div>

                <!-- camera  col  2 --->

                     <div class="col-md-9">

                    <p>720p FaceTime HD camera</p>

                     </div>
                   </div>
                </div>


                <!--Video Support col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Video Support</h2>

                     </div>

                <!-- Video Support  col  2 --->

                     <div class="col-md-9">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=30";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                   </div>
                </div>





                <!--Audio col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Audio</h2>

                     </div>

                <!-- Audio col  2 --->

                     <div class="col-md-3">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=28";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>

                     <!-- Audio col  3 --->

                     <div class="col-md-3">

                        <table style="margin-left:40px;">

                               <tr>

                           <?php

                               $sql = "SELECT * FROM apple WHERE id=29";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>
                        <div class="col-md-3">

                        </div>

                    </div>
                </div>



                <!--Battery col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Battery and Power<sup>2</sup></h2>

                     </div>

                <!-- Battery col  2 --->

                     <div class="col-md-3">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=26";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>

                     <!-- Battery col  3 --->

                     <div class="col-md-3">

                        <table style="margin-left:40px;">

                               <tr>

                           <?php

                               $sql = "SELECT * FROM apple WHERE id=27";
                               $result = mysqli_query($conn, $sql);

                               if (mysqli_num_rows($result) > 0) {
                               // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {

                               ?>
                               <td><?=$row["description"]?></td>

                               <?
                                 }
                                 } else {
                                 echo "0 results";
                                 }

                               ?>

                               </tr>

                               </table>

                        </div>
                        <div class="col-md-3">

                        </div>

                      </div>
                </div>


                <!--Operating Reqs col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Operating Requirements</h2>

                     </div>

                <!-- Operating Reqs col  2 --->

                     <div class="col-md-9">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=25";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>
                   </div>
                </div>


                <!--size and weight col1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Size and Weight</h2>


                       </div>

                <!-- size and weight column 2 --->

                     <div class="col-md-3">

                     <table>

                            <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=24";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>

                            </tr>

                            </table>

                     </div>

                 <!-- size and weight column 3 --->

                 <div class="col-md-6">

                <img src="images/side.png" style="width: 80%;" alt="">

                        </div>

                    </div>
                </div>



                <!--OS col 1--->
                <div class="container" style="padding-top:150px;">
                  <div class="row">
                    <div class="col-md-3">

                      <h2>Operating System</h2>

                 </div>

                <!-- OS column 2 --->

                 <div class="col-md-9">

                         <span class="lead" style="font-size:18px; color:black;"><strong>macOS</strong> <br><br>
                    macOS is the operating system that powers everything you do on a Mac. macOS Mojave brings new features inspired by its most powerful users, but designed for everyone. So you can get more out of every click.<br><br> <a href="#">Learn more ></a></span>

                 </div>
               </div>
            </div>

                <!--accessibility col1--->
           <div class="container" style="padding-top:150px;">
             <div class="row">
               <div class="col-md-3">

                      <h2>Accessibilty</h2>

                </div>

                <!--column 2 accessibility--->

                <div class="col-md-9">

                     <span class="lead" style="font-size:18px; color:black;">Accessibility features help people with disabilities get the most out of their new MacBook Pro. With built-in support for vision, hearing, physical and motor skills, and learning and literacy, you can create and do amazing things.<br><br> <a href="#">Learn more ></a></span>
                        <br><br>   

                        <img src="images/features.png" style="width: 100%;" alt="" >

                </div>
            </div>
         </div>

                <!--Built in apps col1--->
         <div class="container" style="padding-top:150px;">
           <div class="row">
             <div class="col-md-3">
                       <h2>Built-in Apps<sup>4</sup></h2>

             </div>

                <!--column 2 built in apps--->

             <div class="col-md-9">

                     <img src="images/apps.png" style="width: 100%;" alt="" >

             </div>
           </div>
        </div>

                <!--what's in the box col1--->
         <div class="container" style="padding-top:150px;">
           <div class="row">
             <div class="col-md-3">

                      <h2>What's in the Box</h2>

               </div>

                      <!--column 2 whats in the box-->

              <div class="col-md-9">
                 <table>
                     <tr>

                            <?php

                                $sql = "SELECT * FROM apple WHERE id=23";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <td><?=$row["description"]?></td>

                                <?
                                  }
                                  } else {
                                  echo "0 results";
                                  }
                                ?>

                     </tr>
                </table>
             </div>
           </div>
        </div>

                <!--Limited warranty--->
        <div class="container" style="padding-top:150px;">
          <div class="row">
            <div class="col-md-3">

                      <h2>Limited Warranty and Service</h2>


           </div>

                <!--column 2 configure to order db-->

           <div class="col-md-9">


                      <span class="lead" style="font-size:18px; color:black;">Your MacBook Pro comes with 90 days of complimentary technical support and a one-year limited warranty. <a href="#">Purchase AppleCare+ for Mac</a> to extend your coverage to three years from your AppleCare+ purchase date and add up to two incidents of accidental damage coverage, each subject to a service fee of $99 for screen damage or external enclosure damage, or $299 for other repairable damage, plus applicable tax. <a href="#">Learn more ></a></span>

           </div>
        </div>
      </div>

                <!--column 1 configure to order-->

     <div class="container" style="padding-top:150px;">
         <div class="row">
           <div class="col-lg-12">
                  <p style="font-size:35px">Configure to order</p><p >Configure your MacBook Pro with these options,only at </span><a href="#">apple.com:</a></div>   

           </div>
                <!--column 2 configure to order db-->

           <div class="col-md-3">
                 <table>
                     <tr>

                            <?php

                            $sql = "SELECT * FROM apple WHERE id=21";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }
                            ?>

                     </tr>
                 </table>
           </div>

                <!--column 3 configure to order db-->

           <div class="col-md-3">
                 <table>
                   <tr>

                             <?php

                              $sql = "SELECT * FROM apple WHERE id=22";
                              $result = mysqli_query($conn, $sql);

                              if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result)) {

                              ?>
                              <td><?=$row["description"]?></td>

                              <?
                                }
                                } else {
                                echo "0 results";
                                }
                              ?>

                      </tr>
                 </table>
              </div>    

                       <!--column 4 list from db Configure to order-->

             <div class="col-md-3">
             </div>
          </div>
       </div>


        <!--column 1 Macbook Environment-->

        <div class="container" style="padding-top:150px;">
          <div class="row">
             <div class="col-md-6">

                      <span class="lead" style="font-size:36px; color:teal;">MacBook Pro and the Environment</span>
                            <br>
                            <div><p>Apple takes a complete product life cycle approach to<br> determining our environmental impact.<a href="#"> Learn more ></a>.</p></div>         
                          <table>

                            <tr>

                           <?php

                            $sql = "SELECT * FROM apple WHERE id=19";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }

                            ?>
                 </tr>
              </table>
        </div>

                          <!--column 2 list from db Mac Environment-->

        <div class="col-md-6">

                          <img src="images/appleicon2.png" alt="screen" width=9% align="right" select="margin-right:20px;"></i><br><br>

                <table>
                    <tr>

                            <?php

                            $sql = "SELECT * FROM apple WHERE id=20";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }
                            ?>

                    </tr>
                  </table>
                            <br>
                            <div><a href="#">See how it works > ></a>.</div>   

            </div>
          </div>
        </div>

                <!--column 1 accessories-->

       <div class="container" style="padding-top:150px;">
         <div class="row">
           <div class="col-md-4" style="padding-bottom:50px;">

                      <span class="lead" style="font-size:28px; color:black;">Accessories</span>
                      <br>
          </div>

                  <!--column 2 list from db-->

          <div class="col-md-4">
                <table>
                   <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=17";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }
                            ?>
                  </tr>
               </table>
          </div>

                          <!--column 3 list from db-->

          <div class="col-md-4">
               <table>
                  <tr>

                            <?php

                            $sql = "SELECT * FROM apple WHERE id=18";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <td><?=$row["description"]?></td>

                            <?
                              }
                              } else {
                              echo "0 results";
                              }
                            ?>
  
                </tr>
             </table>
           </div>
         </div>
      </div>

        <!--/container for text apple giveback -->  
       <div class="container"style="padding-top:200px;" >
         <div class="row">
           <div class="col-md-12 text-center"> 

                  <span class="lead" style="font-size:30px; color:#666666;"> Apple GiveBack</span><br>
                  <span class="lead" style="font-size:50px; color:black;"><strong> Get up to $1000 for your current computer.<sup>*</sup></strong></span><br>
                  <span class="lead" style="font-size:15px; color:#666666;">Just trade in your eligible computer with Apple GiveBack. It’s good for you and the planet.</span><br>
                  <br>
                  <a href="#" style="font-size:20px;">See how it works ></a>
           </div>
         </div>
       </div>
       <div class="container" style="padding-top:150px;" >
          <div class="row">
             <div class="col-md-12 text-center"><br>
                    <span class="lead" style="font-size:55px;"><strong>Meet the<br>MacBook Pro lineup.</strong></span>
            </div> <!--/col-->
          </div> <!--/row-->
        </div> <!--/container-->



                <!--column 1-->

      <div class="container  text-center">
        <div class="row" style="padding-top:100px;">
          <div class="col-md-4" style="padding-bottom:50px;">

                      <img src="images/13inchfront.png" style="width:70%;" alt="">
                      <br><br>
                      <br><br>
                      <h4 class="lead" style="font-size:25px; text-align:left;margin-left:45px;">13-Inch</h4>  
                      <p class="lead" style="font-size:15px; text-align:left;margin-left:45px;"> <a href="#">Shop now ></a> </p>

          </div>
                          <!--column 2-->

         <div class="col-md-4">


                          <img src="images/13inchfronttb.png" style="width: 70%;" alt="">
                          <br><br>
                          <br><br>
                          <h4 class="lead" style="font-size:25px; text-align:left;margin-left:45px;">13-Inch with Touch Bar</h4>  
                      <p class="lead" style="font-size:15px; text-align:left;margin-left:45px;"> <a href="#">Shop now ></a> </p>

                          <br><br>
          </div>

                          <!--column 3-->

          <div class="col-md-4">
                         <img src="images/15inchfronttb.png" style="width: 80%;" alt="" style="padding-bottom:100px">
                          <br><br>
                          <br>
                          <h4 class="lead" style="font-size:25px; text-align:left;margin-left:45px;">15-Inch with Touch Bar</h4>  
                      <p class="lead" style="font-size:15px; text-align:left;margin-left:45px;"> <a href="#">Shop now ></a> </p>

                          <br><br>

          </div>
        </div>

            <!--/container for text -->  
        <div class="container text-center" style="padding-bottom:50px;" >
          <div class="row">
            <div class="col-md-12">
                        <a href="#" style="font-size:23px;">Compare all Mac models ></a>
            </div> <!--/col-->
          </div> <!--/row-->
        </div> <!--/container-->
                    <br><br>
                <br><br>

                <!---Contain for graphic image--->
                <br><br>
        <div class="container  text-center" style="background-color:#F2F2F2">
          <div class="row">
            <div class="col-md-12">
                    <br>
                            <img src="images/specs2.png" alt="screen" width=100%></i><br><br>

                    <br><br>
             </div>
          </div>
        </div>

        <!---Footer here--->
        <!--footer first sec--->
        <div class="container  text-left" style="background-color:#EAEDED;font-size:12px;">
          <div class="row">
            <div class="col-md-12">
                <table>
                   <tr>

                            <?php
                            $sql = "SELECT * FROM apple WHERE id=15";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <td><?=$row["description"]?></td>
                                <?
                              }
                            } else {
                              echo "0 results";
                            }
                             ?>
                     </tr>
                </table>
                <hr>
           </div>
        </div>
        <div class="style="background-color:#EAEDED;font-size:12px;">
          <div class="row">
            <div class="col-md-12">
                <table>
                   <tr>

                        <?php

                            $sql = "SELECT * FROM apple WHERE id=16";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <td><?=$row["description"]?></td>
                                <?
                              }
                            } else {
                              echo "0 results";
                            }
                         ?>
                  </tr>
                </table>
            <hr>
          </div>
            </div>
              <!--footer second section-->
            <div style="background-color:#EAEDED; font-size=10px;"> <h6><img src="images/appleicon.png" alt="" width=5%><span style="color: lightgray"> ></span> Mac<span style="color: lightgray"> ></span> Macbook Pro<span style="color: lightgray"> ></span> <span>Buy MacBook Pro</h6></div>

        <!--Footer third section col 1-->

            <div class="row">
               <div class="col-md-2" style="padding-left:35px;">
                   <table>
                      <tr>

                            <?php

                                $sql = "SELECT * FROM apple WHERE id=6";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                // output data of each row

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td><?=$row["description"]?></td>
                                    <?
                                  }
                                } else {
                                  echo "0 results";
                                }
                             ?>
                    </tr>
                 </table>
              </div>
                   <!--Footer third section col 2-->
             <div class="col-md-2" style="padding-left:40px;" >
               <table>
                  <tr>

                            <?php

                                $sql = "SELECT * FROM apple WHERE id=7";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                // output data of each row

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td><?=$row["description"]?></td>
                                    <?
                                  }
                                } else {
                                  echo "0 results";
                                }
                             ?>
                    </tr>
                </table>
          </div>
                      <!--Footer third section col 3-->
          <div class="col-md-2" style="padding-left:40px;">
               <table>
                   <tr>
                            <?php

                                $sql = "SELECT * FROM apple WHERE id=8";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                // output data of each row

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td><?=$row["description"]?></td>
                                    <?
                                  }
                                } else {
                                  echo "0 results";
                                }
                             ?>
                   </tr>
               </table>
           </div>
  

                   <!--Footer third section col 4-->

           <div class="col-md-2" style="padding-left:40px;">
                 <table>
                    <tr>

                            <?php

                                $sql = "SELECT * FROM apple WHERE id=9";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                // output data of each row

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td><?=$row["description"]?></td>
                                    <?
                                  }
                                } else {
                                  echo "0 results";
                                }

                             ?>
                    </tr>
               </table>
           </div>
              <!--Footer third section col 5-->

           <div class="col-md-2" style="padding-left:50px;">
               <table>
                  <tr>

                            <?php

                                $sql = "SELECT * FROM apple WHERE id=10";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                // output data of each row

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td><?=$row["description"]?></td>
                                    <?
                                  }
                                } else {
                                  echo "0 results";
                                }

                                mysqli_close($conn);
                             ?>
                 </tr>
              </table>
           </div>
                       <!--Footer third section col 6-->

           <div class="col-md-2">
               <table>
                   <tr>

                   </tr>
               </table>
          </div>
        </div>
                    <br><br>   

                        <p style="margin-left:18px; color:gray">More ways to shop: Visit an <a href="#">Apple Store<a>, call 1‑800‑MY‑APPLE, or <a href="#">find a reseller</a>.</p>
                            <!--final footer section-->
        <div class="container">
          <div class="row">
            <div class="col-md-10">
            <div style="background-color:#EAEDED; color:gray; font-size:12px;"> <p>Copyright © 2019 Apple Inc. All rights reserved.<span style="color: lightgray"> ></span> Privacy Policy |<span style="color: lightgray"> ></span> Terms of Use |<span style="color: lightgray"> ></span> <span>Sales and Refunds |<span style="color: lightgray"> ></span> <span>Legal |<span style="color: lightgray"> ></span> <span>Site Map <span style="color: lightgray"> </span></p></div>
            </div>

                <!--final footre col  2 --->

            <div class="col-md-2">

                          <img src="images/us.png" style="width: 100%;" alt="" > 
            </div>
          </div>
        </div>

               <br>
</body>

</html>
