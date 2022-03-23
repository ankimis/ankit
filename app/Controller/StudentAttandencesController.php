<?php       
  App::uses('AppController', 'Controller');
use Cake\Controller\Component\SessionComponent;
class StudentAttandencesController extends AppController{ 
  

    function beforeFilter() {
        parent::beforeFilter();
            $this->layout = 'studentlayout';
      }

      
      public$helpers=array('html','flash');
      public$components=array('Session');

    public function index(){

        $this->loadModel('Student');
        $this->loadModel('Studentattandence');
        $studentdata=$this->Student->find('all',array('conditions' => array('Student.student_isdelete' => '0'),'order' => array('id' => 'asc') ));
        
       $todays_present_std =  $this->Studentattandence->find('all',array('conditions' => array('Studentattandence.date' => date('d-m-Y'),) ));
         
       $mydata = array();
    //    pr($mydata);
    //    ex    it;    
        for($inc=0;$inc<count($todays_present_std);$inc++ ){
            $mydata[$todays_present_std[$inc]['Studentattandence']['student_id']]=$todays_present_std[$inc]['Studentattandence'];
        }
       
    //    pr($mydata); exit;     
         
         $this->set('todays_present_std',$todays_present_std);
         $this->set('mydata',$mydata);
        if ($this->request->is('post')){     
            $present_student = $this->request->data['present_student'];
            $insert_std_arr = array();
            for($i = 0 ;$i<count($present_student);$i++){
                if($present_student[$i]!=0){
                    $temp['student_id'] = $present_student[$i];
                    $temp['date'] = date('d-m-Y');
                    $temp['time'] = date('H:i:s');
                    $insert_std_arr[] = $temp;
                }
            }   
            if ($this->Studentattandence->saveAll($insert_std_arr)) {
                $this->Session->setFlash(__('Your studentattandence has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Your studentattandence has Not been saved.'));
        }


        $this->set('Students',$studentdata);
    }
    public function view($id) {
        
        if (!$id) {
            throw new NotFoundException(__('Invalid student'));
        }
        // pr($id); echo "tggfg";           
       
        $studentattandence = $this->Studentattandence->findById($id);
        // pr($product);   
        if (!$studentattandence) {
            throw new NotFoundException(__('Invalid student'));
        }
        $this->set('studentattandence',$studentattandence);
    }
            public function add(){
            if ($this->request->is('post')){
            $this->Studentattandence->create();
            // $Product=$this->request->data('Product');
            // $Product['modelname'] = implode(",",$Product['modelname']);
            
            //   print_r($Product);exit;

             if ($this->Studentattandence->save($this->request->data['Studentattandence'])) {
                $this->Session->setFlash(__('Your student has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Your student has Not been saved.'));
            }
        } 
        public function isAuthorized($user) {
            // All registered users can add posts
            if ($this->action === 'index') {
                return true;
            }
        
            // The owner of a post can edit and delete it
            if (in_array($this->action, array('edit', 'delete'))) {
                $studentId = (int) $this->request->params['pass'][0];
                if ($this->Student->isOwnedBy($studentId, $user['id'])) {
                    return true;
                }
            }
        
            return parent::isAuthorized($user);
        }  

}

?>