<!-- File: /app/View/Posts/view.ctp -->

<?php $this->start('css'); ?>
<style>
div.flash_success{
    border: 2px solid #0d6efd;
    padding: 31px;
    margin: 20px;

}
</style>


<?php $this->end(); ?>
<?php
                echo $this->Html->link(
                    $student['Student']['id'],
                    array('action' => 'view', $student['Student']['id'])
                );
                ?>
<h1><?php echo h($student['Student']['student_name']); ?></h1>
<h1><?php echo h($student['Student']['student_mobile']); ?></h1>
<h1><?php echo h($student['Student']['student_address']); ?></h1>
<h1><?php echo h($student['Student']['student_email']); ?></h1>
<h1><?php echo h($student['Student']['student_gender']); ?></h1>
<h1><?php echo h($student['Student']['student_image']); ?></h1>


<p><small>Created: <?php echo $student['Student']['created']; ?></small></p>

 