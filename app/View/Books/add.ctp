<h1>Add Books</h1>
<head>
    <style>
        body {
    background-image: url('img/download(1).jpg');
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

</head>
<?php
echo $this->Form->create('Book',array('type' => 'file'));
echo $this->Form->input('book_name');
echo $this->Form->input('book_img',['type'=>'file']);
echo $this->Form->input('book_price');
echo $this->Form->input('book_author'); 


echo $this->Form->end('Save Post');
?>