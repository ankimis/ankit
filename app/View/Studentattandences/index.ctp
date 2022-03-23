 
<!-- File: /app/View/Posts/index.ctp -->

<?php $this->start('css'); ?>
<!-- <head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head> -->
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
 

  .index_profile_img {
    width: 80px;
  }

  .time {
    position: absolute;
    right: 500px;
  }

  .date {
    position: absolute;
    left: 400px;
    color: #75454e;
  }

  .button {
    text-align: center;
  }
  .std_attend_section{
    margin:30px 10px ;
  }

  .mycheckbox{
    width: 50px;
    height: 50px;
  }

  .text-green{
    color: green;
  }
  .card{
    transition: width 2s, height 4s;
  }
</style>
<?php $this->end(); ?>

<!-- <h1 class="animate__animated animate__backInRight">An animated element</h1>  -->
<section class="animate__animated animate__backInRight   std_attend_section">
  <div class="container"> 
    <?php echo $this->Form->create('Studentattandence', ['class' => 'row gx-3 gy-2 align-items-center ']); ?>
    <div class="row justify-content-center">
      <div class=" col-md-8 align-self-center"> 
        <div class="card">
          <div class="card-title text-center"><h3><?php echo date('d-m-Y H:i:s')?></h3></div>
          <div class="card-body">
            <table class="table table-striped table-hover table-bordered align-middle text-center align-middle">
              <thead>
                <tr>
                  <th scope="col">Students id</th>
                  <th scope="col">Student image</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Studentattandence</th> 
                </tr>
              </thead>
              <tbody>
                <?php foreach ($Students as $student) : ?>
                  <tr>
                    <td scope="row">
                      <?php
                            echo $this->Html->link(
                                    $student['Student']['id'],
                                      array('action' => 'view', $student['Student']['id'])
                                    );
                      ?>
                    </td>

                    <td>
                      <?php echo $this->Html->image('uploads/student_images/' . $student['Student']['student_image'], ['alt' => $student['Student']['student_name'], 'class' => 'img-fluid index_profile_img']); ?>
                    </td>
                    <td><?php
                    echo ($student['Student']['student_name']);
                    ?></td>

                    <td scope="row">

                      <?php
                          if (!array_key_exists($student['Student']['id'], $mydata)) {
                            echo $this->Form->checkbox(null, array('name' => 'present_student[]', 'type' => 'checkbox', 'class'=>'mycheckbox','value' => $student['Student']['id']));
                          } else {
                            echo '<h5 class="text-green">'. $mydata[$student['Student']['id']]['time'].'</h5>';
                          }
                      ?>
                    </td>
 
                  </tr> 
                <?php endforeach; ?>
              </tbody>
            </table> 
          </div>
        </div>
      </div> 
    </div>
    <div class="button">
      <?php echo $this->Form->button('Save Studentattandence', ['class' => 'btn btn-primary']);
            $this->Form->end();
      ?>
    </div>

  </div>
</section>




<?php $this->start('script'); ?>

<?php $this->end(); ?>