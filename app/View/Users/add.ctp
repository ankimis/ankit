<!-- app/View/Users/add.ctp -->
<style type="text/css">
    <?php
    echo $this->Html->css(array('sweetalert/sweetalert'));
    ?>
    
        input:focus:valid
        {
            border: 1px solid #64C364;
            box-shadow: 0 0 4px #64C364;
        }
</style>
 


<div class="container">

    <div class="row align-items-center">
        <div class="col">
        </div>
        <div class="col ">
            <div class="users form">
                <?php echo $this->Form->create('User'); ?>
                <fieldset>
                    <legend><?php echo __('Add User'); ?></legend>
                    <div class="mb-3">
                        <label for="studentname" class="form-label"> </label>
                        <?php
                        echo $this->Form->input('username');
                        ?>
                        <div class="mb-3">
                            <label for="studentpassword" class="form-label"> </label>
                            <?php
                            echo $this->Form->input('password',array('required pattern' => "^(?=.*\d)[0-9a-zA-Z]{6,}$",'title' =>"Password should be a minimum of 6 character long and must contain at least one number"));
                            ?>
                            <div>
                                <div class="mb-3">
                                    <label for="studentpassword" class="form-label"> </label>
                                    <?php
                                    echo $this->Form->input('role', array(
                                        'options' => array('admin' => 'Admin', 'author' => 'Author')
                                    ));
                                    ?>
                                    <div>

                </fieldset>

                <?php
                echo $this->Form->button('Submit', ['id' => 'demo', 'class' => 'btn btn-primary', 'onclick' => 'myFunction()']);

                $this->Form->end();
                ?>


            </div>
            <div class="col">
            </div>
        </div>
        </body>
    </div>
</div>
<?php $this->start('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="sweetalert2.min.js"></script> -->

<script>
    //   swal("Are you sure you want to do this?", {
    //   buttons: ["Oh noez!", "Aww yiss!"],
    // });



    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    });

    function myFunction() {
        document.getElementById("demo").innerHTML = "YOU CLICKED ME!";

        //   const Swal = require('sweetalert2');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })


    };
</script>


<?php $this->end(); ?>