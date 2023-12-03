<?php
include "C:\Users\User\Documents\PHP CRUD PROJECT\php\db2.php";

if (isset($_POST["submit"])) {
   $artID = $_POST['artID'];
   $artName = $_POST['artName'];
   $artPrice= $_POST['artPrice'];
   $artAuthor = $_POST['artAuthor'];
   $artPhoto = $_POST['artPhoto'];

   $sql = "INSERT INTO `art_gallery` (`artID`, `artName`, `artPrice`, `artAuthor`, `artPhoto`) VALUES (NULL,'$artName','$artPrice','$artAuthor','$artPhoto')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: CRUD.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="/css/home.css">
   <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
</head>
<body>

<main>
    <?php include ("../globalTemplates/header.php"); ?>

    <div class="container">
      <div class="text-center mb-4">
         <h3>Please upload your art</h3>
         <p class="text-muted">Fill the required fields.</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">art ID:</label>
                  <input type="text" class="form-control" name="artID" placeholder="123456">
               </div>

               <div class="col">
                  <label class="form-label">Art Name:</label>
                  <input type="text" class="form-control" name="artName" placeholder="Starry Night">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Price:</label>
               <input type="text" class="form-control" name="artPrice" placeholder="$1299.99">
            </div>

            <div class="col">
               <label>Author:</label>
               
               <input type="text" class="form-control" name="artAuthor"  placeholder="Michael Angelo">
        
            </div>
            <div class="mb-3">
            <label class="form-label">Select Image:</label>
            <input type="file" class="form-control" name="artPhoto" accept="image/*">
        </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Upload</button>
               
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
    <?php include ("../globalTemplates/footer.php"); ?>
</main>
</body>
</html>