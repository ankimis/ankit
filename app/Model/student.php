<?php
class Student extends AppModel{
    public $usetable ='students';


    public function isOwnedBy($student, $user) {

        return $this->field('id', array('id' => $student, 'id' => $user)) !== false;

    }
}



?>