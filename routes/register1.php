<html>
    <head>
        <style> 
            input{
                float:left;
                padding: 7px;
                width: 100%;
                background-color:lavender;
                font-weight: bold;
            }
            input[type=submit]{
            background-color: #45a049;
            font-weight: bold;
            width: 100%;
            height: 10%;
            }
            .card {
            align-items: center ;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
            width: 30%;
            height: 42%;
            margin :auto;
            margin-top:10%;
            background-image: url(bg.jpg);
            background-repeat: no-repeat;
            }
            .container {
            padding: 30px 20px ;
            } 
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
        <nav>
            <label class="logo">ONLINE VOTING SYSTEM</label>
            <ul>
                <li><a href="#">VOTE</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="#">RESULT</a></li>
            </ul></nav>  
        <div class="card" style="text-align: center;">
            <div class="container">
                <form method="post">
                <input type="text" value="" name="name" required placeholder="Enter Name" size=50><br><br><br>
                <input type="number" value="" name="adhaar" required placeholder="Enter Adhaar" size=50 ><br><br><br>
                <input type="number" value="" name="phone" required placeholder="Enter mobile" size=50><br><br><br>
                <input type="email" value="" name="email" required placeholder="Enter email" size=50><br><br><br>
                <input type="submit" value="Submit" name="save">
        </form>
        <?php
        if(isset($_POST['name'])&& isset($_POST['state'])&&isset($_POST['phone'])&&isset($_POST['email'])){
$server_name="localhost";
$username="root";
$password="";
$database_name="vote";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $state=$_POST['state'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $sql_query="INSERT INTO register (sname,state,mobile,email) VALUES ('$name','$state','$phone','$email')";
    $result=mysqli_query($conn,$sql_query);
    if($result){
        $sql_query1="INSERT INTO otp (email,otp) VALUES('$email',1)";
        $re=mysqli_query($conn,$sql_query1);
        echo '<script>alert("Succesfull")</script>';
    }   
    else{
        echo '<script>alert("Unsuccessfull")</script>';
    }
    mysqli_close($conn);
}
}
?>
    </body>
</html>