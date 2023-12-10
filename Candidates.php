
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get to know Me</title>
    <link rel="stylesheet" href="css/candidate.css">
</head>

<body>
<?php 
   $sql = "select * from candidates ";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     foreach($rs as $row)
?>
    <div class="personal-background">
       <img class="my-photo" src="img/nido.png" alt="My Photo">
    <p class="background" style="color: yellow; font-size:50px;" >Hi I'm Billy John M. Dela Cruz</p>
        <br><p class="about-me" style="text-align: center; font-size: 30px;">
            I'm 22 years old. My birthday is on April 15, 2001. I live at 147 Lovely St., 
            Purok 4 Cupang, Muntinlupa City. My hobbies are playing badminton, basketball, and MOBA games. 
            I'm eager to learn new things. I'm and industrious person. You can contact me througn my 
            phone number: 09422200320 and at my email: billyjohndelacruz278@gmail.com
        </p>
    </div>    

    
    <p class="school-background" style=" color: yellow; font-size: 50px; font-weight:bold; text-align: center;">School Background</p><br><br>
    <div class="school-background">
            <h1>Elementary School</h1><br>
        <p>
           Mahayhay Elementary School<br><br>2014 - 2015<br><br>
        </p>
            <h1>Junior High School</h1><br>
        <p>
            Uson National High School<br><br>2018 - 2019<br><br>
        </p>
            <h1>Senior High School </h1><br>
        <p>
            Cupang Senior High School<br><br>2020 - 2021<br><br>
        </p>
    </div>

</body>
</html>