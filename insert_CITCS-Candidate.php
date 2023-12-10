<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
        
      }
      table{
        margin:auto;
      }
     
    </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href=admin_login.php  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="candidate.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
                </li>
              
                <li class="nav-item" >
                  <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
                </li>
              
              </ul>
            </div>
          </nav>
        </header>
    </section>
    
    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">CITCS</h1>
                <p style="padding-top: 20px;">Candidate Information</p>
                <form action="process_cand.php" method="post">
                <table>
                <tr>
                        <td class="td-1"><input type="hidden" name="CandId"></td>
                    </tr>
                    
                    <tr>
                        <td class="td-1">Last Name :</td>
                        <td class="td-1"><input requiredtype="text" style="text-align: left;" name="Lname" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">First Name :</td>
                        <td class="td-1"><input requiredtype="text" style="text-align: left;" name="FName" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Middle Initial :</td>
                        <td class="td-1"><input requiredtype="text" style="text-align: left;" name="MI" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Birthday :</td>
                        <td class="td-1"><input requiredtype="date" style="text-align: left;" name="Birthday"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Contact Number :</td>
                        <td class="td-1"><input  required type="number" style="text-align: left;" name="Contact"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Course :</td>
                        <td><select name="Course"  required>
                          
                          <option>BSIT</option>
                          <option>BSCS</option>
                          <option>ACT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Position :</td>
                        <td><select name="Position"  required>
                          <option>President</option>
                          <option>Vice President</option>
                          <option>Secretary</option>
                        </select></td>
                        
                    </tr>
                    <tr>
                        <td class="td-1">Student No. :</td>
                        <td class="td-1"><input  required type="text" style="text-align: left;" name="StudentNo"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Platform:</td>
                        <td class="td-1"><input  required type="textarea" style="text-align: left;" name="Platform"></td>
                    </tr>

                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/plmun.png" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <hr>
        <div class="Footer">
        <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="index.html" style="text-decoration: none; color: #a517ba;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: #a517ba;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="suggestion.html" style="text-decoration: none; color: #a517ba;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: #a517ba;">Contact</a></li>
                </ul>
        </div>
      </div>
      <div class="col-md-6">
        <hr>
        <div class="social-icon">
          <ul >
                          <li>
                              <a href="">
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-google-plus"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-pinterest"></i>
                              </a>
                          </li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
  </section>

  
   
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
    <!-- <script src="js/aos.js"></script>
    <script>
     AOS.init();
    </script> -->
</body>
</html>