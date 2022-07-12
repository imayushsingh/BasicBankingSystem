<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>APEX BANK</title>
  </head>

  <body >
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fluid">
            <div class="row intro py-1" style="background-color :#AE275F">
              
              <div class="col-sm-12 col-md ">
              <div class="heading text-center my-5">
              <h1 style="color:#A7F1FB;"><marquee>APEX BANK </marquee></h1>
              
              <h2 style="color:#FFFFFF;"><em><marquee>Trust your money with us....</marquee></em></h2>
              <marquee direction="right" 
        behavior="alternate" 
        style="border:YELLOW 2px SOLID">
        </marquee>
              </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/mod.png" class="img-fluid pt-2" >
              </div>
            </div>


      <!-- Activity section -->
            <div class="row activity text-center">
                  
                  <div class="col-md act">
                    <img src="img/mc.png"  width ="250" class="img-fluid">
                    <br>
                    <a href="removeuser.php"><button style="background-color : #AE275F;" style="border-radius:0%">Show Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" width ="250" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #AE275F;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/his.png"  width ="250" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #AE275F;">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background-color :#FFFFFF">
        <p>&copy 2022 Made by <b>Ayush Singh</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>