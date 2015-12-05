<!DOCTYPE html>
<html>
  <head>
    <?php $streetname="Hello"; ?>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css')?>">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpS-SFTmSsHxb_mfvXPEZQs_j2xLjsjIs"
  type="text/javascript"></script>
    
  </head>
  <body>
    <div id="canvas"/>
    </div>
    <div>
    <h4>Street Name: <?php echo $streetname; ?></h4>
    </div>
    <h4>Path A</h4>
    <?php echo form_open('dashboard/reg_road'); ?>
    <label for="latitude">Latitude:</label>
		<input id="latitude" type="text" value="" />
		<label for="longitude">Longitude:</label>
		<input id="longitude" type="text" value="" />
    <input type="submit" value="Submit" />
    <?php echo form_close();?> 
  </body>
  <script type="text/javascript" src="<?php echo base_url('assets/js/map.js')?>"></script>
</html>