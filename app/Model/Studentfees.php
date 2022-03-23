<?php
class Studentfees extends AppModel{
    public $usetable ='studentfees';
    public function isOwnedBy($studentfess, $user) {

        return $this->field('id', array('id' => $studentfess, 'id' => $user)) !== false;

    }
}
?>