<!-- File: /app/View/Posts/add.ctp -->
echo "ankit" ?>
<head>
    <style>


    </style>
    <div class="border">
        

        
        <?php
        echo $this->Form->create('Studentattandence',['class'=>'form']);
        ?>
        <?php
        echo $this->Form->input('id', ['type' => 'text', 'class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('student_id', ['type' => 'text', 'class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('date', ['class' => 'form1']);
        ?>
        <br><br>
        <?php
        echo $this->Form->input('time', ['type' => 'email', 'class' => 'form1']);
        ?>
        <br><br>
       