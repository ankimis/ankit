<html>

<head>
    <style>


    </style>
    <?php
    echo     $this->html->css('mystyleadd');
    ?>


</head>
<h1>Add product</h1>
<div class="add"> my first work </div>
<br><br>

<?php
echo $this->Form->create('Product', array('type' => 'file', 'class' => 'my1'));
?>
<?php
echo $this->Form->input('email', array('class' => 'my2', 'label' => 'enter your email =>'));
?>
<br><br><?php
        echo $this->Form->input('password', array('class' => 'my3', 'label' => 'enter your password =>'));
        ?>
<br><br>
<?php
echo $this->Form->end('Save Product', array('class' => 'my4'));
?>
</div>

</html>