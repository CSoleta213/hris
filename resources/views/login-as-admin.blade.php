<!DOCTYPE html>
<html>
  <head>
    <title>Hive Login</title>
    <link rel="icon" href="/images/favicon-01-01.png" type="image/gif" sizes="16x16">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
      body {
        margin: 0;
        margin-left: 2%;
        background-color: #FFFFFF;
        color: #EA6E6E;
      }

      #logo a img {
        position: absolute;
        width: 200px;
        height: 136.84px;
        left: -15px;
        top: -25px;
      }

      /* humble-01 1 */
      #caption {
        position: absolute;
        width: 545px;
        height: 263.63px;
        left: 65px;
        top: 125px;
      }

      #pulot {
        position: absolute;
        width: 400px;
        height: 400px;
        left: -100px;
        top: 350px;

        transform: rotate(90deg);
      }

      img {
        position: absolute;
        width: 475px;
        height: 500px;
        left: 12%;
        top: 350px;
      }

      form {
        position: absolute;
        width: 683px;
        height: 625px;
        left: 683px;
        top: 0px;
        background: #FFCE64;
        
        text-align: center;
      }

      #hive {
        position: absolute;
        width: 140px;
        height: 215px;
        left: 543px;
        top: -76.2px;

        background: url(Hive-01.png);
        transform: matrix(-1, 0, 0, 1, 0, 0);
      }

      .line1 {
        width: 125px;
        height: 80px;
        z-index: -1;
        background: transparent;
        border: none;
        border-top: dashed 2px #492727;
        border-radius: 50%;
        margin-top: 80px;
        margin-left: 360px;
        transform: rotate(-84.28deg);
      }

      .line2 {
        width: 60px;
        height: 30px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 50% 50%;
        margin-top: 5px;
        margin-left: 365px;
        transform: rotate(-200deg);
      }

      .line3 {
        width: 240px;
        height:100px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 35% 50%;
        margin-top: -62px;
        margin-left: 124.5px;

        transform: rotate(-5deg);
      }

      .line4 {
        width: 50px;
        height:25px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 50% 50%;
        margin-top: -50px;
        margin-left: 75px;
        transform: rotate(-180deg);
      }

      form h2 {
        height: 64px;
        margin-top: -125px;

        font-family: Dela Gothic One;
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
        line-height: 72px;

        color: #FFFFFF;

        margin-bottom: -.5%;
      }

      form p , label, input {
        height: 16px;

        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 15px;
        line-height: 14px;

        color: #000000;

        margin-top: 0;
      }

      #bee {
        position: absolute;
        width: 53.76px;
        height: 53.76px;
        left: 195px;
        top: 185px;

        background: url(bee-01.png);
        transform: rotate(-134.28deg);
      }

      form div {
        font-size: 15px;
        line-height: 20px;
        color: #000000;

        margin-top: 50px;
        margin-left: 159px;
        text-align: left;
      }

      form input {
        width: 350px;
        height: 45px;

        border: none;
        padding-left: 20px;
        border-radius: 10px;
      }

      form div label a {
        color: #3F8CFF;

        margin-left: 165px;
      }

      form a {
        text-decoration: none;
      }

      #messenger {
        font-size: 50px;
        text-align: right;
        margin-right: 2%;
        margin-bottom: 1%;
        position: fixed;
        right: 0;
        bottom: 0;
      }

      #messenger a {
        color: #2196F3;
      }
    </style>
  </head>
  <body>
    <h1 id="logo">
      <a href="/"><img src="/images/Logoo-01.png" alt="Logo"></a>
    </h1>
    <img id="caption" src="/images/humble-01.png" alt="Caption">
    <img id="pulot" src="/images/Pulot-01.png" alt="">
    <form action="/loginme-as-admin" method="post">
      @csrf
      <div class="cropped">
        <img id="hive" src="/images/Hive-01_Cutted.png" alt="Hive">
      </div>
      <div id="wrapper">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
      </div>
      <h2>LOGIN as ADMIN</h2>
      <p>Welcome back to Company!</p><br>
      <img id="bee" src="/images/bee-01.png" alt="Bee">
      <div>
        <label for="email" style="color: #000000;">Email</label><br>
        <input type="email" name="email" required><br><br>
        <label for="password" style="color: #000000;">Password <a href='/login/forgot'>Forgot password?</a></label><br>
        <input type="password" name="password" required><br><br><br>
        <input type="submit" value="Sign in" style="font-family: Dela Gothic One; font-size: 25px; color: #FFFFFF; background-color: #FFB30F; border: none; cursor: pointer;">
      </div>
    </form>
    <div id="messenger">
      <a href="https://m.me/104273485117574?ref=Flow"><i class="fab fa-facebook-messenger" target="_blank"></i></a>
    </div>
  </body>
</html>