<!-- File: /app/View/Posts/index.ctp -->

<?php $this->start('css'); ?>
<style>
  .status {
    padding: 5px 10px;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
  }

  .active-status {
    background: green;
  }

  .deactive-status {
    background: red;
  }

  .align-items-center {
    align-items: center !important;
    margin: 20px;
    background-color: blanchedalmond;
  }

  .index_profile_img{
    width: 80px;
  }
  
</style>
<?php $this->end(); ?>


<?php $this->start('script'); ?>

<?php $this->end(); ?>
<?php
echo $this->Form->create('Search', ['class' => ' animate__bounceIn row gx-3 gy-2 align-items-center ']);
?>
<div class="col-sm-2">
  <label class="visually-hidden" for="student_name">Name</label>
  <!-- <input type="text" class="form-control" id="specificSizeInputName" placeholder="Student_name"> -->
  <?php echo $this->Form->input('student_name', ['label' => false, 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Student name', 'id' => 'specificSizeInputName']); ?>
</div>
<div class="col-sm-2">
  <label class="visually-hidden" for="from_date">From Date</label>
  <?php echo $this->Form->input('from_date', ['label' => false, 'type' => 'text', 'class' => 'form-control', 'id' => 'from_datepicker', 'placeholder' => 'Select From Date']); ?>
</div>
<div class="col-sm-2">
  <label class="visually-hidden" for="to_date">To Date</label>
  <?php echo $this->Form->input('to_date', ['label' => false, 'type' => 'text', 'class' => 'form-control', 'id' => 'to_datepicker', 'placeholder' => 'Select To Date']); ?>
</div>
<div class="col-sm-2">
  <?php
  echo $this->Form->input('student_isdelete', array(
    'label' => false,
    'class' => "form-select",
    'id' => 'specificSizeSelect',
    'options' => $status_array,
    'selected' => 'All'
  ));
  ?>

</div>
<!-- <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
      <label class="form-check-label" for="autoSizingCheck2">
        Remember me
      </label>
    </div>
  </div> -->
<div class="col-sm-2">
  <?php
  echo $this->Form->button('Search', ['class' => 'btn btn-primary']);

  $this->Form->end();
  ?>
</div>

<div class="container">

  <div class="row align-items-center">
    <div class="col">
      <div class="col ">
        <table class="table table-striped table-hover table-bordered align-middle">
          <thead>
            <tr>
              <th scope="col">Student sid</th>
              <th scope="col">Student image</th>
              <th scope="col">Student name</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
              <th scope="col">Created</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($Students as $student) : ?>
              <tr>
                <th scope="row"><?php
                                echo $this->Html->link(
                                  $student['Student']['id'],
                                  array('action' => 'view', $student['Student']['id'])
                                );
                                ?></th>
                <td> 
                  <?php echo $this->Html->image('uploads/student_images/'.$student['Student']['student_image'], ['alt' => $student['Student']['student_name'], 'class' => 'img-fluid index_profile_img']);?>
                </td>
                <td><?php
                    echo ($student['Student']['student_name']);
                    ?></td>
                <td> <span class="status <?php
                                          echo ($student['Student']['student_isdelete']) ? 'deactive-status' : 'active-status';
                                          ?>"> <?php
                                                echo ($student['Student']['student_isdelete']) ? 'Deactive' : 'Active';
                                                ?></span>
                </td>
                <td>
                  <?php echo $this->Html->link('Edit', array('action' => 'edit', $student['Student']['id']), array('class' => "btn btn-primary")); ?>
                  <?php

                  if ($student['Student']['student_isdelete'] == 0) {
                    echo $this->Form->postLink(
                      'Delete',
                      array('action' => 'delete', $student['Student']['id']),
                      ['class' => 'btn btn-danger'],
                      array('confirm' => 'Are you sure?')
                    );
                  }
                  ?>
                </td>
                <td> <?php 
                  $date=date_create($student['Student']['created']);
                  echo date_format($date,"y-m-d H:i:s"); 
                   ?></td>
              </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
      <div class="col">
      </div>
    </div>

  </div>

  <?php $this->start('script'); ?>

  <script>
    $(function() {
      $('#from_datepicker').datepicker({
        format: 'dd-mm-yyyy',
        clearBtn: true
      });

      $('#to_datepicker').datepicker({
        format: 'dd-mm-yyyy',
        clearBtn: true
      });
    });
  </script>
  <?php $this->end(); ?>