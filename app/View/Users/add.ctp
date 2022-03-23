<!-- app/View/Users/add.ctp -->
<style>
    <?php
    echo $this->Html->css(array('sweetalert/sweetalert'));
    ?>
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
                            echo $this->Form->input('password');
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
    // function myFunction() {
        // document.getElementById("demo").innerHTML = "YOU CLICKED ME!";

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


    // };
</script>


<?php $this->end(); ?>