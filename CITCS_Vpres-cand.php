<!DOCTYPE html>
<html lang="en">
<head>

  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------------------  Internal Css ------------------>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body>
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">CHOOSE 1 TO VOTE</h1>
           <p class="text-center" style="margin-bottom: 50px;">Vice-President Position</p>
         </div>
<?php 
   $sql = "select * from candidates where department='CITCS' && position='vice-president'";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     foreach($rs as $row){
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                 <a href="Candidates.php"><img class="card-img-top" src="img/nido.png" 
                 alt="shinzo" height="350px" style="border-radius:50%"></a>
                  <div class="card-body">
                    <h2 class="card-title"><?php echo $row['Lname'] .", ".  $row['Fname']; ?></h2>
                    
                    <p class="card-text"><?php echo $row['course']; ?></p>
                  </div>
                </div>
              </div>
              <br><br>
              <?php } ?>
              <!-- Card End -->
    
          </div>
        </div>
      </section>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>