<head>
    <style>


    </style>
    <?php
    echo     $this->html->css('view');
    ?>


</head>

<h1> companys products</h1>
<?php
date_default_timezone_set("Asia/Calcutta"); 

 echo date('d-m-Y h:i:s a');
?>
<!-- <table class="view3">
    <tr>
        <th>Id</th>
        <th>email</th>
        <th>Created</th>
    </tr> -->
    <div>
        <!-- add image -->
        <div class="view1">
            
                            <?php
                            // <!-- <img src="1859752012.jpg" alt="Smiley face" width="42" height="42" style="float:right"> -->
                            echo $this->Html->image('product1.jpg', ['alt' => 'CakePHP', 'class' => 'image_flud']);
                            ?>
        </div>
        <div class="view2">
            <tr>
            <h2>user id</h2>
                <td>

                    <h1 class=""><?php echo ($product['Product']['id']); ?></h1>
                </td>
                <h6>user email</h6>
                <td>
                    <h1><?php echo ($product['Product']['email']); ?></h1>
                </td>
                <h2>user created date</h2>
                <td>
                    <p><small>Created: <?php echo $product['Product']['created']; ?></small></p>
                </td>
            </tr>
           
        </div>
    </div>
<div class="pragraph1"><h1>Shopify and Dynamics 365 Business Central Integration</h1>
           <p>
            Shopify enables users to easily start selling their products online by offering a suite of services including Customer Engagement, Marketing, Shopping, and Payment capabilities. Shopify is used and trusted by over 1 million businesses around the world, and it could have immense benefits for your eCommerce business.

            Dynamics 365 Business Central is a leading cloud solution hosted by Microsoft that is accessible anywhere, anytime and from any device.

            If you are interested in boosting your product sales while expediting your sales processes, the Shopify & Dynamics 365 Business Central Integration is right for you!</p>
</div>

 