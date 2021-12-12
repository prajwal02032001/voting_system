<html>
    <head>
        <title>online_voting_system</title>
        <style>
            body {
                text-align: center;
                background-color:beige;
            }
            #headersection {
                padding: 5px;
            }
            #headersection h1 {
                 font-family: cursive;
            }
            input{
               padding: 10px; 
               border-radius: 5px;              
            }
            #dropbox{
                border-radius: 5px;
                padding: 10px;
                width: 12.5%;
                border-width: 2.1px;
            }
            #loginbtn{
                border-radius: 5px;
                padding: 5px;
                width: 9%;
                background-color: #3498db;;
                color:white;
                font-size:15px;
            }
        </style>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <div id="headersection">
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="bodysection">
            <form action="#">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Enter Email ID"><br><br>
                <input type="password" name="password" placeholder="Enter password"><br><br>
                <select id="dropbox" name="role">
                    <option value="1">voter</option>
                    <option value="2">Group</option>
                </select><br><br>
                <button id="loginbtn"><a href="routes/customer.php">Login</a></button><br><br>
                New user?<a href="routes/registration.php"> Register</a>
            </form>
        </div>
    </body>
</html>