<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="forms.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script type=”text/javascript” src=”https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js”></script>
</head>

<body>
        <!-- Navigation -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">
                <a class="navbar-brand logo-text" href="index.html">GotGadGet</a>

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">Mobile</a>
                            
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="Apple.html">Apple</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="Samsung.html">Samsung</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="OPPO.html">OPPO</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="realme.html">realme</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tablets.html">Tablets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Watches.html">Watches</a>
                        <li class="nav-item">
                            <a class="nav-link" href="Monitor.html">Monitor <br></a>
                        </li>

                    </ul>
                </div> 
            </div> 
        </nav> 

  <div class="wrapper2">
    <div class="title">
      Donate
    </div>
    <div class="form">
      <form action='donateconnect.php' method="POST">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name='fname' id='fname' placeholder="Enter First Name">
        </div>
        <br>
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name='mname' id='mname' placeholder="Enter Middle Name">
        </div>
        <br>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name='lname' id='lname' placeholder="Enter Last Name">
        </div>
        <br>
        <div class="inputfield">
          <label>Gender<br> (Required)</label>
          <div class="custom_select">
            <select name='sex' id='sex' required>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="prefer not to say">Prefer not to say</option>
            </select>
          </div>
        </div>
        <br>
        <div class="inputfield">
          <label>Email Address<br> (Required)</label>
          <input type="text" class="input" name='email' id='email' placeholder="Enter Email Address" required>
        </div>
        <br>
        <div class="inputfield">
          <label>Phone Number<br> (Required)</label>
          <input type="number" class="input" name='connum' id='connum' placeholder="Start with 09" required>
        </div>
        <br>
        <div class="inputfield">
          <label>Complete Address<br> (Required)</label>
          <input type="text" class="input" name='city' id='city' placeholder="Enter City/Municipality/Town" required>
        </div>
        <br>
        <div class="inputfield">
          <label>Type<br> (Required)</label>
          <div class="custom_select">
            <select name='ddlModels' id='ddlModels' onchange="EnableDisableTextBox(this)" required>
              <option disabled selected>Type of Donation</option>
              <option id="other" value="In Kind">In-Kind</option>
              <option id="others" value="Monetary">Monetary</option>
            </select>
          </div>
        </div>
        <br>
        <div class="inputfield">
          <label>Description <br>(In-Kind)</label>
          <div class="custom_select">
            <select name='txtOther' id='txtOther' required>
              <option disabled selected>Select</option>
              <option value="Clothes">Clothes</option>
              <option value="Ready to eat foods">Ready-to-eat foods</option>
              <option value="Toiletries">Toiletries</option>
              <option value="Rice">Rice</option>
              <option value="Face Masks">Face masks</option>
              <option value="School supplpies">School supplies</option>
              <option value="First Aid">First Aid</option>
              <option value="Medicine">Medicine</option>

            </select>
          </div>
        </div>
        <br>
        <div class="inputfield">
          <label>Amount (Monetary)</label>
          <input type="number" class="input" placeholder="Enter Amount" name='txtOthers' id='txtOthers'>
        </div>

        <br>
        <div class="inputfield terms">
          <input type="hidden" name="anon" id="anon" value="0">
          <input type="checkbox" name="anon" id="anon" value="1">Keep my Identity Anonymous.</input>
        </div>

        <div class="submit-button">

          <form action="" method="POST">
            <input type="submit" name="donate" id='donate' value="Submit">
          </form>
        </div>
    </div>
  </div>

  <footer>
    <span>WeAid: Helping Those in Need | 2022 All rights reserved.</span>
  </footer>

  <script src="script.js"></script>
</body>

</html>