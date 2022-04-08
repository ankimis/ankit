<?php

use CakeController\Component\SessionComponnent;
class StudentsController extends AppController{


    function beforeFilter() {
        parent::beforeFilter();
            $this->layout = 'studentlayout';
      }


    public$helpers=array('html','flash');
    public$components=array('Session');

    public function index() {
        $status_array=array('All'=>'All','0'=>'Actived','1'=>'Deactived');
        if ($this->request->is('post')){
            // pr($this->request->data['Search']);exit;
            $student_status = $this->request->data['Search']['student_isdelete'];
            $student_name = $this->request->data['Search']['student_name'];
            $from_date = $this->request->data['Search']['from_date'];
            $to_date = $this->request->data['Search']['to_date'];
            $condition_array=array();
            // if($student_status != 'All'){
            //     // pr($student_status);exit;
            //       $condition_array['Student.student_isdelete'] = $student_status;
            // }
            
            if($student_name != ''){
                 $condition_array['Student.student_name LIKE'] ="%$student_name%";
               
            }
            // pr($student_name);exit;
            // $from_date= date_format(date_create($from_date),"Y-m-d H:i:s");     
            // $to_date= date_format(date_create($to_date),"Y-m-d H:i:s"); 
            // pr($from_date);exit;



//             SELECT * FROM public.students
// where (student_name like '%d%') and (student_isdelete = '0') and (created BETWEEN '2022-02-15' AND '2022-02-17' )
// ORDER BY id ASC 
            // if( $from_date != ''){
                // $condition_array = array('Student.created  <=' => $from_date, 'Student.created  >=' => $to_date);
                // $condition_array=array('Student.created BETWEEN ? AND ?' => array($from_date, $to_date));
                // pr($condition_array);exit;
                // $condition_array = array(
                //     'Student.created' => array(
                //         'Student.created  >=' => $from_date, 
                //         'Student.created  <=' => $to_date
                //     ));
            // }   
            // pr($condition_array);exit;
            $Students = $this->Student->find('all',array('conditions' => $condition_array));
            // pr($Students);exit;
            $Search['student_name']=$student_name;
            $Search['student_isdelete']= $student_status; 
            // $Search['from_date']= $from_date; 
            // $Search['to_date']= $to_date;
            $this->set('Search',$Search);
        }else{            

                
            // $this->set('Students',$this->Student->find('all',array('conditions' => array('Student.student_isdelete' => '1') )));
            $Students = $this->Student->find('all',array('order' => array('id' => 'asc')));
        }
       
        $this->set('status_array',$status_array);    
        $this->set('Students',$Students);
    }

    public function view($id){
         
        if (!$id) {
            throw new NotFoundException(__('Invalid Student'));
        }
        // pr($id); echo "tggfg";
       
        $student = $this->Student->findById($id);
        // pr($product);   
        if (!$student) {
            throw new NotFoundException(__('Invalid Student'));
        }
        $this->set('student',$student);
    }
    public function add(){
        if ($this->request->is('post')){
        $this->Student->create();
        // $Product=$this->request->data('Product');
        // $Product['modelname'] = implode(",",$Product['modelname']);
        
        // $Student = $this->request->data('Student');
        // $Student['student_name'] = implode(",",$Student['student_name']);
        // print_r($Student);exit;
        $Student['student_name'] = $this->request->data('Student')['student_name'] ;
        $Student['student_mobile'] = $this->request->data('Student')['student_mobile'] ;
        $Student['student_address'] = $this->request->data('Student')['student_address'] ;
        $Student['student_email'] = $this->request->data('Student')['student_email'] ;
        $Student['student_gender'] = $this->request->data('Student')['student_gender'] ;
        $Student['student_image'] = $this->request->data('Student')['student_image'] ;

        // pr($Student['student_image']);exit;
        // pr( $this->request->data('Student')['student_image']['error']);exit;
        $Student['student_isdelete'] = 0;
        // exit;
        
        if($this->request->data('Student')['student_image']['error']=='0')
        {   
            if(file_exists('img/uploads/student_images/' . $this->request->data('Student')['student_image']['name']))
            {
                $this->Session->setFlash('A file called ' .$this->request->data('Student')['student_image']['name']. ' already exists');
            } else
             {
                move_uploaded_file($this->request->data('Student')['student_image']['tmp_name'],'img/uploads/student_images/' . $this->request->data('Student')['student_image']['name']);
                $Student['student_image'] = $this->request->data('Student')['student_image']['name']; 
            }
           

        }else{
            $this->Session->setFlash(__('Your student_image has Not been saved.'));  
        }
         if ($this->Student->save($Student)) {
            $this->Session->setFlash(__('Your Student has been saved.','flash_success'));
            // $this->Flash->success('Your Student has been saved.');
            return $this->redirect(array('action' => 'index'));
        }else{
        $this->Session->setFlash(__('Your Student has Not been saved.'));
        }
    }
    }
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Student'));
        }
       
        $Student = $this->Student->findById($id);
        if (!$Student) {
            throw new NotFoundException(__('Invalid Student'));
        }

        if ($this->request->is(array('put'))) {
            $this->Student->create();
        // $Product=$this->request->data('Product');
        // $Product['modelname'] = implode(",",$Product['modelname']);
        
        // $Student = $this->request->data('Student');
        // $Student['student_name'] = implode(",",$Student['student_name']);
        // print_r($Student);exit;

        $newUserData = array();
        $newUserData['student_name'] = $this->request->data('Student')['student_name'] ;
        $newUserData['student_mobile'] = $this->request->data('Student')['student_mobile'] ;
        $newUserData['student_address'] = $this->request->data('Student')['student_address'] ;
        $newUserData['student_email'] = $this->request->data('Student')['student_email'] ;
        $newUserData['student_gender'] = $this->request->data('Student')['student_gender'] ;
        $newUserData['student_image'] = $this->request->data('Student')['student_image'] ;

        // pr($Student['student_image']);exit;
        // pr( $this->request->data('Student')['student_image']['error']);exit;
        
        
        if($this->request->data('Student')['student_image']['error']=='0')
        {   
            if(file_exists('img/uploads/student_images/' . $this->request->data('Student')['student_image']['name']))
            {
                $this->Session->setFlash('A file called ' .$this->request->data('Student')['student_image']['name']. ' already exists');
            } else
             {

                $filename = 'student_image_'.$id.'_'.time().'.jpg';
                move_uploaded_file($this->request->data('Student')['student_image']['tmp_name'],'img/uploads/student_images/' . $filename);
                $newUserData['student_image'] = $filename; 
                $delete_rec=$this->Student->find('all',array(
                    'conditions' => array('id' => $id)));
                    // pr($delete_rec);
                    
                    
                    $del_image=$delete_rec['0']['Student']['student_image'];
                     @unlink('img/uploads/student_images/'.$del_image);
            }
        }else{
            // pr($this->request->data('Student')['student_image']);
            // exit();
        }

            // $Student = $this->request->data['Student'];
            $newUserData['student_isdelete'] = 0;
            $newUserData['id'] = $id; 
        // print_r( $newUserData);
        //     exit();
        // $this->Student->id = $id;
            if ($this->Student->save($newUserData)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
                $this->request->data = $Student;

        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
    $data['id']=$id;
    $data['student_isdelete']=1;
        if ($this->Student->save( $data)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id),'flash_success')
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
    
        return $this->redirect(array('action' => 'index'));
    }
    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
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
