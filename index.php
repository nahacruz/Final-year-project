<?php include("config.php")?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset='utf-8' />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<title>Notification System</title>
</head>  
     <body>
      <nav class="navbar"> 
       <ul>
       <li>
       	<?php
       	$sql = "SELECT * FROM notifications WHERE status='0' ORDER BY id DESC";
        $res = mysqli_query($conn,$sql); ?>
       	<a href="#" id="notifications">
          	<label for="check">
          		<i class="fa fa-bell-o" aria-hidden="true"></i>
          		<span class="count"><?php echo mysqli_num_rows($res); ?></span>
          	</label>
          	</a>
       	  <input type="checkbox" class="dropdown-check" id="check">
                    <ul class="dropdown">
          	<?php
          	if (mysqli_num_rows($res) > 0){
          		foreach ($res as $item){
					
				}
            ?>
               <li><?php echo $item["text"]; ?></li>
          	<?php }
          	?>

          </ul>
       </li>
       </ul>
   </nav>
   <script>
	scr="https://code.jquery.com/jquery-3.6.1.min.js"
   </script>
   <script>
	$(document).ready(function(){
	   	$("#notifications").on("click", function() {
			$.ajax({
				url:"notification.php",
				success: function(res){
					consoe.log(res);
				}
			})
		})
	})
   </script>
  </body>                                                               
</html>