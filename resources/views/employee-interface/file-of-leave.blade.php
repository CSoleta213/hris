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

        /* Request Container */

        /* div .request-container {
            display: block;
            padding: 20px;
        } */
        div .request-container .request-for-leave {
            box-sizing: border-box;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19);
            border-radius: 25px;
            /* width: 200px; */
            /* height: 280px; */
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 0px 30px 0px 30px;
            text-align: center;
            font-size: 13px;
        }

        div .heading {
            display: block;
            margin-top: 15px;
            font-style: normal;
            font-weight: bold;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }

        div .form {
            display: block;
            margin-top: 15px;
            font-style: normal;
            color:black;    
            text-shadow: 1px 0 black;
            letter-spacing:1px;
        }

        form input {
            margin: 10px;
            margin-top: 0px;
            padding: 5px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            border-color: #FFF5E1;
        }

        .first-row {
            width: 18%;
        }

        #days {
            width: 50px;
        }

        select, option, textarea {
        font-family: 'Montserrat', sans-serif;
        padding: 5px;
        font-weight: bold;
        border: 2px solid #FFF5E1;
        -moz-box-shadow:    inset 0 0 10px #FFF5E1;
        -webkit-box-shadow: inset 0 0 10px #FFF5E1;
        box-shadow:         inset 1px 1px 2px #808080;
      }

      ::placeholder {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
      }

        #nature_of_leave label {
            margin-left: 60px;
        }

        #hr {
        border: 1px dashed;
      }

      #button input {
          color: #fff;
          background-color: #FFCE65;
          border: none;
          border-radius: 10px;
          padding: 10px;
          font-weight: bold;
          font-family: 'Montserrat', sans-serif;
        }

        #logout img {
            width: 40px;
        }

        #logout img {
    width: 35px;
    padding-top: 10px;
    padding-bottom: 10px;
}

.hex {
            position: absolute;
  max-width: 100%;
  width: 55.03px;
  /* height: 55.03px; */
left: 1280.97px;
top: 9px;
}
.hex:before {
  content: '';
  display: block;
  padding-bottom: 115%;
}
.hex img {
  left: 50%;
  position: relative;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 115%;
}
.hex__shape {
  position: absolute;
  backface-visibility: hidden;
  left: 0;
  height: 100%;
  overflow: hidden;
  top: 0;
  transform: rotate(240deg);
  width: 100%;
}

#email {
    margin-right: 80px;
}
    </style>
    <title>Hive: File of Leave: Form</title>
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
                        <i id="logout" class="icon"><img src="/images/dashboard.png" alt="Home"></i>
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
                        <button class="btn active">
                            <span>Form</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/file-of-leave/my-request">
                        <button class="btn">
                            <span>My Request</span>
                        </button>
                    </a>
                </li>
            </ul>
            <div class="account-dropdown">
              <a href="#">
                <i class="icon"><img src="/images/notif-icon.png"></i>
                <span id="email">{{session('email')}}</span>
                <div class="hex center">
                <div class="hex__shape">
                  <div class="hex__shape">
                    <div class="hex__shape">
                      <img src="/images/Akoko 1.png" alt="Profile">
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
        </div>
        <div class="request-container">
        <div class="request-for-leave">
          <span class="heading"><h2>REQUEST FOR LEAVE OF ABSENCE</h2></span>

          <span class="form">
                <hr id="hr">
                </span>

            <form action="/requested" method="POST">
                @csrf
                <span class="form">
                  <input class="first-row" type="text" name="code_name" id="code_name" placeholder="Code Name:" required>

                  <input class="first-row" type="text" id="fullname" name="fullname" pattern="^([a-zA-Z]+)\s*,\s*([a-zA-Z]+)\s+([a-zA-Z]+)$" placeholder="Last Name, First Name M.I." required>
                
                  <input class="first-row" type="text" id="position" name="position" placeholder="Position:" required>

                  <input class="first-row" type="text" id="dept" name="dept" placeholder="Department:" required>
                </span>

                <span class="form">
                    <label for="stmt">I hereby request for</label>

                    <input type="radio" id="w/pay" name="requestFor" value="W/Pay" class="request-for" checked>
                    <label for="requestFor"> W/Pay</label>

                    <input type="radio" id="w/opay" name="requestFor" value="W/OPay" class="request-for">
                    <label for="requestFor"> W/OPay</label>

                  <span id="nature_of_leave">
                    <label for="natures_of_leave">NATURE OF LEAVE:</label>
                    <select id="natures_of_leave" name="natures_of_leave">
                        <option value="Sick Leave">Sick Leave</option>
                        <option value="Accident Leave">Accident Leave</option>
                        <option value="Bereavement Leave">Bereavement Leave</option>
                        <option value="Maternity Leave">Maternity Leave</option>
                        <option value="Vacation Leave">Vacation Leave</option>
                        <option value="Paternity Leave">Paternity Leave</option>
                        <option value="Seminar Leave">Seminar Leave</option>
                        <option value="Union Leave">Union Leave</option>
                    </select><br><br>
                  </span>

                  <label for="periodFrom">PERIOD COVERED (Inclusive Dates) From:</label>
                  <input type="date" id="periodFrom" name="periodFrom" required>

                  <label for="periodTo">To:</label>
                  <input type="date" id="periodTo" name="periodTo" required>

                  <label for="days">No. Of days:</label>
                  <input id="days" type="number" id="days" name="days" min="1" required><br><br>

                  <textarea rows="4" cols="50" name="reason" placeholder="Reason:" required></textarea><br><br>

                  <input type="checkbox" id="certified" name="certified" value="I hereby certify that the above statements are true and correct to the best of my knowledge. I understand that a false statement may disqualify me for benefits." required>
                  <label for="certified">I hereby certify that the above statements are true and correct to the best of my knowledge. I understand that a false statement may disqualify me for benefits.</label>
                </span>

                <span class="form">
                  <p><em><strong>NOTE:</strong> Rules on filling of request for leave of absence, as provided for in the Company House Code of Discipline, must be observed.</em></p>
                </span>

                <span id="button" class="form">
                  <input type="submit" value="Submit"></input>
                </span>
            </form></span>
          </div>
        </div>
    </div>
</body>
</html>