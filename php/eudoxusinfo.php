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
      <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
          <!-- if user is not logged in -->
          <?php if(!isset($_SESSION['mail'])): ?>
          <div class="col-3">
              <div class="btn-group ls" role="group" aria-label="Basic example">
                  <a class="btn btn-info" href="./login.php" role="button"> Σύνδεση </a>
                  <a class="btn btn-outline-info" href="./signup.php" role="button">Εγγραφή</a>
              </div>
          </div>
          <!-- else -->
          <?php else: ?>
          <div class="col" style="margin-left:6%;">
                  <div class="dropdown">
                    <a data-toggle="dropdown">
                      <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496; padding-left:32%;">
                        <i class="fas fa-user" style="margin-top:11%;"></i>
                      </span>
                    </a>
                    <ul class="dropdown-menu" style="margin: auto;padding-top:2%;padding-left:2%;text-align: center;">
                      <li><a href="./profile.php"> Προφίλ</a></li>
                      <li><a href="./logout.php"> Αποσύνδεση</a></li>
                  </ul>
                </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- 2nd level (navbar) -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
              <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        Φοιτητές
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                          <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        Εκδότες
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="./
                          "> Προσθήκη Συγγράμματος </a>
                          <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        Σημεία Διανομής
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="./underconstruction.php"> Προσθήκη Σημείου Διανομής </a>
                          <a class="dropdown-item" href="./underconstruction.php"> Διανομή Σε Φοιτητές  </a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        Διαθέτες Σημειώσεων
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="./underconstruction.php"> Ανέβασμα σημειώσεων </a>
                          <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        Υπηρεσίες Ιδρυμάτων
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="./underconstruction.php"> Τροποποίηση Προγράμματος Σπουδών </a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./eudoxusinfo.php" style="position:absolute;right:12%;"> Τι είναι ο Εύδοξος </a>
                  </li>
                  <li class="nav-item" style="position:absolute;right:2%;">
                      <a class="nav-link" href="./underconstruction.php"> Επικοινωνία </a>
                  </li>
              </ul>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </nav>
      <!-- 3rd level (eudoxus info) -->
      <div class="row " style="margin-top: 5%;">
        <div class="col">
          <h3 class="hinfo" style="margin-left:4%;color:#404244;"> Τι είναι ο εύδοξος; </h3>
        </div>
      </div>
      <div class="row " style="margin-top: 1%;">
        <div class="col">
          <p class="info" style="margin-left:8%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus, sem vitae rutrum scelerisque, nisl massa suscipit orci, a efficitur elit magna sit amet sem. Aliquam varius viverra nibh sit amet condimentum.
            Suspendisse ut suscipit mi, ut blandit arcu. Nunc nulla mi, sollicitudin vel tempor eu, viverra eget augue. Fusce id neque pellentesque augue ultrices commodo ac sed eros. Pellentesque venenatis pharetra tortor, at lobortis diam lacinia eu.
            Nulla ullamcorper eget mauris a faucibus. Donec dapibus eleifend pharetra. Nunc tellus nibh, commodo non lorem nec, ultrices eleifend mauris.
            <br>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col">
          <img src="https://images.pexels.com/photos/76752/paper-note-ipad-76752.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" style="width:60%;margin-left:15%;border-radius: 9%;"> </img>
        </div>
      </div>
      <!-- 4th level (students info) -->
      <div class="row justify-content-end" style="margin-top: 5%;margin-right: 16%;">
          <h3 class="hinfo" id="section1" style="margin-left:3%;color:#404244;"> Τι προσφέρει ο Εύδοξος σε φοιτητές; </h3>
      </div>
      <div class="row " style="margin-top: 1%;">
        <div class="col">
          <img src="https://images.pexels.com/photos/1251861/pexels-photo-1251861.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" style="width:60%;margin-left:15%;border-radius: 10%;"> </img>
        </div>
        <div class="col">
          <p class="info" style="margin-right:8%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque laoreet suspendisse interdum consectetur. Fermentum et sollicitudin ac orci phasellus. Arcu non sodales neque sodales ut. Sed faucibus turpis in eu. Etiam dignissim diam quis enim lobortis scelerisque fermentum. Facilisi cras fermentum odio eu. Sit amet luctus venenatis lectus. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus. Etiam erat velit scelerisque in dictum non consectetur a. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Molestie at elementum eu facilisis. Leo vel orci porta non pulvinar neque laoreet suspendisse interdum.
            Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum
          </p>
        </div>
      </div>
      <!-- 5th level (bookmanagers,giveaway points info) -->
      <div class="row" style="margin-top: 5%;">
        <div class="col text-center">
          <h3 class="hinfo" id="section2">Σε Εκδότες </h3>
        </div>
        <div class="col text-center">
          <h3 class="hinfo" id="section2">Σε Σημεία Διανομής </h3>
        </div>
      </div>
      <div class="row" style="margin-top: 1%;">
        <div class="col text-center">
          <p class="info" style="margin-left:10%;width:80%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque laoreet suspendisse interdum consectetur. Fermentum et sollicitudin ac orci phasellus. Arcu non sodales neque sodales ut. Sed faucibus turpis in eu. Etiam dignissim diam quis enim lobortis scelerisque fermentum.
          </p>
        </div>
        <div class="col text-center">
          <p class="info" style="margin-left:8%;width:80%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque laoreet suspendisse interdum consectetur. Fermentum et sollicitudin ac orci phasellus. Arcu non sodales neque sodales ut. Sed faucibus turpis in eu. Etiam dignissim diam quis enim lobortis scelerisque fermentum.
          </p>
        </div>
      </div>
      <!-- 6th level (notes,universities info) -->
      <div class="row" style="margin-top: 5%;">
        <div class="col text-center">
          <h3 class="hinfo" id="section3">Σε Διαθέτες Σημειώσεων </h3>
        </div>
        <div class="col text-center">
          <h3 class="hinfo" id="section3"> Υπηρεσίες Ιδρυμάτων </h3>
        </div>
      </div>
      <div class="row" style="margin-top: 1%;">
        <div class="col text-center">
          <p class="info" style="margin-left:5%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque laoreet suspendisse interdum consectetur. Fermentum et sollicitudin ac orci phasellus. Arcu non sodales neque sodales ut. Sed faucibus turpis in eu. Etiam dignissim diam quis enim lobortis scelerisque fermentum. Facilisi cras fermentum odio eu.
          </p>
        </div>
        <div class="col text-center">
          <p class="info" style="margin-right:8%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque laoreet suspendisse interdum consectetur. Fermentum et sollicitudin ac orci phasellus.
          </p>
        </div>
      </div>
      <!-- back to top -->
      <a class="row row-horizon justify-content-center" href="#top" style="padding-top:6%;">Back to top</a>
      <!-- 7th level (footer) -->
      <div class="row row-horizon justify-content-center" style="margin-top: 5%;padding-bottom: 5%;background-color:#f8f9fa;">
        <div class="col" style="padding-top:4%; padding-left:4%;">
          <img src="../img/ee_1.png" class="rounded">
        </div>
        <div class="col" style="padding-top:4%; padding-left:4%;">
          <img src="../img/espa_1.png" class="rounded">
        </div>
        <div class="col" style="padding-top:4%; padding-left:4%;">
          <img src="../img/grnet_logo_1.png" class="rounded">
        </div>
        <div class="col" style="padding-top:4%; padding-left:4%;">
          <img src="../img/minedu2.png" class="rounded">
        </div>
        <div class="col" style="padding-top:4%; padding-left:4%;">
          <img src="../img/psifiaki_ellada_1.png" class="rounded">
        </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
