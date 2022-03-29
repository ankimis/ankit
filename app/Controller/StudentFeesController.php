<?php
App::uses('AppController', 'Controller');

use Cake\Controller\Component\SessionComponent;

class StudentFeesController extends AppController
{


  function beforeFilter()
  {
    parent::beforeFilter();
    $this->layout = 'studentlayout';

    $this->loadModel('Studentfees');
  }

  public $helpers = array('html', 'flash');
  public $components = array('Session', 'flash');

  public function index()
  {
    
    $this->loadModel('Student');
    // $this->loadModel('Studentfeeshe');
    $studentdata = $this->Student->find('all', array('conditions' => array('Student.student_isdelete' => '0'), 'order' => array('id' => 'asc')));

    $this->set('Students', $studentdata);
  }

  public function fees($id)
  {
    if (!$id) {
      throw new NotFoundException(__('Invalid student'));
    }
       

    // $studentattandence = $this->Studentattandence->findById($id);
    // pr($id);
    // exit;
    $this->set('student_id',$id);
    if ($this->request->is('post')) {
      // $this->Studentfeeshe->create();
      $Studentfees = $this->request->data('Studentfees');
      // $Product['modelname'] = implode(",",$Product['modelname']);

    //  pr($Studentfees);
    //   exit; 

      if ($receipt = $this->Studentfees->save($Studentfees)) {
        $this->Session->setFlash(__('Your Studentsfeesh has been saved.'));
        // pr($receipt);exit;
        // $receipt=5;
        $this->redirect(array('action' => 'receipt', $receipt['Studentfees']['student_id']));
      }
      $this->Session->setFlash(__('Your Studentsfeesh has Not been saved.'));
    }
  }
 

   
  public function receipt($student_id = null)
  {
    //   if (!$id) {
    //     pr($id);exit;
    //     throw new NotFoundException(__('Invalid recepit no'));
    // } 
    // pr($id);exit;
    // $use = array ('Studentfees');
    // pr($use);exit;\
    if (!$student_id) {
      throw new NotFoundException(__('Invalid Student'));
  }
 
   

    $studentdata = $this->Studentfees->findById($student_id);
      // pr($studentdata);
      // exit;
    // $studentdata =$this->request->data['Studentfees']['registration_feesh'];

    // pr($this->request->data['Studentfees']['registration_feesh']);exit;

    if (!$studentdata) {
      throw new NotFoundException(__('Invalid Student'));
    }


    $this->set('studentdatas', $studentdata);
  }
    public function isAuthorized($user) {
      // All registered users can add posts
      if ($this->action === 'fees') {
          return true;
      }

      // The owner of a post can edit and delete it
      if (in_array($this->action, array('receipt', 'delete'))) {
          $studentfessId = (int) $this->request->params['pass'][0];
          if ($this->Studentfess->isOwnedBy($studentfessId, $user['id'])) {
              return true;
          }
      }

      return parent::isAuthorized($user);
  }
  public function printable($id)
  {
      // (retrieve your data from the database here)
      // ...
      $studentdata = $this->Studentfees->findById($id);


      $this->layout = true;
      $this->autoRender = true;
      // echo $contrato['Content']['text'];
      // echo @$contrato['Content']['text'];
      $this->set('studentdatas', $studentdata);  
      // <!-- //        <script>window.print()</script> -->
            
            
       
  }
}