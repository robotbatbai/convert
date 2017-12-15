<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Create Product Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
   	<?php  function getTextAreaNewLine($string){
   		$array = explode(PHP_EOL, $string);
   		foreach ($array as $key => $value) {
   			echo $value."<br />";
   		}
   	} ?>
      <div class="container">
         <h2>Code is generated</h2>
         <textarea class="form-control" id="short_description" rows="50">
		<section id="first_description">
			<div id="short_description"><?php echo $_POST["title"]; ?></div>
			<div id="function_description">
			<div id="Description_div_10">
			<div id="Description_div_11">
			<div id="Description_div_12"><span id="Description_span_13"></span></div>
			<div id="Description_div_14">
			<div id="Description_div_15">Flight time</div>
			<div id="Description_div_16">
			<div id="Description_div_17"><?php echo $_POST["flight_time"]; ?></div>
			<div id="Description_div_18">mins<sup id="SUP_19">[1]</sup></div>
			</div>
			</div>
			</div>
			<div id="Description_div_20">
			<div id="Description_div_21"><span id="Description_span_22"></span></div>
			<div id="Description_div_23">
			<div id="Description_div_24">Control range</div>
			<div id="Description_div_25">
			<div id="Description_div_26"><?php echo $_POST["control_range"]; ?></div>
			<div id="Description_div_27">km<sup id="SUP_28">[2]</sup></div>
			</div>
			</div>
			</div>
			<div id="Description_div_29">
			<div id="Description_div_30"><span id="Description_span_31"></span></div>
			<div id="Description_div_32">
			<div id="Description_div_33">Speed</div>
			<div id="Description_div_34">
			<div id="Description_div_35"><?php echo $_POST["speed"]; ?></div>
			<div id="Description_div_36">km/h</div>
			</div>
			</div>
			</div>
			<div id="Description_div_37">
			<div id="Description_div_38"><span id="Description_span_39"></span></div>
			<div id="Description_div_40">
			<div id="Description_div_41">Video resolution</div>
			<div id="Description_div_42">
			<div id="Description_div_43"><?php echo $_POST["video_resolution"]; ?></div>
			<div id="Description_div_44"></div>
			</div>
			</div>
			</div>
			<div id="Description_div_45">
			<div id="Description_div_46"><span id="Description_span_47"></span></div>
			<div id="Description_div_48">
			<div id="Description_div_49">Onboard Camera </div>
			<div id="Description_div_50">
			<div id="Description_div_51"><?php echo $_POST["onboard_camera"]; ?></div>
			<div id="Description_div_52">M<sup id="SUP_53">[3]</sup></div>
			</div>
			</div>
			</div>
			<div id="Description_div_54">
			<div id="Description_div_55"><span id="Description_span_56"></span></div>
			<div id="Description_div_57">
			<div id="Description_div_58">GPS </div>
			<div id="Description_div_59">
			<div id="Description_div_60"><?php echo $_POST["gps"]; ?></div>
			<div id="Description_div_61">Directions</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</section>
		<?php getTextAreaNewLine($_POST["short_description"]); ?>
		<!-- split -->
		<?php if ($_POST["review_video"] != "") { echo '<p><iframe src="https://www.youtube.com/embed/'.$_POST["review_video"].'" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></p>';} ?>
		<?php $image_list = $_POST["image"];
            if (count($image_list) > 0){
            	foreach ($image_list as $key => $value) {
            		if ($value != ""){
						echo '<p><img src="'.$value.'" alt="" /></p>';
            		}
            	}
            }
            ?>	
         <h3>Product information</h3>
         <table id="produc_info" class="a-keyvalue">
		   <tbody>
		   	<?php foreach ($_POST["spec_name"] as $key => $value) { if ($value != "") {?>
		   		<tr>
		         <th> <?php echo $value; ?> </th>
		         <td>  <?php  echo $_POST["spec_description"][$key]; ?> </td>
		      </tr>	
		   	<?php } } ?> 
		  </tbody>
		</table>
		<h3>Package Includes </h3>
         <p id ="package_include">
         	<?php getTextAreaNewLine($_POST["package_include"]); ?>
         </p>
	 </textarea>
      </div>
   </body>
</html>