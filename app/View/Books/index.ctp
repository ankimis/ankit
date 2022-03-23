<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog Book</h1>
<p><?php echo $this->Html->link('Add Book', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>price</th>
        <th>Author</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Action</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?php echo $book['Book']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $book['Book']['book_name'],
                    array('action' => 'view', $book['Book']['id'])
                );
            ?>
        </td>
        <td><?php echo $book['Book']['book_img']; ?></td>
        <td><?php echo $book['Book']['book_price']; ?></td>
        <td><?php echo $book['Book']['book_author']; ?></td>
        <td><?php echo $book['Book']['created_timestamp']; ?></td>
        <td><?php echo $book['Book']['modified_timestamp']; ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $book['Book']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $book['Book']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $book['Book']['created_timestamp']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>