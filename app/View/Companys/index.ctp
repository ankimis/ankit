<!-- File: /app/View/Posts/index.ctp -->
<head>
<style>
body {
    background-image: url('img/download.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    font-family:'lucida grande',verdana,helvetica,arial,sans-serif;
    font-size:100%;
    position:absolute;
    top:0px;
    right:0px;
    bottom:0px;
    left:0px;
    

}

    </style>
 <?php echo     $this->html->css('my',['block=>true']);?>
</head>

<h1>Blog companys</h1>
<p><?php echo $this->Html->link('Add Company', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th><address></th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
<div class="bg1">
<?php
//  echo $this->Time->daysAsSql('Aug 22, 2011', 'Aug 25, 2011', 'created');
//  echo $this->Time->convert(date('y-m-d'), 'Asia/Calcutta');

date_default_timezone_set("Asia/Calcutta"); 

 echo date('d-m-Y h:i:s a');
?>
<div>

    <?php foreach ($companys as $company): ?>
    <tr>
        <td><?php echo $company['Company']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $company['Company']['name'],
                    array('action' => 'view', $company['Company']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $company['Company']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $company['Company']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $company['Company']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>