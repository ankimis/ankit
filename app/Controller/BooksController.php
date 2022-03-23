<?php
use Cake\Controller\Component\SessionComponent;

class BooksController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('books', $this->Book->find('all'));
    }
    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $Book = $this->Book->findById($id);
        if (!$Book) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('book', $Book);
    }

    public function add() {
        if ($this->request->is('post')) {
            // pr($this->request->data); 
            


            $book = $this->Book->create(); 
            
            $book['book_name'] = $this->request->data('Book')['book_name'] ;
            $book['book_price'] = $this->request->data('Book')['book_price'] ;
            $book['book_author'] = $this->request->data('Book')['book_author']; 
            $book['book_img'] = $this->request->data('Book')['book_img'];
            pr($book['book_img']);exit;

            if($this->request->data('Book')['book_img']['error']=='0')
            {   
                if(file_exists('img/uploads/book_images/' . $this->request->data('Book')['book_img']['name']))
                {
                    $this->Session->setFlash('A file called ' .$this->request->data('Book')['book_img']['name']. ' already exists');
                } else
                 {
                    move_uploaded_file($this->request->data('Book')['book_img']['tmp_name'],'img/uploads/book_images/' . $this->request->data('Book')['book_img']['name']);
                    $book['book_img'] = $this->request->data('Book')['book_img']['name']; 
                }
               
 
            }
            
                 if ($this->Book->save($book))
            {
                $this->Session->setFlash(__('Your Book has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
         $this->Session->setFlash(__('Your Book has Not been saved.'));
        }
    }


    // public function edit($id = null) {
    //     if (!$id) {
    //         throw new NotFoundException(__('Invalid Book'));
    //     }    
    //     $Book = $this->Book->findById($id);
    //     if (!$Book) {
    //         throw new NotFoundException(__('Invalid Book'));
    //     }




    // }

    //edit value
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Book'));
        }
        //  $delete_rec=$this->Book->find('all',array(
        //    'conditions' => array('id' => $id)));
        // pr($delete_rec);
        // exit();
    
        $Book = $this->Book->findById($id);
        if (!$Book) {
            throw new NotFoundException(__('Invalid Book'));
        }
        // pr($Book);
        // exit();
        $delete_rec=$this->Book->find('all',array(
            'conditions' => array('id' => $id)));
            // pr($delete_rec);
            // exit();
            
            $del_image=$delete_rec['0']['Book']['book_img'];
            unlink('img/uploads/book_images/'.$del_image);

        if ($this->request->is(array('put')))
        {
            $book = $this->Book->create(); 
           
            $book['book_name'] = $this->request->data('Book')['book_name'] ;
            $book['book_price'] = $this->request->data('Book')['book_price'] ;
            $book['book_author'] = $this->request->data('Book')['book_author']; 
            // pr( $this->request->data('Book')['book_img']['error']);exit;

            if($this->request->data('Book')['book_img']['error']=='0')
            {   
                if(file_exists('img/uploads/book_images/' . $this->request->data('Book')['book_img']['name']))
                {
                    $this->Session->setFlash('A file called ' .$this->request->data('Book')['book_img']['name']. ' already exists');
                } else 
                {
                    move_uploaded_file($this->request->data('Book')['book_img']['tmp_name'],'img/uploads/book_images/' . $this->request->data('Book')['book_img']['name']);
                    $book['book_img'] = $this->request->data('Book')['book_img']['name']; 
  
                }
                
                
            }
            $this->Book->id = $id;
            if ($this->Book->save($book)) 
            {
              
               
             $this->Session->setFlash(__('Your book has been updated.'));
             return $this->redirect(array('action' => 'index'));
            }
            
            $this->Session->setFlash(__('Unable to update your book.'));

          
            
        }
    
        if (!$this->request->data)
        {
            $this->request->data = $Book;
            // pr($Book);

            // exit();

        }
        //if 
    }


    //delete value
     public function delete($id) {
        // if ($this->request->is('get')) {
        //     throw new MethodNotAllowedException();
        // // }
         $delete_rec=$this->Book->find('all',array(
            'conditions' => array('id' => $id)));
        if ($delete_rec)
         {
        
            $del_image=$delete_rec['0']['Book']['book_img'];
            unlink('img/uploads/book_images/'.$del_image);
           
            $this->Book->delete($id);
            
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
    
        return $this->redirect(array('action' => 'index'));
    }
    



}
?>