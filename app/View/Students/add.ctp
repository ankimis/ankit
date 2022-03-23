<head>
<?php $this->start('css'); ?>
<style>
  .myform{ 
    border: 2px solid #0d6efd;
    padding: 31px;
    margin: 20px;
      }
    </style>
</head>
<?php $this->end(); ?>
<body>
<div class="container">
  
            <div class="row align-items-center">
              <div class="col"> 
              </div>
              <div class="col ">
              
    <?php
        echo $this->Form->create('Student',array('type' => 'file' ,'class'=>'myform'));
        ?>
            
            <div class="mb-3">
              <label for="student_name" class="form-label">Student Name</label>
                      <?php

                          echo $this->Form->input('student_name', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
                      ?>
            </div>
            <div class="mb-3">
              <label for="student_name" class="form-label">Student Mobile</label>
                    <?php

                        echo $this->Form->input('student_mobile', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
                        ?>
            </div>
            <div class="mb-3">
              <label for="student_name" class="form-label">Student Address</label>
                      <?php

                          echo $this->Form->input('student_address', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
                          ?>
            </div>
            <div class="mb-3">
              <label for="student_name" class="form-label">Student Email</label>
                        <?php

                            echo $this->Form->input('student_email', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
                            ?>
            </div>
            <div class="mb-3">
            <label for="student_gender" class="form-label">Student Gender</label>
                        <?php
                              echo $this->Form->input('student_gender', array(
                                  'label' =>false,

                                  'class'=>"form-select",
                                  'options' => array('male', 'female'),
                                  'empty' => 'choose gender'
                              )); 
                              ?>
            </div>
            <div class="mb-3">
              <label for="student_image" class="form-label">Student Image</label>
                        <?php

                            echo $this->Form->input('student_image', ['label' =>false,'type' => 'file', 'class' => 'form-control']);
                            ?>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <?php
            echo $this->Form->button('Save Student', ['class' => 'btn btn-primary']);

            $this->Form->end();
            ?>
 
    </form>
    </div>
    <div class="col"> 
    </div>
  </div>
 </body>
</div>  