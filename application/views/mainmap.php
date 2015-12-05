<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpS-SFTmSsHxb_mfvXPEZQs_j2xLjsjIs"
  type="text/javascript"></script>
    
  </head>
  <body>
    <div id="canvas"/>
    </div>
    <div>
    <?php echo form_open('dashboard/reg_road'); ?>
    <label for="street_name">Street Name</label>
    <input id="street_name" type="text" value="" name="street_name" />
    <input type="submit" value="submit">
    <?php echo form_close();?> 
    </div>
    <br>
    <label for="latitude">Latitude:</label>
		<input id="latitude" type="text" value="" />
		<label for="longitude">Longitude:</label>
		<input id="longitude" type="text" value="" />
  </body>
  <script type="text/javascript" src="assets/js/map.js"></script>
</html>