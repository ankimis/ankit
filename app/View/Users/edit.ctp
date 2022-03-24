<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username',array('value'=>$username));
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden','value'=>$id));
echo $this->Form->end('Save User');

?> 
<?php $this->end(); ?>