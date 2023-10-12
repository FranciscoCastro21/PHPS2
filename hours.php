<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/HOURS/hours.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../ASSETS/logo.png" width="150" height="70">
          </a>
          <ul>
          <li><a href="index.php">HOME</a></li>
           <li><a href="hours.html">HOURS</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Day</th>
              <th>Hours Worked</th>
            </tr>
            <?php
      
              while($r = mysqli_fetch_assoc($res)){
            ?>
                <tr>
                  <td><?php echo $r['wid']; ?></td>
                  <td><?php echo $r['fname'] ?></td>
                  <td><?php echo $r['lname'] ?></td>
                  <td><?php echo $r['datew'] ?></td>
                  <td><?php echo $r['timew'] ?></td>
                </tr>
              <?php
              }
            ?>
          </table>
        </div>
      </div>
     
      <footer>
        <ul>
            <li><img src="../ASSETS/Facebook-logo.png" width="30px" height="30px"></li>
            <li><img src="../ASSETS/Twitter.png" width="30px" height="30px"></li>
            <li><img src="../ASSETS/logo-instagram-3238899_1280.png" width="30px" height="30px"></li> 
        </ul>
        <p> © 2023 7Shifts, Inc</p>
      </footer>
</body>
</html>