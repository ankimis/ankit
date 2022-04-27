<?php
use Cake\Controller\Component\SessionComponent;
use Cake\I18n\Time;

class CompanysController extends AppController {
    
    public $helpers = array('Html', 'Form','js');
    public $components = array('Session');
    
   
    /* public function afterLogin() {
        App::uses('CakeTime', 'Utility');
        echo CakeTime::convert(time(), new DateTimeZone('Asia/Calcutta'));
        // App::uses('CakeTime', 'Utility');
// echo CakeTime::daysAsSql('Aug 22, 2011', 'Aug 25, 2011', 'created');
// $now = Time::now();
//   $now = Time::now();
// $now->i18nFormat();
//  echo CakeTime::isToday($dateString, $timezone = NULL);
// CakeTime::wasWithinLast($timeInterval, $dateString);
        if (CakeTime::isToday($this->Auth->user('date_of_birth'))) {
            // greet user with a happy birthday message
            $this->Session->setFlash(__('Happy birthday you...'));
        }   
    } */

    public function index() {
        $this->set('companys', $this->Company->find('all'));
    }
        public function view($id) {
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $Company = $this->Company->findById($id);
            if (!$Company) {
                throw new NotFoundException(__('Invalid post'));
            }
            $this->set('company', $Company);
        }

    public function add() {
        if ($this->request->is('post')) {
            $this->Company->create();
            $Company = $this->request->data('Company');
            $Company['modelname'] = implode(",",$Company['modelname']);
            // print_r($Company);exit;
       
            if ($this->Company->save($Company)) {
                $this->Session->setFlash(__('Your user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
         $this->Session->setFlash(__('Your post has Not been saved.'));
        }
    }

    //edit value
    public function edit($id = null) { 
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $Company = $this->Company->findById($id);
        if (!$Company) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        if ($this->request->is(array('user', 'put'))) {
            $this->Company->id = $id;
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $Company;
        }
    }

//delete value
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
    
        if ($this->Company->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
    
        return $this->redirect(array('action' => 'index'));
    }

}
?>