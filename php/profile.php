<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Eudoxus </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
</head>

<body style="font-family: 'Alegreya Sans', sans-serif;">
    <div class="container-fluid">
      <!-- 1rst level (logo,login,signup) -->
      <div class="row" style="margin-bottom:1%;">
          <div class="col-9" style="padding-top:1%; padding-left:1%;">
            <a  href="./index.php">
              <img src="../img/logo.jpg" class="rounded">
            </a>
          </div>
          <div class="col" style="margin-left:6%;">
            <div class="dropdown">
              <a data-toggle="dropdown">
                <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496;padding-left:32%;">
                  <i class="fas fa-user" style="margin-top:11%;"></i>
                </span>
              </a>
              <ul class="dropdown-menu" style="margin: auto;padding-top:2%;padding-left:2%;text-align: center;">
                <li><a href="./profile.php"> Προφίλ</a></li>
                <li><a href="./logout.php"> Αποσύνδεση</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <h3 style="color:#2AA2DE;"> Προφίλ Χρήστη </h3>
      </div>
      <!-- 2nd level -->
      <div class="row justify-content-center" style="margin-top:2%;">
        <div class="col-5 profilediv">
          <div class="row">
            <div class="col">
              <p style="padding-top:3%;"> Όνομα </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> Ευάγγελος </p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p > Επώνυμο </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> Γκαραγκάνης </p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p > Ιδιότητα </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> Φοιτητής </p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p > Ηλεκτρονική Διεύθυνση </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> developpmentt@gmail.com </p>
            </div>
          </div>
        </div>
        <div class="col-5 profilediv" style="margin-left:5%;">
          <div class="row">
            <div class="col-9">
              <p style="padding-top:3%;"> Αριθμός Παρηληφθέντων Συγγραμμάτων </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;">31 </p>
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <p > Αριθμός Διαθέσιμων </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> 8 </p>
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <p> Πλήθος Πιστωτικών Μονάδων </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> 27.5 </p>
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <p > Αριθμός Ανταλλαγών </p>
            </div>
            <div class="col">
              <p style="padding-top:3%;font-weight:bold;"> 3 </p>
            </div>
          </div>
        </div>
      </div>
       <!-- 3rd level -->
      <div class="row justify-content-center" style="margin-top: 5%;margin-bottom:5%;">
         <div class="col-5 profilediv" style="overflow:auto;">
             <div class="row justify-content-center" style="font-size:23px;color:#008FD7;margin:2%;">
               <a href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
             </div>
             <div class="row justify-content-center" style="font-size:23px;color:#008FD7;margin:2%;">
               <a href="index.php"> Ανταλλαγή Συγγραμάτων </a>
             </div>
         </div>
         <div class="col-5 profilediv" style="margin-left:5%">
             <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;">
               <a href="./index.php"> Δήλωση Συγγραμμάτων 26/11 </a>
             </div>
             <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;">
               <a href="./index.php"> Ανταλλαγή Συγγραμάτος 3/11 </a>
             </div>
             <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;">
               <a href="./index.php"> Ανταλλαγή Συγγραμάτος 3/11 </a>
             </div>
             <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;">
               <a href="./index.php"> Ανταλλαγή Συγγραμάτος 3/11 </a>
             </div>
         </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>