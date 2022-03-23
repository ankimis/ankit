<head>
    <style>


    </style>
    <?php
    echo     $this->html->css('product1');
    ?>


</head>
<h1> companys products</h1>
<p><?php echo $this->Html->link('Add Product', array('action' => 'add')); ?></p>
<table class="table1">
    <tr>
        <th>Id</th>
        <th>email</th>  
        <th>action</th>
        <th>Created</th>
        <th>modified</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <!--     pr($this->request->data['Search']);exit;?> -->
    <tr>
        <td><?php echo $this->Html->link($product['Product']['id'],array('action'=>'view',$product['Product']['id'])); ?></td>
        
        <td>
            <?php
                echo $this->Html->link(
                     
                    $product['Product']['email'],array('action' => 'view', $product['Product']['id']));
            ?>
        </td>
       
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $product['Product']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $product['Product']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $product['Product']['created']; ?>
        </td>
        <td>
            <?php echo $product['Product']['modified']; ?>
        </td>
    </tr>
    <?php endforeach; ?>    
</table>