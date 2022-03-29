<?php $this->start('css'); ?>

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
    </style>




</head>




<?php $this->end(''); ?>
<head>  
    <title>Using JavaScript how to Create Captcha</title>  
    <script type="text/javascript">  
        /* Function to Generat Captcha */  
        function GenerateCaptcha() {  
            var chr1 = Math.ceil(Math.random() * 10) + '';  
            var chr2 = Math.ceil(Math.random() * 10) + '';  
            var chr3 = Math.ceil(Math.random() * 10) + '';  
  
            var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;  
            document.getElementById("txtCaptcha").value = captchaCode  
        }  
  
        /* Validating Captcha Function */  
        function ValidCaptcha() {  
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);  
            var str2 = removeSpaces(document.getElementById('txtCompare').value);  
  
            if (str1 == str2) return true;  
            return false;  
        }  
  
        /* Remove spaces from Captcha Code */  
        function removeSpaces(string) {  
            return string.split(' ').join('');  
        }  
    </script>  
  
</head>
  
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <!-- <img src="lotus.webp" style="width: 185px;" alt="logo"> -->
                                    <?php
                                    // <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
                                    echo $this->Html->image('lotus.webp', ['alt' => 'logo', 'style' => 'width: 185px;']);
                                    ?>
                                    <h4 class="mt-1 mb-5 pb-1", style="transform: skew(8deg, 2deg)">We are The Student Team</h4>
                                </div>



                                <p style="text-shadow: 2px 2px #ffe700">Please login to your account</p>
                                <?php
                                // echo $this->Flash->render('auth'); 
                                ?>
                                <?php echo $this->Form->create('User'); ?>

                                <div class="form-outline mb-4">
                                    <!-- <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address"/> -->
                                    <!-- <label class="form-label" for="username">Username</label> -->
                                    <?php echo $this->Form->input('username', array('class' => 'form-control', 'id' => 'form2Example11', 'placeholder' => "Please enter your username ")); ?>
                                </div>

                                <div class="form-outline mb-4">
                                    <!-- <input type="password" id="form2Example22" class="form-control" /> -->
                                    <!-- <label class="form-label" for="form2Example22">Password</label> -->
                                    <?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'form2Example11', 'placeholder' => "Please enter your password")); ?>
                                </div>


                                
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button> -->
                                     
                                   <body onload="GenerateCaptcha();"> 
                                   <div class="form-outline mb-4"></div> 
                                   <div style="  width: 400px;">  
                                        
                                 
                                       Enter the Captcha    
                                       <input type="text" id="txtCompare" />  
                                       <input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern" />  
   
                                       <?php echo $this->Form->button('Refresh', ['class' => 'btn btn-primary btn-block fa-lg  ','style' =>'transform: skew(5deg, 2deg)','id' =>'btnrefresh','value' => 'Check' , 'onclick'=>'GenerateCaptcha()']); ?>
                                 
                                       <br />  
                                       <br />  
                                   </div>  
                               </body> 
                               <br />  
                                       <br />  

                                    <?php echo $this->Form->button('Login', ['class' => 'btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 button','style' =>'transform: skew(5deg, 2deg)','id' =>'btnValid','value' => 'Check' , 'onclick'=>'alert(ValidCaptcha())']);
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
</section>
 
<section class="">
  <!-- Footer -->
  <footer class="bg-secondary text-white text-center text-md-start bg-blue">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>