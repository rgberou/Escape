<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/post.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body class="bbg">
  
  <div class="wrapper container">
    <?php foreach ($posts as $post) { ?>
     <div class="row">

      <div class="col-md-2"></div>

      <div class="col-md-8 bg shdwdiv">
         <div class="bgrow">
            <h3 class ="fontUser green">@<?php echo $post->account_username;?></h3>
            <span class=" glyphicon glyphicon-time green"></span><span class="fontT"> Posted on <?php echo $post->date_posted;?> at <?php echo $post->time_posted;?></span>
            <br>
            <span class="postpic postpic-addon">
               <img src="<?php echo $address."/ESCMOBILE/".$post->image_path ?>" class="col-md-3s">
            </span> 
             <h5><?php echo $post->caption;?></h5>
             <span class="loc"><span class=" glyphicon glyphicon-map-marker green"></span><span class="fontS"><?php echo $post->location;?> </span></span>
         </div>
     
          
      </div>



      <div class="col-md-2"></div>

    </div>
    <?php } ?>

  </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>