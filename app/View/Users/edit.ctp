<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username',array('value'=>$username));
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden','value'=>$id,'onclick'=>'return isConfirm()'));
echo $this->Form->end('Save User');

?>
<?php $this->start('script'); ?>
<script>
        swal({
              title: "Are you sure?",
              text: "you can always edit later!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Yes, edit the data!",
              cancelButtonText: "No, cancel please!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm) {

              if (isConfirm) {
                    console.log(isConfirm);
                    swal("Edited!", "data has been edited.", "success");
              } else {
                    console.log(isConfirm);
                    swal("Cancelo", "data has not been edited :)", "error");
              }
        });
    </script>


<?php $this->end(); ?>