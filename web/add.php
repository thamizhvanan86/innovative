<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["submit"])) {
    $query = "INSERT INTO receipe(name, prep_time, difficulty, vegetarian) VALUES('".$_POST["name"]."','".$_POST["prep_time"]."','".$_POST["difficulty"]."','".$_POST["vegetarian"]."')";
        $result = $db_handle->executeQuery($query);
    if(!$result){
			$message="Problem in Adding to database. Please Retry.";
	} else {
		header("Location:index.php");
	}
}
?>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function validate() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#name").val()) {
		$("#name-info").html("(required)");
		$("#name").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#prep_time").val()) {
		$("#prep_time").html("(required)");
		$("#prep_time").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#difficulty").val()) {
		$("#difficulty").html("(required)");
		$("#difficulty").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#vegetarian").val()) {
		$("#vegetarian").html("(required)");
		$("#vegetarian").css('background-color','#FFFFDF');
		valid = false;
	}	
	return valid;
}
</script>
<form name="frmToy" method="post" action="" id="frmToy" onClick="return validate();">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="demoInputBox">
</div>
<div>
<label>Preparation Time</label>
<span id="prep_time" class="info"></span><br/>
<input type="text" name="prep_time" id="prep_time" class="demoInputBox">
</div>
<div>
<label>Difficulty</label> 
<span id="difficulty" class="info"></span><br/>
<input type="text" name="difficulty" id="difficulty" class="demoInputBox">
</div>
<div>
<label>Vegetarian</label> 
<span id="vegetarian" class="info"></span><br/>
<input type="text" name="vegetarian" id="vegetarian" class="demoInputBox">
</div>
<div>
<input type="submit" name="submit" id="btnAddAction" value="Add" />
</div>
</div>