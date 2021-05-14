<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-01-01.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body {
            box-sizing: border-box;
            background-color: #FFCE64;
            font-family: 'Montserrat', sans-serif;
        }
        .main {
            margin-left: 640px;
            position: fixed;
            box-sizing: border-box;
        }
        .left-side {
            position: fixed;
            background: white;
            width: 640px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .header {
            display: block;
            box-sizing: border-box;
            font-family: 'Dela Gothic One';
            color: white;
            text-align: center;
            margin-top: 170px;
            letter-spacing: 2px;
        }
        .logo {
            float: left;
        }
        .right-side{
            margin-left: 640px;
        }
        .right-side span{
            display: block;
            margin-top: 33px;
            margin-left: 70px;
            margin-right: 70px;
            font-size: 23px;
            font-weight: 600;
        }
        .text-box {
            display: block;
            border: none;
            outline: none;
            margin-left: 120px;
            width: 400px;
            padding: 10px;
            margin-top: 30px;
            border-radius: 7px;
            height: 15px;
        }
        .btn {
            display: block;
            border: none;
            outline: none;
            margin-left: 120px;
            width: 420px;
            margin-top: 250px;
            border-radius: 7px;
            height: 40px;
            color: white;
            background-color: #FFB30F;
            letter-spacing: 1px;
            cursor: pointer;
            font-family: 'Dela Gothic One';
        }
        .btn2 {
            display: block;
            border: none;
            outline: none;
            margin-left: 120px;
            width: 420px;
            margin-top: 10px;
            border-radius: 7px;
            height: 40px;
            color: #FFB30F;
            background-color: white;
            letter-spacing: 1px;
            cursor: pointer;
            font-family: 'Dela Gothic One';
        }
        ::placeholder { 
            color: rgb(190, 190, 190);
            opacity: 1;
        }
    </style>
    <title>Forgot Password</title>
</head>
<body>
    <main>
        <div class="left-side">
            <img src="/images/Logoo-01.png" class="logo" width="180px" alt="Logo">
            <img src="/images/loss of track 1.png" width="631px" alt="rs">
        </div>
        <div class="right-side">
            <div class="header">
                <h2>FIND YOUR ACCOUNT</h2>
            </div>
            <span>Please enter your email or mobile number to search your account.</span>
            <form action="/login/forgot" method="post">
              <input type="text" class="text-box" placeholder="Email or Mobile number">
              <a href="#"><button class="btn"><h2>Continue</h2></button></a>
              <a href="#"><button class="btn2"><h2>Cancel</h2></button></a>
            </form>
        </div>
    </main>
</body>
</html>