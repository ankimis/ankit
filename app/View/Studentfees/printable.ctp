<?php
$this->layout = false;
$this->autoRender = true;
echo @$contrato['Content']['text']; ?>
<script>
    window.print()
</script>
<div class="container mt-5 mb-5">
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="upper p-4">
                <?php foreach ($studentdatas as $studentdata) : ?>
                    <?php
                   echo $this->Html->link(
                     $this->Html->image('images.png',array('height' => '70', 'width' => '70')),
                     array(
                         'controller' => 'StudentFees',  
                         'action' => 'printable',
                         $id =  $studentdata['student_id'],
                         // pr($id),
                         0 => $id 
                     ), array('escape' => false)
                   );
                    ?>
                    <div class="d-flex justify-content-between">
                        <div class="amount"> <span class="text-primary font-weight-bold">Student id ==</span>
                            <?php
                            echo $studentdata['student_id'];
                            ?>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="add"> <span class="font-weight-bold d-block"> </span> <span class="font-weight-bold d-block"> </span> <small> </small> </div> <img src="https://i.imgur.com/HKne8Oc.jpg" width="60" class="rounded-circle">
                        </div>
                    </div>
                    <hr>
                    <div class="delivery">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">registration_fees </span> </div> <span class="font-weight-bold"> </span>
                            <?php echo ($studentdata['registration_feesh']); ?>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Student tution_fees</span> </div> <span class="font-weight-bold"> </span>
                            <?php echo ($studentdata['tution_feesh']); ?>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Student monthly_fees</span> </div> <span class="font-weight-bold"> </span>
                            <?php echo ($studentdata['monthly_feesh']); ?>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2">Student exam_fees</span> </div> <span class="font-weight-bold"> </span>
                            <?php echo ($studentdata['exam_feesh']); ?>
                        </div>
                    </div>

                    <hr>

                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2"> Student Total_fess</span> </div> <span class="font-weight-bold"> </span>
                            <?php
                            echo ($studentdata['registration_feesh'] + $studentdata['tution_feesh'] + $studentdata['monthly_feesh'] + $studentdata['exam_feesh']);
                            ?>
                        </div>
                    </div>
                    <div class="transaction mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center"> <i class="fa fa-check-circle-o"></i> <span class="ml-2"> Current Date &Time</span> </div> <span class="font-weight-bold"> </span>
                            <?php

                            $date = date_create($studentdata['created']);
                            echo date_format($date, "y-m-d H:i:s");
                            ?>
                        </div>
                    </div>
            </div>
            <div class="lower bg-primary p-4 py-5 text-white d-flex justify-content-between">
                <div class="d-flex flex-column"> <span>Cost including service charges</span> <small>This nuber may change depending on replair and your home conditions</small> </div>
                <h3>$345,642</h3>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div><?php
