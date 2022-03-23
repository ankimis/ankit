<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Company</h1>
<?php
echo $this->Form->create('Company');
echo $this->Form->input('name');
echo $this->Form->input('address', array('rows' => '3'));
echo $this->Form->radio('gender', ['Masculine', 'Feminine', 'Neuter']);
$options = array(1 => 'ONE', 'TWO', 'THREE');
$selected = array(1, 3);
echo $this->Form->input('ModelName', 
    array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected)
);
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Company');
?>