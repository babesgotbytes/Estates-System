<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style></style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
	</head>
	<body class="container">
    <div id="main" style="margin-left:40px; margin-right: 40px; margin-top: 150px; margin-bottom: 100px;height: 500px; width: 400px;">
        <div style="height: 250px; width: 400px; margin-bottom: 10px; margin-left: 80px">
		 <form method="post" id="report_form"> 
           <div class="form-group">
           	<label>Department</label>
           	<input type="text" name="subject" id="subject" class="form-control"/>
           	  
           </div>
           <div class="form-group">
           	<label>Enter Your Report</label>
           	<textarea name="report" id="report" class="form-control" rows="5"></textarea>
           	
           </div>
            <div class="form-group">
            	<input type="Submit" name="post" id="post" class="btn btn-info" value="Submit"/>
            	
            </div>
 </form>
</body>
<script>
	$(document).ready (function(){

		function load_unseen_notification(view =''){
			$.ajax({
               url:"fetch.php",
               method:"POST",
               data:{view:view},
               dataType:"json",
               success:function (data)

			})

		}
	}

		)
	
</script>





</html>