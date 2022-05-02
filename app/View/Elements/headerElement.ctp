<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php echo $this->Html->charset(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <title>

    </title>

    <?php echo $this->fetch('css'); ?>
          <style>
      
        .nav {
          list-style-type: none;
          margin: 0;
          padding: 0;
          /* overflow: hidden; */
          background-color: #24f305c9;
          position: -webkit-sticky;
          position: sticky;
          top: 0;
        }

        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
        }

        .sticky+.content {
          padding-top: 60px;
        
        }
          </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <?php
    echo     $this->html->css('mystyle1');
    ?>
 
    <?php echo $this->fetch('script'); ?>
    <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

</head>

<body>
    <?php $this->start('header'); ?>
    <div id="navbar">
        <nav class=" animate__animated animate__bounceInRight navbar navbar-expand-lg navbar-dark bg-primary ">

            <ul>
                <div class="container-fluid nav">
                    <a class="navbar-brand " href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Student
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li> <?php echo $this->Html->link('View Student', array("controller" => 'Students', 'action' => 'index'), array('class' => "dropdown-item")); ?></li>
                                    <li>
                                        <?php echo $this->Html->link('Add Student', array("controller" => 'Students', 'action' => 'add'), array('class' => "dropdown-item")); ?>
                                        <!-- <a class="dropdown-item" href="http://localhost/ankitcake/students/add">Add</a> -->
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <li class="nav-item">
                            <?php echo $this->Html->link('Stu_Atte', array("controller" => 'StudentAttandences', 'action' => 'index'), array('class' => "nav-link")); ?>

                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('Comapany', array("controller" => 'Companys', 'action' => 'index'), array('class' => "nav-link")); ?>

                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('login', array("controller" => 'Users', 'action' => 'login'), array('class' => "nav-link")); ?>

                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('Student fess', array("controller" => 'StudentFees', 'action' => 'index'), array('class' => "nav-link")); ?>

                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link('logout', array("controller" => 'Users', 'action' => 'logout'), array('class' => "nav-link")); ?>

                        </li>

                    </div>
            </ul>
    </div>
    </div>
    </nav>
   
</body>

<?php $this->end(); ?>

</html>
