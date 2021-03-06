<?php
  session_start();
?>
<!-- Profile for Students -->
<?php if($_SESSION['typeofuser'] == '1'): ?>
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
                              <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Εκδότες
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>

                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Σημεία Διανομής
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Προσθήκη Σημείου Διανομής </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Διανομή Σε Φοιτητές  </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Διαθέτες Σημειώσεων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Ανέβασμα σημειώσεων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Υπηρεσίες Ιδρυμάτων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Τροποποίηση Προγράμματος Σπουδών </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
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
          <div class="row justify-content-center">
            <h3 style="color:#2AA2DE; margin-top:3%"> Προφίλ Χρήστη </h3>
          </div>
          <!-- 2nd level -->
          <div class="row" style="color: grey;margin-top:1.6%;">
            <div class="col-5">
              <h6 style="margin-left: 12.3%;"> Βασικά Στοιχεία</h6> 
            </div>
            <div class="col-5">
              <h6 style="margin-left: 25.3%;"> Επιπρόσθετα Στοιχεία </h6> 
            </div>
          </div>
          <div class="row justify-content-center" style="margin-top:0.4%;">
            <div class="col-5 profilediv">
              <?php
                $id=$_SESSION['userID'];
                require_once 'db_connect.php';
                $conn=new mysqli("$hn","$un","$pw","$db");
                // Check connection
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    die();
                }
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql = "SELECT Users.email, Users.name, Users.surname
                        FROM Users
                        where Users.idUser =" . $id ;
                $res_data = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($res_data);
                $email = $row[0];
                $name = $row[1];
                $surname = $row[2];
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql1 = "SELECT Students.universityId, Students.departmentId, Students.numOfReceivedBooks, Students.booksPoints
                        FROM Students
                        where Students.idStudent =" . $id ;

                $res_data1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_array($res_data1);
                $uniId = $row1['universityId'];
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql2 = "SELECT Universities.name
                        FROM Universities
                        where Universities.idUniversity =" . $uniId ;
                $res_data2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_array($res_data2);
                $uniName = $row2['name'];

                $depId = $row1['departmentId'];
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql3 = "SELECT Departments.name
                        FROM Departments
                        where Departments.idDepartment =" . $depId ;
                $res_data3 = mysqli_query($conn,$sql3);
                $row3 = mysqli_fetch_array($res_data3);
                $depName = $row3['name'];

                $numOfRecBooks = $row1['numOfReceivedBooks'];
                $bookPoints = $row1['booksPoints'];

                // Look for current declarations
                $sql = "SELECT COUNT(*) FROM StudentHasBook WHERE studentId=" .$id ." and statementDate IS NULL;";
                $res_data = mysqli_query($conn,$sql);
                $numOfCurrentDeclarations = mysqli_fetch_array($res_data)[0];

                //get declarations
                $sql = "SELECT bookId, statementDate FROM StudentHasBook WHERE studentId=" .$id;
                $res_data = mysqli_query($conn,$sql);
                $declarations = array();
                while ($row = mysqli_fetch_array($res_data)){
                  $declarations[] = $row;
                }
                $declarations = array_reverse($declarations);
                mysqli_close($conn);
              ?>
              <div class="row">
                <div class="col">
                  <p style="padding-top:3%;"> Όνομα </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $name ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Επώνυμο </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $surname ?> </p>
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
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $email ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Πανεπιστήμιο </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $uniName ?> </p>
                </div>
              </div>
            <div class="row">
              <div class="col">
                <p > Τμήμα </p>
              </div>
              <div class="col">
                <p style="padding-top:3%;font-weight:bold;"> <?php echo $depName ?> </p>
              </div>
            </div>
          </div>
          <div class="col-5 profilediv" style="margin-left:5%;">
              <div class="row">
                <div class="col-9">
                  <p style="padding-top:3%;"> Αριθμός Παρηληφθέντων Συγγραμμάτων </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"><?php echo $numOfRecBooks ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col-9">
                  <p > Αριθμός Διαθέσιμων </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> 8</p>
                </div>
              </div>
              <div class="row">
                <div class="col-9">
                  <p> Πλήθος Πιστωτικών Μονάδων </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"><?php echo $bookPoints ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-9">
                  <p > Αριθμός Ανταλλαγών </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> 3</p>
                </div>
              </div>
            </div>
          </div>
          <!-- 3rd level -->
          <div class="row" style="color: grey;margin-top:3.6%;">
            <div class="col-5">
              <h6 style="margin-left: 12.3%;"> Δυνατές Ενέργειες </h6> 
            </div>
            <div class="col-5">
              <h6 style="margin-left: 25.3%;"> Ιστορικό Κινήσεων </h6> 
            </div>
          </div>
          <div class="row justify-content-center" style="margin-bottom:5%;">
             <div class="col-5 profilediv" style="overflow:auto;">
                 <div class="row justify-content-center" style="font-size:23px;color:#008FD7;margin:2%;">
                      <?php
                        if($numOfCurrentDeclarations == 0) { ?>
                          <button type="button" class="btn btn-info" onclick="window.location='./bookseason1.php';">Δήλωση Συγγραμμάτων</button>
                        <?php } else { ?>
                          <button type="button" class="btn btn-info" disabled="disabled">Τροποποίηση Δήλωσης</button>
                      <?php }
                      ?>
                 </div>
                 <div class="row justify-content-center" style="font-size:23px;color:#008FD7;margin:2%;">
                   <button type="button" class="btn btn-info" onclick="window.location='./underconstruction.php';">Ανταλλαγή Συγγραμάτων</button>
                 </div>
             </div>
             <div class="col-5 profilediv" style="margin-left:5%">
                <form action="showDeclaration.php" method="post">
                   <?php
                   $foundCurrent = 0;
                   foreach($declarations as $dec) {?>
                      <?php if($dec['statementDate'] != NULL) { ?>
                        <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;">
                          <button type="submit" class="btn btn-info" name="date" value="<?php echo $dec['statementDate']; ?>"> Δήλωση Συγγραμμάτων <?php echo $dec['statementDate']; ?> </button>
                        </div>
                      <?php } elseif($foundCurrent == 0){ ?>
                        <div class="row justify-content-center" style="font-size:18px;color:#008FD7;margin:2%;"> 
                          <button type="submit" class="btn btn-danger" name="date" value="<?php echo $dec['statementDate']; ?>"> Επισκόπηση Τρέχουσας Δήλωσης</button>
                        </div>
                   <?php $foundCurrent = 1; } }
                   ?>
                </form>
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
<!-- Profile for Publishers -->
<?php elseif ($_SESSION['typeofuser'] == '2'): ?>
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
                              <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Εκδότες
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>

                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Σημεία Διανομής
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Προσθήκη Σημείου Διανομής </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Διανομή Σε Φοιτητές  </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Διαθέτες Σημειώσεων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Ανέβασμα σημειώσεων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Υπηρεσίες Ιδρυμάτων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Τροποποίηση Προγράμματος Σπουδών </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
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
          <div class="row justify-content-center">
            <h3 style="color:#2AA2DE; margin-top:3%"> Προφίλ Χρήστη </h3>
          </div>
          <!-- 2nd level -->
          <div class="row" style="color: grey;margin-top:1.6%;">
            <div class="col-5">
              <h6 style="margin-left: 12.3%;"> Βασικά Στοιχεία</h6> 
            </div>
            <div class="col-5">
              <h6 style="margin-left: 25.3%;"> Δυνατές Ενέργειες </h6> 
            </div>
          </div>
          <div class="row justify-content-center" style="margin-top:0.5%;">
            <div class="col-5 profilediv">
              <?php
                $id=$_SESSION['userID'];
                require_once 'db_connect.php';
                $conn=new mysqli("$hn","$un","$pw","$db");
                // Check connection
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    die();
                }
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql = "SELECT Users.email, Users.name, Users.surname
                        FROM Users
                        where Users.idUser =" . $id ;
                $res_data = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($res_data);
                $email = $row[0];
                $name = $row[1];
                $surname = $row[2];
                mysqli_query($conn, "SET NAMES 'utf8'");
                $sql1 = "SELECT Publishers.brandName, Publishers.telephone, Publishers.website
                        FROM Publishers
                        where Publishers.idPublisher =" . $id ;
                $res_data1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_array($res_data1);
                $brandname= $row1['brandName'];
                $telephone= $row1['telephone'];
                $website= $row1['website'];
                mysqli_close($conn);
              ?>
              <div class="row">
                <div class="col">
                  <p style="padding-top:3%;"> Όνομα </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $name ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Επώνυμο </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $surname ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Ιδιότητα </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> Εκδότης </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Ηλεκτρονική Διεύθυνση </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $email ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p >  Επωνυμία </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $brandname ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Τήλεφωνο </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $telephone ?> </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p > Ιστοσελίδα </p>
                </div>
                <div class="col">
                  <p style="padding-top:3%;font-weight:bold;"> <?php echo $website ?> </p>
                </div>
              </div>
            </div>
            <div class="col-5 profilediv" style="overflow:auto;margin-left:5%">
                <div class="row justify-content-center" style="font-size:23px;color:#008FD7;margin:2%;">
                  <a href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                </div>
            </div>
          </div>
          <div class="row" style="margin-top:0.5%;">
            <div class="col">
            <a href="editprofile.php" style="padding-left:5.8%;"> Επεξεργασία Στοιχείων </a>
            </div>
          </div>
          <!-- 3rd level -->
          <div class="row" style="color: grey;margin-top:2.6%;">
            <div class="col-5">
              <h6 style="margin-left: 16.3%;"> Συγγράμματα </h6> 
            </div>
          </div>
          <?php 
            if (isset($_GET['pageno'])) {
               $pageno = $_GET['pageno'];
           } else {
               $pageno = 1;
           }
           $no_of_records_per_page = 3;
           $offset = ($pageno-1) * $no_of_records_per_page;

            require_once 'db_connect.php';
             $conn=new mysqli("$hn","$un","$pw","$db");
             // Check connection
             if (mysqli_connect_errno()){
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
                 die();
             }

             $userId = $_SESSION['userID'];
             mysqli_query($conn, "SET NAMES 'utf8'");
             $total_pages_sql = "SELECT COUNT(*) FROM Books WHERE Books.PublisherId = $userId";
             $result = mysqli_query($conn,$total_pages_sql);
             $total_rows = mysqli_fetch_array($result)[0];
             $total_pages = ceil($total_rows / $no_of_records_per_page);
          ?>
          <?php if ($total_rows > "0"): ?>
           <div class="row justify-content-center" style="width:80;">
             <!--  Get books from backend -->
             <div class="col-11">
                <div class="card-group" style="margin-left:2%;margin-right:2%;">
                 <?php
                     require_once 'db_connect.php';
                     $conn=new mysqli("$hn","$un","$pw","$db");
                     // Check connection
                     if (mysqli_connect_errno()){
                         echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         die();
                     }
                     $userId = $_SESSION['userID'];
                      mysqli_query($conn, "SET NAMES 'utf8'");
                     $sql = "SELECT Books.idBook, Books.title, Books.author, Books.category, Books.coverPage, Books.subtitle, Books.firstYearPublished, Books.dimensions FROM Books WHERE Books.PublisherId = $userId LIMIT $offset, $no_of_records_per_page";
                     $res_data = mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($res_data)){
                        $bookId = $row["idBook"];
                       echo
                         '<div class="card">
                           <div class="card-body">
                              <h5 class="card-title">' . $row["title"] . '</h5>
                               <h6 class="card-subtitle mb-2 text-muted">'. $row["category"] .'</h6>
                               <h6 class="card-subtitle mb-2 text-muted">'. $row["author"] .'</h6>
                               <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#bookModal'.$bookId.'" >Περισσότερα</button>
                               <!-- Modal -->
                              <div class="modal fade" id="bookModal'.$bookId.'" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">' . $row["title"] . '</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col">
                                          <img src="' . $row["coverPage"] . '" class="img-fluid" alt="Image not found" height="295" width="209">
                                        </div>

                                        <div class="col">
                                          <div class="row">
                                            <p style="color:grey; font-style: italic;" > ' . $row["subtitle"] . '</p>
                                          </div>
                                          <div class="row" style="margin-top:10%;">
                                          <div class="col">
                                            <b>Συγγραφέας:</b>
                                          </div>
                                          <div class="col">
                                          ' .  $row["author"] . '
                                          </div>
                                        </div>
                                          <div class="row" style="margin-top:5%;">
                                            <div class="col">
                                              <b>Είδος:</b>
                                            </div>
                                            <div class="col">
                                            ' .  $row["category"] . '
                                            </div>
                                          </div>

                                        <div class="row" style="margin-top:5%;">
                                          <div class="col">
                                            <b>Έτος έκδοσης:</b>
                                          </div>
                                          <div class="col">
                                          ' .  $row["firstYearPublished"] . '
                                          </div>
                                        </div>
                                        <div class="row" style="margin-top:5%;">
                                          <div class="col">
                                            <b>Διαστάσεις:</b>
                                          </div>
                                          <div class="col">
                                          ' .  $row["dimensions"] . '
                                          </div>
                                        </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                               <form method ="post" action="./deleteBook.php" style="margin-top:0.5%;">
                                  <input class="form-control" type="text" id="bookId" name="bookId" value='. $bookId . ' hidden/>
                                  <button type="submit" class="btn btn-danger btn-sm">Διαγραφή</button>
                                </form>
                           </div>
                          </div> ';

                       }
                     mysqli_close($conn);
                 ?>
             </div>
            </div>
           </div>
           <div class="row row-horizon justify-content-center" style="margin-bottom: 3%;">
               <nav aria-label="Page navigation example">
                   <ul class="pagination">
                       <li><a class="page-link" href="?pageno=1">First</a></li>
                       <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                           <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                       </li>
                       <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                           <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                       </li>
                       <li><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                   </ul>

               </nav>
           </div>

        <?php else: ?>
        <div class="row justify-content-center" style="width:80;">
          <div class="col-11">
            <div class="card-group" style="margin-left:2%;margin-right:2%;"> 
              <div class="card">
                <div class="card-body" style="color:#4f4f4f;">
                  <h5 class="card-title">Δεν έχετε προσθέσει ακόμα συγγράμματα, προσθέστε <a href="./bookinsertion.php"> εδώ!</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div style="margin-bottom:4%;">
        </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>
<?php endif; ?>
