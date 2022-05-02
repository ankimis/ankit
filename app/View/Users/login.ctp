<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body onload="GenerateCaptcha()">



  <!-- Trigger/Open The Modal -->


  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <?php
      // <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
      echo $this->Html->image('lotus.webp', ['alt' => 'logo', 'style' => 'width: 185px;']);
      ?>
    </div>

  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    console.log(modal);
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    function popup() {
      modal.style.display = "block";
    }


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html><?php $this->start('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<head>
  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #fccb90;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }

    .button {

      width: 400px;
    }

    .img {
      position: relative;
      width: 100%;
    }

    input:focus:valid {
      border: 1px solid #64C364;
      box-shadow: 0 0 4px #64C364;
      background: url(../img/download.png) no-repeat left;
      /* background-attachment: re; */
      background-position: right;
      background-size: 20px;
      background-repeat: no-repeat;
      background-position: 20px 20px;

    }

    input:focus:invalid {
      border: 1px solid #F5192F;
      box-shadow: 0 0 4px #F5192F;
      /* background: pink; */
      background: url(../img/imagesinvalid.png);
      /* background-attachment: re; */
      background-position: right;
      background-size: 20px;
      background-repeat: no-repeat;
      background-position: 20px 20px;
    }
  </style>




</head>




<?php $this->end(''); ?>

<head>
  <title>Using JavaScript how to Create Captcha</title>
  <script type="text/javascript">
    /* Function to Generat Captcha */
    function GenerateCaptcha() {

      modal.style.display = "block";

      var chr1 = Math.ceil(Math.random() * 10) + '';
      var chr2 = Math.ceil(Math.random() * 10) + '';
      var chr3 = Math.ceil(Math.random() * 10) + '';

      var str = new Array(4).join().replace(/(.|$)/g, function() {
        return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"]();
      });
      var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;
      document.getElementById("txtCaptcha").value = captchaCode;

      localStorage.setItem('captcha', captchaCode);



      /* 
                  const params = new FormData();
                  params.append('captchaCode', captchaCode);
                  const xhr = new XMLHttpRequest();
                  xhr.open('post', "http://localhost/ankitcake/users/captcha", true);
                  xhr.send(params); 
                  xhr.onload = (e) => {
                   var data = JSON.parse(xhr.responseText);

                   
                    console.log('data---->',data);
                  //return data;
                  }; */



    }

    /* Validating Captcha Function */
    function ValidCaptcha(e) {
      e.preventDefault();
      var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
      var str2 = removeSpaces(document.getElementById('txtCompare').value);

      if (str1 == str2) return true;
      return false;
    }

    /* Remove spaces from Captcha Code */
    function removeSpaces(string) {
      return string.split(' ').join('');
    }

    function showPwd(id, el) {
      let x = document.getElementById(id);
      if (x.type === "password") {
        x.type = "text";
        el.className = 'fa fa-eye-slash showpwd';
      } else {
        x.type = "password";
        el.className = 'fa fa-eye showpwd';
      }
    }
  </script>
  <?php $this->start('script'); ?>

  <?php $this->end(); ?>

</head>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" style = "    padding: 100px;  padding-bottom: 100px;">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class=" animate__bounceout text-center">
                  <!-- <img src="lotus.webp" style="width: 185px;" alt="logo"> -->
                  <?php
                  // <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
                  echo $this->Html->image('lotus.webp', ['alt' => 'logo', 'style' => 'width: 185px;']);
                  ?>
                  <h4 class="mt-1 mb-5 pb-1" , style="transform: skew(8deg, 2deg)">We are The Student Team</h4>
                </div>



                <p style="text-shadow: 2px 2px #ffe700">Please login to your account</p>
                <?php
                // echo $this->Flash->render('auth'); 
                ?>
                <?php echo $this->Form->create('User', ['onsubmit' => "return validateForm()", 'class' => ' animate__bounceIn   align-items-center ']); ?>

                <div class="form-outline mb-4">
                  <!-- <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address"/> -->
                  <!-- <label class="form-label" for="username">Username</label> -->
                  <?php echo $this->Form->input('username', array('class' => 'form-control', 'id' => 'form2Example11', 'placeholder' => "Please enter your username ", 'style' => 'background-position: right')); ?>
                </div>

                <div class="form-outline mb-4">
                  <!-- <input type="password" id="form2Example22" class="form-control" /> -->
                  <!-- <label class="form-label" for="form2Example22">Password</label> -->
                  <?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'passwd', 'placeholder' => "Please enter your password", 'required pattern' => "^(?=.*\d)[0-9a-zA-Z]{6,}$", 'title' => "Password should be a minimum of 6 character long and must contain at least one number", 'style' => 'background-position: right')); ?>
                  <i class="fa fa-eye showpwd" onClick="showPwd('passwd', this)" style="margin-left: 280px; cursor: pointer;position: absolute;top: 405px;"></i>
             </div>
                <div class=" text-center pt-1 mb-5 pb-1">
                  <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button> -->

                  <body onload="GenerateCaptcha();">
                    <div class="form-outline mb-4"></div>
                    <div style="  width: 400px;">


                      Enter the Captcha
                      <input type="text" id="txtCompare" />
                      <!-- <input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern" />   -->
                      <?php echo $this->Form->input('Captcha ', array('class' => 'form-control', 'id' => 'txtCaptcha', 'style' => "text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern")); ?>
                      <?php echo $this->Form->button('Refresh', ['type' => 'button', 'class' => 'btn btn-primary btn-block fa-lg  ', 'style' => 'transform: skew(5deg, 2deg)', 'id' => 'btnrefresh', 'value' => 'Check', 'onclick' => 'GenerateCaptcha()']); ?>

                      <br />
                      <br />
                    </div>
                  </body>
                  <br />
                  <br />

                  <?php echo $this->Form->button('Login', ['id' => "loginSubmit", 'class' => 'btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 button', 'style' => 'transform: skew(5deg, 2deg)', 'value' => 'Check']);
                  $this->Form->end();
                  ?>
                  <a class="text-muted" href="forget">Forgot password?</a>
                </div>

                <div class="d-flex align-items-center justify-content-center pb-4">
                  <p class="mb-0 me-2">Don't have an account?</p>
                  <button type="button" class="btn btn-outline-danger">Create new</button>
                </div>



              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php $this->start('script'); ?>
<script>
  function validateForm() {


    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('txtCompare').value);

    if (str1 == str2) {
      return true;
    } else {
      alert('Enter valid CAPTCHA');
      return false;
    }


  }
</script>
<?php $this->end(''); ?>