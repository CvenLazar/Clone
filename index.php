<!DOCTYPE html>
<html>
<head>
    <title>PLMun EVote: Your Voice, Your Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border-radius:5px;
            background-color: rgba(113, 151, 112, 0.658);
            border-color: green;
            border-style: solid;
		}
        h1{
            color:white;
        }
        
</style>
<body>
<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
    <img src="img/plmun.png" alt="PLMun Evote" class="image">
    <h1>PLMun Evote</h1><br><br>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $uname = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($uname) && !empty($password) && !is_numeric($uname))
        {
            $query = "select * from admin limit 1" ;
            $result = mysqli_query($conn, $query);

            if ($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password && $user_data['username'] === $uname)
                    {
                        header("Location: index.html");
                        die;
                    }
                    else if ($user_data['password'] !== $password && $user_data['username'] === $uname)
                    { 
                        echo "Your Password Is Incorrect";
                    }
                    else if ($user_data['username'] !== $uname && $user_data['password'] === $password)
                    {
                        echo "Your Email Is Incorrect";
                    }
                    else if($user_data['username'] !== $uname && $user_data['password'] !== $password)
                    {
                        echo "Your Email And Password Is Incorrect";
                    }
                }
            }
           
        }
    }

    $conn -> close();

?>
    <form method="post">
    <div class="form-floating mb-3">
        <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input required type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="col-12">
    <button class="btn btn-primary" type="submit">Log In</button>
  </div>
    </form>
</div>
</div>
</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>
