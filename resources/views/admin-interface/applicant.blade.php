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
            background-color: #FFF5E1;
            font-family: 'Montserrat', sans-serif;
        }
        /* Side Navigation */
        .btn {
            border: none;
            outline: none;
            background-color: white;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-size: medium;
            font-weight: bold;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }
        .active, .btn:hover {
            background-color: #FFCE65;
            color: white;
            width: 200px;
            text-align: left;
        }
        .sidenav {
            position: fixed;
            background: white;
            width: 200px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Logoo-01 1 */
        #logo {
          width: 142.97px;
          height: 100px;
          margin-left: 25px;
          margin-top: 10px;
          margin-bottom: 0px;
        }

        .sidenav h1 {
            text-align: center;
            padding: 20px;
        }
        .icon img {
            width: 50px;    
            vertical-align: middle;
            padding-left: 10px;
        }

        /* Main Body */
        .main {
            margin-left: 200px;
        }

        .main h1{
            padding: 20px;
            color: #492827;
            display: inline-block;
            font-weight: bold;
            font-family: 'Dela Gothic One';
        }
        .main .btn {
            border: none;
            outline: none;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #FFF5E1;
            font-style: normal;
            font-weight: bold;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }
        .main .active, .main .btn:hover {
            background-color: #FFCE65;
            color: white;
            width: auto;
        }
        .main li {
            display: inline-block;
        }

        /* Applicant Nav */

        div.applicant-nav {
            margin-top: 20px;
        }
        div.applicant-nav ul{
            display: inline-block;
        }
        ul.ajp-right {
            float: right;
            margin-right: 20px;
        }
        .account-dropdown {
            box-sizing: border-box;
            float: right;
            padding-top: 20px;
            padding-right: 20px;
            align-items: center;
        }
        .account-dropdown a {
            color: #492726;
        }

        /* Job Container */

        div .job-container {
            display: block;
            padding: 20px;
        }
        div .job-container .cs-system-analyst {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .t-data-sci {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .ad-ux-des {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .t-soft-dev {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container img {
            width: 120px;
        }
        div .job {
            display: block;
            margin-top: 15px;
            font-style: normal;
            font-weight: bold;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }
        
        .container {
          position: relative;
          text-align: center;
          color: white;
        }

        .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }

        #logout img {
            width: 35px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <title>Hive: Applicants</title>
</head>
<body>
    <div class="sidenav">
        <a href="/home"><img id="logo" src="/images/Logoo-01.png" alt="Logo"></a>
        <ul class="nav">
            <li>
                <a href="/home">
                    <button class="btn">
                        <i class="icon"><img src="/images/Home-01.png" alt="Home"></i>
                        <span>Home</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/admin/dashboard">
                    <button class="btn">
                        <i id="logout" class="icon"><img src="/images/dashboard.png" alt="Home"></i>
                        <span>Dashboard</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/applicant">
                    <button class="btn active">
                        <i class="icon"><img src="/images/Applicant-01.png" alt="Home"></i>
                        <span>Applicants</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="#">
                    <button class="btn">
                        <i class="icon"><img src="/images/COE-01.png" alt="Home"></i>
                        <span>COE</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/admin/file-of-leave">
                    <button class="btn">
                        <i class="icon"><img src="/images/Leave-01.png" alt="Home"></i>
                        <span>File of Leave</span>
                    </button>
                </a>
            </li>
            <br><br>
            <hr>
            <br><br>
            <li>
                <a href="/dashboard">
                    <button class="btn">
                        <i id="logout" class="icon"><img src="/images/logout.png" alt="Home"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>

    <div class="main">
        <h1>Applicants</h1>
        <div class="account-dropdown">
            <a href="#">
              <i class="icon"><img src="/images/notif-icon.png"></i>
              <span>{{session('email')}}</span>
              <i class="icon"><img src="/images/Profile.png"></i>
            </a>
        </div>
        <div class="applicant-nav">
            <ul>
                <li>
                    <a href="#">
                        <button class="btn active">
                            <span>Jobs</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <button class="btn">
                            <span>Candidate</span>
                        </button>
                    </a>
                </li>
            </ul>
            <ul class="ajp-right">
                <li>
                    <a href="#">
                        <button class="btn">
                            <span>Add Job Posting</span>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="job-container">
            <div class="cs-system-analyst">
                <span>Customer Service</span>
                <span class="job">System Analyst</span>
                <div class="container">
                  <img src="/images/one piece.png" alt="One Piece" style="width:100%;">
                  <div class="centered">
                    <!-- Code that count the number of applicant who applied for System Analyst-->
                  </div>
                </div>
                <span>Candidates</span>
            </div>
            <div class="t-data-sci">
                <span>Technology</span>
                <span class="job">Data Scientist</span>
                <div class="container">
                  <img src="/images/one piece.png" alt="One Piece" style="width:100%;">
                  <div class="centered">
                    <!-- Code that count the number of applicant who applied for Data Scientist-->
                  </div>
                </div>
                <span>Candidates</span>
            </div>
            <div class="ad-ux-des">
                <span>Art/Designer</span>
                <span class="job">UX Designer</span>
                <div class="container">
                  <img src="/images/one piece.png" alt="One Piece" style="width:100%;">
                  <div class="centered">
                    <!-- Code that count the number of applicant who applied for UX Designer-->
                  </div>
                </div>
                <span>Candidates</span>
            </div>
            <div class="t-soft-dev">
                <span>Technology</span>
                <span class="job">Software Developer</span>
                <div class="container">
                  <img src="/images/one piece.png" alt="One Piece" style="width:100%;">
                  <div class="centered">
                    <!-- Code that count the number of applicant who applied for Software Developer-->
                  </div>
                </div>
                <span>Candidates</span>
            </div>
        </div>
    </div>
</body>
</html>