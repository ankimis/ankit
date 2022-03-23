<h1>Edit Books</h1>
<?php
echo $this->Form->create('Book',array('type' => 'file'));
echo $this->Form->input('book_name');
echo $this->Form->input('book_img',['type'=>'file']);
echo $this->Form->input('book_price');
echo $this->Form->input('book_author'); 

echo $this->Form->end('Save Post');
?>