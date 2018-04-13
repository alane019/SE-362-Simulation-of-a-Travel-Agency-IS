<html>
    <head>
        <title>System</title>
        <style>
            #wrapper {
                width: 50%;
                margin: 0 auto;
                margin-top: 140px;
                margin-right: 200px;
            }
            form {
                font-size: 30px;
            }
            span {
                font-size: 50px;
                text-align: center;
            }
            #send {
                font-size: 30px;
                width: 100px;
                height: 40px;
            }
            input {
                width: 200px;
                height: 35px;
            }
        </style>
    </head>
    <body>
       <div id = "wrapper">
           <span>LOGIN AREA</span>
           <br><br>
            <form action="loginFormAction.php" method="post">
                <label>Email: </label><input type="email" name="email">
                <br><br>
                <label>Password: </label><input type="password" name="password">
                <br><br>
                <input id="send" type="submit" value="Send">
            </form>
        </div>
    </body>
</html>