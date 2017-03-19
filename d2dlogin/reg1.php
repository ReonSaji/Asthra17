 <?php
  
  include 'connect.php';
  if(isset($_POST['reg'])) {
    $teamname = $_POST['teamname'];
    $collegename = $_POST['collegename'];
    $noofp = $_POST['noofpart'];
    $teamcap = $_POST['teamcap'];
    $mob1 = $_POST['mob1'];
    $mob2 = $_POST['mob2'];

    $stmt = $db->prepare("INSERT INTO `registration` (teamname, collegename,  noofparticipants,teamcaptain,mobileno,mobile2) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssisii', $teamname, $collegename, $noofp, $teamcap, $mob1, $mob2);
    $stmt->execute();
    $stmt->close();
 header("Location: https://www.payumoney.com/webfronts/#/index/DARE2DANCE_SJCET_PALAI"); 
  }
  ?>
  
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>D2D Registration</title>
    
      <link rel="stylesheet" href="css/style.css">
  <
  
</head>


<body>
<form method="post" action="reg1.php">
  <div class="box">
      <h1 id="logintoregister">Registration</h1>
    <div class="group">      
      <input name="teamname" class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Team Name</label>
      </div>
    <div class="group">      
      <input name="collegename" class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>College Name</label>
      </div>
    <div class="group">      
      <input type="text" id="noofpart" name="noofpart" class="inputMaterial" onblur="validateTextNumericInRange()"  type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>No of Participants(max 15)</label>
      </div>
    <div class="group">      
      <input name="teamcap" class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Team Captain</label>
      </div>
    <div class="group">      
      <input name="mob1" class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>MobileNo1</label>
      </div>
    <div class="group">      
      <input name="mob2" class="inputMaterial" type="text"  required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>MobileNo2</label>
    </div>

  <button name="reg" id="buttonlogintoregister">REGISTER</button>
      
    </div>
    <
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

    <script src="js/index.js"></script>

</body>
</html>
