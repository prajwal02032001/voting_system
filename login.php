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
            }
            .card {
            align-items: center ;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
            transition: 0.3s;
            width: 30%;
            height: 45%;
            margin :auto;
            margin-top:10%;
            background-image: url(images/bg.jpg);
            background-repeat: no-repeat;
            }
            .container {
            padding: 30px 20px ;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >  
        <div class="card" style="text-align: center;">
            <div class="container">
                <input type="text" value="" id="name" required placeholder="Enter Name" size=50><br><br><br>
                <input type="text" value="" id="state" required placeholder="Enter state/city" size=50 ><br><br><br>
                <input type="number" value="" id="ph" required placeholder="Enter mobile" size=50   minlength="10"><br><br><br>
                <input type="email" value="" id="email" required placeholder="Enter email" size=50><br><br><br>
                <input type="submit" value="SUBMIT" id="submit" href="login.php">
            </div>>
        </div>
    </body>
</html>