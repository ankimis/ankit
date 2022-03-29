<style>
      .myform{  border: 2px solid #0d6efd;
    padding: 31px;
    margin: 20px;
      }
      #content {
    position: absolute;
    right: 450px;
    width: 500px
 
}
    </style>
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    Students Feesh Application
  </div>

<div class="container">
  
   
    
     
    <?php
        echo $this->Form->create('Studentfees',array('type' => 'file'),['class'=>'myform']);
        ?>
    
    
    <?php

        echo $this->Form->input('student_id', ['label' =>false,'type' => 'hidden', 'value'=>$student_id]);
         
        ?>
  
  <div class="mb-3">
    <label for="registration_feesh" class="form-label">registration_feesh</label>
    <?php

        echo $this->Form->input('registration_feesh', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
        ?>
  </div>
  <div class="mb-3">
    <label for="tution_feesh" class="form-label">Student tution_feesh</label>
    <?php

        echo $this->Form->input('tution_feesh', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
        ?>
  </div>
  <div class="mb-3">
    <label for="monthly_feesh" class="form-label">Student monthly_feesh</label>
    <?php

        echo $this->Form->input('monthly_feesh', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
        ?>
  </div>
  <div class="mb-3">
    <label for="exam_feesh" class="form-label">Student exam_feesh</label>
    <?php

        echo $this->Form->input('exam_feesh', ['label' =>false,'type' => 'text', 'class' => 'form-control']);
        ?>
  </div>
  
 
  
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <?php
            echo $this->Form->button('Save Studentfees', ['class' => 'btn btn-primary']);

            $this->Form->end();
            ?>
 
</form>
    
  </div>
 
</div> 
</div> 