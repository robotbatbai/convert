<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product Detail Form</h2>
  <form action="source.php" method="post">
    <div class="form-group">
      <label for="email">Title </label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group"> 
    
      <label class="col-sm-2" for="email">flight time </label>
      <input class="col-sm-2" type="text" class="form-control" name="flight_time">
  
      <label class="col-sm-2" for="email">control range </label>
      <input class="col-sm-2" type="text" class="form-control" name="control_range">

      <label class="col-sm-2" for="email">speed</label>
      <input class="col-sm-2" type="text" class="form-control" name="speed">
    </div>
    <div class="form-group">

      <label class="col-sm-2" for="email">video resolution</label>
      <input class="col-sm-2" type="text" class="form-control" name="video_resolution">

      <label class="col-sm-2" for="email">onboard camera</label>
      <input class="col-sm-2" type="text" class="form-control" name="onboard_camera">

      <label class="col-sm-2" for="email">GPS </label>
      <input class="col-sm-2" type="text" class="form-control" name="gps">
    </div>
    <div class="form-group">
      <label for="email">Short Description </label>
      <textarea class="form-control" id="short_description" name="short_description" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Review Video</label>
      <input type="text" class="form-control" placeholder="input youtube video ID " name="review_video">
    </div>
    <h2> Image </h2>
    <?php for ($i=1; $i <11 ; $i++) { ?>
      <div class="form-group">
      <label for="email">Description Image <?php echo $i ?> </label>
      <input type="text" placeholder="input image url" class="form-control" name="image[]">
    </div>
     <?php } ?>

     <h2> Product Spec </h2>
     <div class="form-group">
      <?php for ($i=1; $i <11 ; $i++) { ?>
        <input class="col-sm-6" type="text" placeholder="Spec Name " class="form-control" name="spec_name<?php echo $i; ?>"> 
        <input class="col-sm-6" type="text" placeholder="Spec Description " class="form-control" name="spec_description[]"> 
      <?php } ?>     
    </div>
     
    <h2> Product Include </h2>
     <div class="form-group">
      <?php for ($i=1; $i <11 ; $i++) { ?>
        <input class="col-sm-6" type="text" placeholder="Include Name " class="form-control" name="include_name[]"> 
        <input class="col-sm-6" type="text" placeholder="Include Description " class="form-control" name="include_description[]"> 
      <?php } ?>     
    </div>

   <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
