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
			<div class="graph_spec">
				<?php 
					$graph_label = $_POST["graph_label"];
					$graph_unit = $_POST["graph_unit"];
					$graph_name = $_POST["graph_name"];
					$graph_value = $_POST["graph_value"];	
				foreach ($graph_value as $key => $value) {
					if ($value != ""){
				?>
					<div class="product_graph_box">
				      <div class="product_graph_image"><span class="graph_image" id="graph_image_<?php echo $graph_name[$key]; ?>"></span></div>
				      <div class="product_graph_info">
				         <div class="product_graph_title"> <?php echo $graph_label[$key]; ?></div>
				         <div class="product_graph_detail">
				            <div class="product_graph_input"><?php echo $graph_value[$key]; ?></div>
				            <div class="product_graph_unit"><?php echo $graph_unit[$key]; ?>
				            </div>
				         </div>
				      </div>
				  </div>
				<?php 			
					}
				} ?>
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