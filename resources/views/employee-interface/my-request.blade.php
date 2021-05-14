<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-01-01.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
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
          /* position: absolute; */
          width: 142.97px;
          height: 100px;
          margin-left: 25px;
          margin-top: 10px;
          margin-bottom: 0px;
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
        div .job-container .my-request {
            box-sizing: border-box;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19);
            border-radius: 25px;
            width: 95%;
            height: 100%;
            background-color: white;
            display: inline-block;
            padding: 10px;
            margin: 0px 30px 0px 30px;
            text-align: center;
            font-size: 13px;
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

        div .my-request-content {
            display: block;
            margin-top: 15px;
            font-style: normal;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }

        #status {
            /* position: absolute; */
            width: 69px;
            height: 30px;
            margin-left: -170px;
            margin-top: -50px;

            background: #FFCE65;
            border-radius: 10px;
        }

        table {
            margin: 30px;
        }

        table, th, td {
            padding: 23px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr:nth-child(odd) {
            background-color: #dddddd;
        }

        #logout img {
            width: 35px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <title>Hive: File of Leave: My Request</title>
</head>
<body>
    <div class="sidenav">
        <a href="/"><img id="logo" src="/images/Logoo-01.png" alt="Logo"></a>
        <ul class="nav">
            <li>
                <a href="/">
                    <button class="btn">
                        <i class="icon"><img src="/images/Home-01.png" alt="Home"></i>
                        <span>Home</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/dashboard">
                    <button class="btn">
                        <i class="icon"><img src="/images/Home-01.png" alt="Home"></i>
                        <span>Dashboard</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/login-as-admin">
                    <button class="btn">
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
                <a href="/file-of-leave/request-form">
                    <button class="btn active">
                        <i class="icon"><img src="/images/Leave-01.png" alt="Home"></i>
                        <span>File of Leave</span>
                    </button>
                </a>
            </li>
            <br><br>
            <hr>
            <br><br>
            <li>
                <a href="/login-as-admin">
                    <button class="btn">
                        <i id="logout" class="icon"><img src="/images/login.png" alt="Home"></i>
                        <span>Login(admin)</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/logout">
                    <button class="btn">
                        <i id="logout" class="icon"><img src="/images/logout.png" alt="Home"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="applicant-nav">
            <ul>
                <li>
                    <h1>File of Leave</h1>
                </li>
                <li>
                    <a href="/file-of-leave/request-form">
                        <button class="btn">
                            <span>Form</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/file-of-leave/my-request">
                        <button class="btn active">
                            <span>My Request</span>
                        </button>
                    </a>
                </li>
            </ul>
            <div class="account-dropdown">
              <a href="#">
                <i class="icon"><img src="/images/notif-icon.png"></i>
                <span>{{session('email')}}</span>
                <i class="icon"><img src="/images/Profile.png" alt="Profile"></i>
              </a>
            </div>
        </div>
        <div class="job-container">
          <div class="my-request">
            <span class="my-request-content">
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Code Name</th>
                    <th>Request for</th>
                    <th>Nature of Leave</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Number of Days</th>
                    <th>Date of Request</th>
                  </tr>
                @foreach($requests as $fol)
                  <tr>
                    <td>{{ $fol['id'] }}</td>
                    <td>{{ $fol['code_name'] }}</td>
                    <td>{{ $fol['requestFor'] }}</td>
                    <td>{{ $fol['natures_of_leave'] }}</td>
                    <td>{{ $fol['periodFrom'] }}</td>
                    <td>{{ $fol['periodTo'] }}</td>
                    <td>{{ $fol['days'] }}</td>
                    <td>{{ $fol['updated_at'] }}</td>
                  </tr>
                @endforeach
              </table>
            </span>
          </div>
        </div>
    </div>
</body>
</html>