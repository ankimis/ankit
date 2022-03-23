<!-- File: /app/View/Posts/add.ctp -->

<head>
  <style>
    /* background-image: url('img/observation-urban-building-business-steel_1127-2397.jpg');*/
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      position: -webkit-sticky;
      /* Safari */
      position: sticky;
      top: 0;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .active {
      background-color: pink;
    }

    h1 {
      /* background: #fff; */
      color: palevioletred;
      font-size: 100%;
      width: fit-content;
      width: 100px;
    }

    /* /* .md{
    
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;

 } */
    div.form-control {

      text-justify: 100px;

    }

    #content {
      background: unset;
      clear: both;
      color: #333;
      padding: 10px 20px 40px 20px;
      overflow: unset;
    }

    #content {
      /* background: #fff; */
      clear: both;
      /* color: #333; */
      padding: 10px 20px 40px 20px;
      /* overflow: auto; */
    }

    .bg2 {

      width: 100%;
      width: 500px;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid red;
      border-radius: 4px;
      border-color: #fff;
      background: gold;
      text-align: center;
      cursor: pointer;
      text-shadow: 2px 2px 8px #FF0000;
      text-overflow: ellipsis;
      transition-delay: 2s;


    }

    .bg2:hover {

      background: red;
      box-shadow: -1px 5px 5px 1px #797979;
      color: #fff;
      font-weight: 700;
      width: 900px;
      transition-timing-function: ease-in-out;
    }

    .hover:hover {
      background-color: #FF0000;
    }

    .afte::after {
      content: "-rembre this";

    }
  </style>

  <?php
  echo     $this->html->css('mystyle', ['block=>true']);
  ?>


  <?php
  echo $this->Html->script('jquery'); // Include jQuery library
  ?>
</head>

<h1>Add Company</h1>
<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
  Click me to display Date and Time.</button>
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="smiley.gif" alt="Smiley" width="32" height="32">

<p id="demo" class="bg11"></p>
<h2 class="logo">࿐ཽ༵༆༒ॐ नमः शिवाय༒༆࿐ཽ༵</h2>



<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a class="hover" href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>

<?php
// <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
echo $this->Html->image('smiling-face-with-hearts_1f970.png', ['alt' => 'CakePHP', 'class' => 'image_flud']);
?>
<div class="bg7">
  <?php
  // <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
  echo $this->Html->image('1859752012.jpg', ['alt' => 'CakePHP', 'class' => 'image_flu']);
  ?>
</div>
<div class="bg4">SHUBH</div>
<div class="bg5">LABH</div>
<div class="bg2" ,>
  <?php

  //  echo $this->Time->daysAsSql('Aug 22, 2011', 'Aug 25, 2011', 'created'); 
  //  echo $this->Time->convert(date('y-m-d'), 'Asia/Calcutta');
  date_default_timezone_set("Asia/Calcutta");

  echo date('d-m-Y h:i:s a');
  ?>
</div>
<div class="md">
  <?php
  echo $this->Form->create('Company', ['class' => 'bg_image']);
  ?>
  <div class="btn btn-succes"><?php
                              echo $this->Form->input('name', array('placeholder' => 'Enter your name', 'class' => 'afte'));
                              ?>
    <?php
    echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Enter your address'));
    ?>
    <?php
    echo $this->Form->radio('gender', ['Masculine', 'Feminine', 'Neuter']);
    // echo $this->Form->radio(
    //    'gender',
    //    [
    //        ['value' => 'male', 'text' => 'Red' ],
    //        ['value' => 'female', 'text' => 'Blue'],
    //    ]
    // ); 
    ?>
    <?php
    echo $this->Form->input('birth_dt', array(
      'label' => 'Date of birth',
      'dateFormat' => 'DMY',
      'minYear' => date('Y') - 00,
      'maxYear' => date('Y') - 20
    ));
    ?>
  </div>
  <!-- <?php
        // $options = [
        //    'Value 1' => 'Label 1',
        //    'Value 2' => 'Label 2   '
        // ];
        // echo $this->Form->select('field', $options, [
        //    'multiple' => 'checkbox'
        // ]);

        ?> -->
  <div class="bg6"> </div>
  <div class="bg3"></div>
  <?php
  echo $this->Form->select(
    'city',
    ['pune', 'etawah', 'goa', 'mumbai', 'auraiya'],
    ['empty' => '(please select your city)']
  );


  ?>

  <?php
  $options = array('ONE', 'TWO', 'THREE');
  $selected = array(1, 3);
  echo $this->Form->input('modelname', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
  ?>
  <?php
  // PHP code to illustrate the working of explode()

  // $str1 = '1,2,3,4,5';
  // $arr = explode(',',$str1);
  // foreach($arr as $i)
  // echo($i.'<br>');
  ?>

  <div class="btn btn-primary">
    <?php
    echo $this->Form->end('Save Post');

    ?>
  </div>