<!-- File: /app/View/Posts/view.ctp -->
<?php  print $session->flash("flash", array("element" => "alert"));?>
<h1><?php echo $user['User']['name']; ?></h1>   
<h1><?php echo $user['User']['password']; ?></h1>

<p><small>Created: <?php echo $user['User']['created']; ?></small></p>
 