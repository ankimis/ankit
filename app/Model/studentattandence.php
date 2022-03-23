<?php
class Studentattandence extends AppModel{
    public $usetable ='studentattandences';
    public function isOwnedBy($student, $user) {

        return $this->field('id', array('id' => $student, 'id' => $user)) !== false;

    }
}
?>