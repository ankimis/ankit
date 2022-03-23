<?php

use Cake\Controller\Component\SessionComponent;

class ProductsController extends AppController{ 


    function beforeFilter() {
        parent::beforeFilter();
            $this->layout = 'mylayout';
      }

      
    public $helpers = array('html','flash');
    public $components=array('session');

    



    public function index(){
        $this->set('products',$this->Product->find('all'));
    }
    public function view($id) {
        
        if (!$id) {
            throw new NotFoundException(__('Invalid product'));
        }
        // pr($id); echo "tggfg";
       
        $product = $this->Product->findById($id);
        // pr($product);   
        if (!$product) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->set('product',$product);
    }
            public function add(){
            if ($this->request->is('post')){
            $this->Product->create();
            // $Product=$this->request->data('Product');
            // $Product['modelname'] = implode(",",$Product['modelname']);
            
            //   print_r($Product);exit;

             if ($this->Product->save($this->request->data['Product'])) {
                $this->Session->setFlash(__('Your user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Your post has Not been saved.'));
            }
        }   

        public function edit($id = null) {
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $Product = $this->Product->findById($id);
            if (!$Product) {
                throw new NotFoundException(__('Invalid post'));
            }

            if ($this->request->is(array('user', 'put'))) {
                $this->Product->id = $id;
            // print_r($this->request->data);
            //     exit();
                if ($this->Product->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been updated.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Flash->error(__('Unable to update your post.'));
            }

            if (!$this->request->data) {
                $this->request->data = $Product;
    
        }
        }
        public function delete($id) {
            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }
        
            if ($this->Product->delete($id)) {
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

    
    

  
    
         
