

<h1><?php echo h($book['Book']['book_name']); ?></h1>
<h1><?php echo h($book['Book']['book_price']); ?></h1>
<h1><?php echo h($book['Book']['book_author']); ?></h1>
<h1><?php echo h($book['Book']['book_img']); ?></h1>
<h1><?php echo h($book['Book']['book_author']); ?></h1>

<?php echo $this->Html->image('uploads/book_images/'.$book['Book']['book_img']) ?>


<p><small>Created: <?php echo $book['Book']['created_timestamp']; ?></small></p>