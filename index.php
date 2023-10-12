
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="./CSS/HOME/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="ASSETS/logo.png" alt="logo" width="150" height="70">
          </a>
          <ul>
            <li><a href="index.php">HOME</a></li>
           <li><a href="hours.php">HOURS</a></li>
          </ul>
        </div>
      </nav>
      <h1> Let's calculate your hours!</h1>
      <br>
      <form class="form" action="./database.php" method="POST">

        <div>
          <label for="wid">ID</label>
          <input type="text" id="wid" name="wid" placeholder="123456">
       </div>
       <br>
        <div>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" placeholder="Spongebob">
         </div>
         <br>
         <div>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Squarepants">
        </div>
        <br>
        <div>
            <label for="datew">Date:</label>
            <input type="date" name="datew" id="datew" > 
        </div>
        <br>
        <div>
            <label for="timew">Hours Worked</label>
            <input type="number" name="timew" id="timew" > 
        </div>
        <br>
        
           <input type="reset">
    
        <br>
        
                <input type="submit">
        </form>

        <?php
         require_once('database.php');
         if(isset($_POST) && !empty($_POST)){
             $wid = $_POST['wid'];
             $fname = $_POST['fname'];
             $lname = $_POST['lname'];
             $datew = $_POST['datew'];
             $timew = $_POST['timew']; 
         
             $res = $database-> create($wid, $fname, $lname, $datew, $timew);
             if (!$res){
                 echo "<p>Failed to insert data into DB</p>";
             }
         }

        ?>
      <footer>
        <ul>
            <li><img src="./ASSETS/Facebook-logo.png" width="30" height="30" alt="facebook logo"></li>
            <li><img src="./ASSETS/Twitter.png" width="30" height="30" alt="facebook logo"></li>
            <li><img src="./ASSETS/logo-instagram-3238899_1280.png" width="30" height="30" alt="instagram logo"></li> 
        </ul>
        <p> © 2023 7Shifts, Inc</p>
      </footer>
</body>
</html>