<?php
  session_start();
?>
<!-- User should be authorized to submit a book -->
<?php if(!isset($_SESSION['mail'])): ?>
  <? header('Location: '."./login.php"); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/index.css"/>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
        <title>Eudoxus</title>
    </head>
    <body style="font-family: 'Alegreya Sans', sans-serif;">
      <!-- 1rst level (logo,login,signup) -->
        <div class="row" style="margin-bottom:1%;">
            <div class="col-9" style="padding-top:1%; padding-left:1%;">
              <a  href="./index.php">
                <img src="../img/logo.jpg" class="rounded">
              </a>
            </div>
            <?php if(!isset($_SESSION['mail'])): ?>
            <div class="col-3">
                <div class="btn-group ls" role="group" aria-label="Basic example">
                    <a class="btn btn-info" href="./login.php" role="button"> Σύνδεση </a>
                    <a class="btn btn-outline-info" href="./signup.php" role="button">Εγγραφή</a>
                </div>
            </div>
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
        <h2 align="center" style="color:#2AA2DE;margin-bottom:2%;margin-top:3%;"> Καταχώρηση Συγγράμματος </h2>
        <!-- if user tried to submit a book, display a status message -->
        <?php if(isset($_SESSION['bookinsertion'])): ?>
          <?php if(($_SESSION['bookinsertion']) == true ): ?>
            <!--<div class="row align-items-center justify-content-center alert alert-success alert-dismissable" style="width:30%;margin-top:2%;margin-left:35%;">
              Επιτυχής προσθήκη συγγράμματος !
              <?php unset($_SESSION['bookinsertion']); ?>
            </div>-->
          <?php else: ?>
            <div class="row alert alert-danger alert-dismissable justify-content-center" style="width:30%;margin-top:2%;margin-left:35%;">
              Η προσθήκη συγγράμματος προσωρινά απέτυχε!
              <?php unset($_SESSION['bookinsertion']); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <!-- The form -->
        <form action="./postbook.php" method="post">
          <!-- basic fields -->
          <div id="upperPart" class="container">
              <div class="row" style="margin-top:2%;">
                  <div class="col-8">
                      <label class="col-8 control-label"><h6>Στοιχεία Συγγράμματος</h6></label>
                        <div style="border: 1px solid #e5e5e5; height: 500px; width: 700px; padding: 10px;">
                            <div class="row text-center" style="margin-top:8%;">
                                <div class="col-4"><label for="title">Τίτλος</label></div>
                                <div class="col-6"><input required="required" type="text" name="title" class="form-control" id="title"></div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="authors">Συγγραφείς</label></div>
                                <div class="col-6"><input required="required" type="text" name="authors"  class="form-control" id="authors"></div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="subtitle">Υπότιτλος</label></div>
                                <div class="col-6"><input required="required" type="text" name="subtitle" class="form-control" id="subtitle"></div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="category">Είδος</label></div>
                                <div class="col-6">
                                    <select class="form-control custom-select" style="width:325px" name="category" id="category">
                                        <option value="Φυσική">Φυσική</option>
                                        <option value="Φιλολογία">Φιλολογία</option>
                                        <option value="Ιστορία">Ιστορία</option>
                                        <option value="Πληροφορική">Πληροφορική</option>
                                        <option value="Λογοτεχνία">Λογοτεχνία</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="dimensions">Διαστάσεις</label></div>
                                <div class="col-3"><input required="required" name="size1" type="text" class="form-control" id="dimensions" placeholder="Ύψος σε εκ."></div>
                                <div class="col-3"><input required="required" name="size2" type="text" class="form-control" id="dimensions" placeholder="Πλάτος σε εκ."></div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="firstPublishingYear">Έτος 1ης Έκδοσης</label></div>
                                <div class="col-6"><input name="firstpublishingyear" type="text" class="form-control" id="firstPublishingYear"></div>
                            </div>
                            <div class="row text-center" style="margin-top:2%;">
                                <div class="col-4"><label for="pricetag">Τιμή Κοστολόγησης</label></div>
                                <div class="col-6"><input name="pricetag" type="text" class="form-control" id="pricetag"></div>
                            </div>
                      </div>
                  </div>
                  <div class="col-4">
                      <label class="col-4 control-label"><h6>Όροι Χρήσης</h6></label>
                      <div class="form-group">
                          <div style="border: 1px solid #e5e5e5; height: 450px; width: 300px; overflow: auto; padding: 10px;">
                              <p>1. Η Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ παρέχεται από το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη του Εθνικού Δικτύου Έρευνας και Τεχνολογίας ΑΕ (εφεξής ΕΔΕΤ Α.Ε.). Αντικείμενο και σκοπός της υπηρεσίας είναι η ορθολογική διαχείριση της επιλογής και διανομής συγγραμμάτων για τους φοιτητές της Τριτοβάθμιας Εκπαίδευσης. Κάθε συμμετέχων φοιτητής οφείλει να διαβάσει προσεκτικά τους παρόντες όρους και προϋποθέσεις συμμετοχής πριν από την συμμετοχή του στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων». Η συμμετοχή του στο πρόγραμμα συνεπάγεται την αυτόματη αποδοχή των παρόντων όρων συμμετοχής.</p>
                              <p>2. Ο συμμετέχων φοιτητής στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων» αποδέχεται ότι τα στοιχεία που δηλώνει στο πρόγραμμα είναι αληθή και επίκαιρα και ότι κάθε δήλωσή του στο πρόγραμμα επέχει θέση Υπεύθυνης Δήλωσης κατά την έννοια και με τις συνέπειες του ν.1599/1986.</p>
                              <p>3. Ο συμμετέχων φοιτητής δηλώνει ότι τα Συγγράμματα που επιλέγει και παραλαμβάνει μέσω του προγράμματος, αντιστοιχούν στα μαθήματα τα οποία έχει δηλώσει κατά την εγγραφή του και νομίμως παρακολουθεί στο ακαδημαϊκό του Τμήμα κατά το τρέχον εξάμηνο και για τα οποία διατηρεί το δικαίωμα της παραλαβής των αντίστοιχων Συγγραμμάτων.</p>
                              <p>4. Όλοι οι προπτυχιακοί φοιτητές των Α.Ε.Ι. δικαιούνται να επιλέγουν και να προμηθεύονται δωρεάν αριθμό διδακτικών συγγραμμάτων ίσο με τον συνολικό αριθμό των υποχρεωτικών και επιλεγόμενων μαθημάτων που απαιτούνται για τη λήψη του πτυχίου. Εάν προπτυχιακοί φοιτητές επιλέξουν περισσότερα επιλεγόμενα μαθήματα από όσα απαιτούνται για τη λήψη του πτυχίου, το δικαίωμα επιλογής και δωρεάν προμήθειας διδακτικών συγγραμμάτων δεν επεκτείνεται και στα επιπλέον μαθήματα που αυτοί επέλεξαν και εξετάστηκαν, ακόμη και αν αυτά υπολογίζονται για τη λήψη του πτυχίου.</p>
                              <p>5. Κάθε συμμετέχων φοιτητής που λαμβάνει ένα Σύγγραμμα για ένα μάθημα που δικαιούται δεν μπορεί να λάβει το ίδιο Σύγγραμμα για άλλο μάθημα στο οποίο έχει οριστεί το ίδιο Σύγγραμμα</p>
                              <p>6. Στην περίπτωση που ένας εκδότης δεν έχει σημείο παράδοσης Συγγραμμάτων στην πόλη όπου σπουδάζει ο συμμετέχων φοιτητής, το Σύγγραμμα θα παραδίδεται υποχρεωτικά μέσω υπηρεσίας ταχυμεταφοράς, στην πόλη του φοιτητή και σε σημείο παρουσίας της εταιρείας ταχυμεταφοράς, που θα επιλέγεται από τον ίδιο. Σε περίπτωση που ο φοιτητής αμελήσει να παραλάβει το Σύγγραμμα αυτό, χάνει το δικαίωμα για το συγκεκριμένο Σύγγραμμα. </p>
                              <p>7. Η συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα του συμμετέχοντα φοιτητή υπόκειται στους όρους του παρόντος καθώς και στις σχετικές διατάξεις του ν. 2472/97 για την προστασία του ατόμου από την επεξεργασία δεδομένων προσωπικού χαρακτήρα, όπως ισχύει. Τα δεδομένα συλλέγονται για τους σκοπούς της παροχής της υπηρεσίας, για την επικοινωνία με τους συμμετέχοντες φοιτητές και την ενημέρωσή τους για ζητήματα που σχετίζονται με την υπηρεσία αυτή, και στο πλαίσιο αυτού του σκοπού ανακοινώνονται στα οικεία Ιδρύματα Τριτοβάθμιας Εκπαίδευσης. Με την παροχή της συγκατάθεσης στο παρόν, ο φοιτητής παρέχει και τη συγκατάθεσή του για τη συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα που τον αφορούν κατά τα οριζόμενα στο ν. 2472/97. Η ΕΔΕΤ Α.Ε. τηρεί το απόρρητο των δεδομένων προσωπικού χαρακτήρα που συλλέγει και επεξεργάζεται για λογαριασμό του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων και δεν διαβιβάζει τα δεδομένα σε τρίτους με εξαίρεση τα προβλεπόμενα στο παρόν. H ΕΔΕΤ Α.Ε. λαμβάνει τα κατάλληλα οργανωτικά και τεχνικά μέτρα για την ασφάλεια των δεδομένων και την προστασία τους από τυχαία ή αθέμιτη καταστροφή, τυχαία απώλεια, αλλοίωση, απαγορευμένη διάδοση ή πρόσβαση και κάθε άλλη μορφή αθέμιτης επεξεργασίας. Έχετε δικαίωμα να πληροφορείστε ή να λαμβάνετε ενημέρωση σχετικά με τα προσωπικά δεδομένα σας που τηρούμε. Αν επιθυμείτε πληροφορίες σχετικά με τα προσωπικά σας στοιχεία και τη χρήση τους ή θέλετε να διορθωθούν, παρακαλούμε απευθυνθείτε στο Γραφείο Αρωγής Χρηστών στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx.</p>
                              <p>8. Το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη της ΕΔΕΤ Α.Ε. προσφέρει στους φοιτητές των Α.Ε.Ι. την υπηρεσία ΕΥΔΟΞΟΣ+, η οποία είναι διακριτή από την Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ. Η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων προσφέρει τον ηλεκτρονικό χώρο συνάντησης των φοιτητών των Α.Ε.Ι. που επιθυμούν να ανταλλάξουν μεταξύ τους συγγράμματα.</p>
                              <p>9. Στόχος της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η ενίσχυση της περιβαλλοντικής συνείδησης των μελών της Ελληνικής ακαδημαϊκής κοινότητας, μέσω της αξιοποίησης χρησιμοποιημένων έντυπων συγγραμμάτων που ανήκουν σε φοιτητές, οι οποίοι επιθυμούν να τα ανταλλάξουν δωρεάν με άλλους φοιτητές.</p>
                              <p>10. Η χρήση της υπηρεσίας ΕΥΔΟΞΟΣ+ από τους φοιτητές είναι καθαρά προαιρετική. Σε περίπτωση που οι φοιτητές δεν συμφωνούν με κάποιον από τους παρόντες όρους χρήσης, καλούνται να εγκαταλείψουν την ιστοσελίδα άμεσα και να μην κάνουν χρήση της υπηρεσίας. Η υπηρεσία ΕΥΔΟΞΟΣ+ προσφέρεται δωρεάν σε όλους φοιτητές των Α.Ε.Ι. Σε καμία περίπτωση η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων δεν συνεπάγεται την καταβολή οποιουδήποτε αντιτίμου. Προϋπόθεση χρήσης της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η αποδοχή ότι αυτή προσφέρεται μόνο για την ανταλλαγήδωρεάν συγγραμμάτων χωρίς αντίτιμο.</p>
                              <p>11. Οι χρήστες που επιθυμούν, μπορούν να δωρίζουν τα συγγράμματα με αποκλειστικά δική τους ευθύνη, εφόσον και στο μέτρο που έχουν το νόμιμο δικαίωμα να προχωρήσουν στην δωρεά, γεγονός που δεν εγγυάται η υπηρεσία ΕΥΔΟΞΟΣ+ και για το οποίο δεν φέρει καμία ευθύνη. Απαγορεύεται ρητά στους χρήστες της υπηρεσίας η πώληση ή η μίσθωση των βιβλίων ή το χρησιδάνειο αυτών ή η κάθε είδους εκμετάλλευση των δικαιωμάτων που συνδέονται με τα συγγράμματα ή η καταβολήαποδοχή οποιουδήποτε αντιτίμου με ή με αφορμή την παράδοση των ανταλλασσόμενων συγγραμμάτων.</p>
                              <p> 12. Ο διαχειριστής της υπηρεσίας δεν φέρει καμία ευθύνη έναντι των χρηστών ή έναντι κάθε τρίτου (νομικού ή φυσικού προσώπου) για τυχόν συμπεριφορά των χρηστών διαφορετική από αυτή για την οποία προσφέρεται η υπηρεσία, δηλαδή για την  ανταλλαγή χρησιμοποιημένων συγγραμμάτων κυριότητας των χρηστών. Οι χρήστες φέρουν την αποκλειστική ευθύνη πρόσβασης στην υπηρεσία ΕΥΔΟΞΟΣ+ και είναι οι μόνοι και οι αποκλειστικοί υπεύθυνοι να αποκαταστήσουν πλήρως κάθε ζημία που θα υποστεί η υπηρεσία ΕΥΔΟΞΟΣ+, οι συνεργάτες της ή / και οποιοδήποτε τρίτο πρόσωπο εξαιτίας οποιασδήποτε αμφισβήτησης / διαφοράς / διαμάχης που τυχόν προκύψει και θα οφείλεται στη μη συμμόρφωση των χρηστών ή εξουσιοδοτούμενων από αυτούς προσώπων με τους όρους του παρόντος.</p>
                               <p>13. Σε περίπτωση χρήσης των υπηρεσιών της υπηρεσίας ΕΥΔΟΞΟΣ+ με τρόπο που αντιβαίνει τους παρόντες όρους του, οι διαχειριστές της διατηρούν το δικαίωμα αποκλεισμού χωρίς προειδοποίηση του μη συμμορφούμενου χρήστη από τις υπηρεσίες του ΕΥΔΟΞΟΣ+. Το περιεχόμενο και οι πληροφορίες που περιλαμβάνονται στο ΕΥΔΟΞΟΣ+ δεν θα πρέπει σε καμιά περίπτωση να θεωρούνται ως συμβουλές ή ως παραίνεση για συγκεκριμένη ενέργεια.</p>
                               <p>14. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν παρέχουν καμία ρητή εγγύηση, ότι τα ανταλλασσόμενα συγγράμματα θα παραδίδονται κατάλληλα, δίχως πραγματικά ή νομικά ελαττώματα. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν φέρουν οποιαδήποτε ευθύνη σε περίπτωση ανταλλαγής συγγραμμάτων με πραγματικά ή νομικά ελαττώματα.</p>
                               <p>15. Η υπηρεσία ΕΥΔΟΞΟΣ+ ενδέχεται να συνεργάζεται με άλλους φορείς ή νομικά πρόσωπα για τη διενέργεια κληρώσεων και διαγωνισμών. Η ευθύνη για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του περιεχομένου αυτού που δημοσιεύεται στις σελίδες του ΕΥΔΟΞΟΣ+ ανήκει αποκλειστικά στους φορείς που διενεργούν την κλήρωση ή το διαγωνισμό και παρέχουν τα δώρα στους φοιτητές. Καμία ευθύνη δεν φέρει ο διαχειριστής της υπηρεσία ΕΥΔΟΞΟΣ+ για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του διαγωνισμού ή της κλήρωσης και της διανομής των δώρων.</p>
                               <p>16. Απαγορεύεται στους χρήστες να χρησιμοποιούν τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ για τη διακίνηση δεδομένων που εμπεριέχουν ή συνεπάγονται: 
                                -> ψευδή δήλωση για την ταυτότητα του χρήστη / μέλους ή παραπλανητική δήλωση αναφορικά με τη σχέση ή / και συνεργασία του χρήστη / μέλους με κάποιο άλλο νομικό ή φυσικό πρόσωπο.
                                -> παραχάραξη ή άλλη αλλοίωση των αναγνωριστικών των χρηστών / μελών με σκοπό την παραπλάνηση ως προς την προέλευση του περιεχομένου που μεταδίδεται μέσω των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+.
                                -> διαφημιστικά μηνύματα ή άλλου περιεχομένου προώθησης προϊόντων ή υπηρεσιών ή τρίτων δικτυακών τόπων, την αποστολή ανεπιθύμητων και μη προσκαλούμενων από τον λήπτη ηλεκτρονικών μηνυμάτων και οποιαδήποτε άλλη μορφή ανεπιθύμητης προώθησης περιεχομένου.
                                -> ιούς ή οποιοδήποτε άλλο ηλεκτρονικό κώδικα, αρχεία ή προγράμματα σχεδιασμένα να παρεμβληθούν, καταστρέψουν ή περιορίσουν τη λειτουργία οποιουδήποτε λογισμικού ή εξοπλισμού ηλεκτρονικών υπολογιστών ή τηλεπικοινωνιακού δικτύου ή εξοπλισμού.
                                -> παρεμβολή στις υπηρεσίες ή διάσπαση των υπηρεσιών ή των servers ή των δικτύων που είναι συνδεδεμένα με τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ ή μη συμμόρφωση με τους κανόνες, τις προϋποθέσεις, τις διαδικασίες και τους κανόνες των δικτύων αυτών.
                                -> παραβίαση, με ή χωρίς πρόθεση, οποιασδήποτε τοπικής, εθνικής, ευρωπαϊκής, διεθνούς νομοθεσίας ή / και οποιουδήποτε κανόνα που έχει νομοθετική ισχύ και αφορά ή / και καλύπτει οποιαδήποτε υπηρεσία ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+.
                                -> παρενόχληση με οποιονδήποτε τρόπο της ιδιωτικής ζωής και των ατομικών και κοινωνικών δικαιωμάτων άλλων χρηστών / μελών αλλά και κάθε ατόμου.</p>
                                <p>17. Για κάθε απορία τους, οι χρήστες των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ μπορούν να απευθύνονται στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx. Σε κάθε περίπτωση η ΕΔΕΤ Α.Ε. διατηρεί το δικαίωμα τροποποίησης των παρόντων όρων και προϋποθέσεων κατόπιν ενημέρωσης των συμμετεχόντων φοιτητών μέσω της παρούσας ιστοσελίδας. Για τον λόγο αυτό οι συμμετέχοντες φοιτητές οφείλουν να επισκέπτονται τακτικά την ιστοσελίδα του έργου και να ελέγχουν τους όρους και τις προϋποθέσεις συμμετοχής.</p>
                          </div>
                          <br>
                          <input type="checkbox" required="required" name="termsAccept" value="Bike"> &nbsp; Αποδέχομαι τους Όρους Χρήσης</br>
                      </div>
                  </div>
              </div>
          </div>
          <!-- cover photos -->
          <div id="lowerPart" class="container">
              <div class="row" style="margin-top:2%;">
                  <div class="col">
                      <label class="col control-label"><h6>Ενδεικτικά Μέρη Συγγράματος</h6></label>
                        <div style="border: 1px solid #e5e5e5; height: 200px; width: 1060px; padding: 10px;">
                            <div class="row text-center">
                                <div class="col-3">
                                    <h6>Εξώφυλλο</h6>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#modal1"><i class="far fa-plus-square" style="font-size:96px"></i></button>
                                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Πληκτρολογήστε τον υπερσύνδεσμο του εξωφύλλου</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div><input type="text" name="cover" class="form-control" id="bookcover"></div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ΟΚ</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6>Οπισθόφυλλο</h6>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#modal2"><i class="far fa-plus-square" style="font-size:96px"></i></button>
                                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Πληκτρολογήστε τον υπερσύνδεσμο του οπισθοφύλλου</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div><input type="text" name="backcover" class="form-control" id="backcover"></div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ΟΚ</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6>Πίνακας Πειρεχομένων</h6>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#modal3"><i class="far fa-plus-square" style="font-size:96px"></i></button>
                                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Πληκτρολογήστε τον υπερσύνδεσμο του πίνακα περιεχομένων</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div><input type="text" name="contentarray" class="form-control" id="contentarray"></div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ΟΚ</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6>Ενδεικτικό Απόσπασμα</h6>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#modal4"><i class="far fa-plus-square" style="font-size:96px"></i></button>
                                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Πληκτρολογήστε τον υπερσύνδεσμο ενδεικτικού αποσπάσματος</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div><input type="text" name="examplesnippet" class="form-control" id="examplesnippet"></div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ΟΚ</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
          <!-- form butoons-->
          <div id="finalButtons" class="container" style="margin-top:2%;">
              <div class="row align-items-center justify-content-center">
                  <div class="col-3"><button type="submit" class="btn btn-info btn-lg">Καταχώρηση Συγγράμματος</button></div>
                  <div class="col-2"><a class="button" href="./bookinsertion.php">Ακύρωση</a></div>
              </div>
              <br></br><br></br>
          </div>
        </form>
        <!-- only publishers can submit books -->
        <?php if($_SESSION['typeofuser'] != 2): ?>
            <script>
              alert("Πρέπει να είστε συνδεδεμένος σαν εκδότης! ");
              window.history.back();
            </script>
          }
        <?php endif; ?>
    </body>
</html>
