<!-- File: /app/View/Posts/add.ctp -->

<head>
    <style>


    </style>
    <div class="border">
        <?php
        echo     $this->html->css('student_add');
        ?>

        <h1 class="s1">Students Ragistration Form</h1>
        <?php
        echo $this->Form->create('Student',['class'=>'form']);
        ?>
        <?php
        echo $this->Form->input('student_name', ['type' => 'text', 'class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('student_mobile', ['type' => 'text', 'class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('student_address', ['class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('student_email', ['type' => 'email', 'class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('gender', array(
            'options' => array('male', 'female'),
            'empty' => 'choose gender'
        ));
        ?>
      
        
        <br> 
        <div class="btn btn-outline-success">
            <?php
            echo $this->Form->end('Save Student', ['class' => 'button']);
            ?>
        </div>
    </div>


    