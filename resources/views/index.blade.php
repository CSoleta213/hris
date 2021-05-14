<!DOCTYPE html>
<html>
  <head>
    <title>Hive</title>
    <link rel="icon" href="/images/favicon-01-01.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
      body {
        background-image: url('images/Homepagee.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        font-family: ;
      }

      a {
        text-decoration: none;
      }

      #logo a img {
        position: absolute;
        width: 200px;
        height: 136.84px;
        left: -15px;
        top: -25px;
      }

      #hive {
        position: absolute;
        width: 125px;
        height: 125px;
        left: -60px;
        top: 150px;
      }

      .line1 {
        width: 180px;
        height: 150px;
        z-index: -1;
        background: transparent;
        border: none;
        border-top: dashed 2px #492727;
        border-radius: 45%;
        margin-top: 235px;
        margin-left: 423px;
        transform: rotate(35deg);
      }

      .line2 {
        width: 50px;
        height: 30px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 50% 50%;
        margin-top: -160px;
        margin-left: 275px;
        transform: rotate(150deg);
      }

      .line3 {
        width: 160px;
        height: 50px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 45% 50%;
        margin-top: -30px;
        margin-left: 279px;
        transform: rotate(0deg);
      }

      .line4 {
        width: 250px;
        height: 50px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 100% 0%;
        margin-top: -70px;
        margin-left: 75px;
        transform: rotate(15deg);
      }

      #bee {
        position: absolute;
        width: 45px;
        height: 45px;
        left: 540px;
        top: 350px;

        transform: matrix(0.17, 0.98, 0.98, -0.17, 0, 0);
      }

      p {
        position: absolute;
        width: 494px;
        height: 25px;
        left: 150px;
        top: 305px;

        font-family: Montserrat;
        font-style: normal;
        font-size: 18px;
        line-height: 29px;

        color: #000000;
      }

      span {
        color: #FFB71E;
      }

      #log-in {
        position: absolute;
        width: 350px;
        height: 45px;
        left: 150px;
        top: 350px;

        background: #FFB71E;
        border-radius: 10px;
        font-family: Dela Gothic One;
        font-style: normal;
        font-weight: normal;
        font-size: 25px;
        color: #FFFFFF;

        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1 id="logo">
    <a href="/"><img src="/images/Logoo-01.png" alt="Logo"></a>
    </h1>
    <img id="hive" src="images/Hive-01.png" alt="">
    <div id="wrapper">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
      </div>
    <img id="bee" src="images/bee-01.png" alt="">
    <p><strong>Interested in modern HR? <a href="/login"><span>Join us now!</span></a></strong></p>
    <a href="/login"><button id="log-in">Log in</button></a>
  </body>
</html>