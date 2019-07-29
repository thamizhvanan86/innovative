<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["submit"])) {
    $query = "UPDATE receipe set name = '".$_POST["name"]."', prep_time = '".$_POST["prep_time"]."', difficulty = '".$_POST["difficulty"]."', vegetarian = '".$_POST["vegetarian"]."', modified = '".$_POST["modified"]."' WHERE  id=".$_GET["id"];
    $result = $db_handle->executeQuery($query);
	if(!$result){
		$message = "Problem in Editing! Please Retry!";
	} else {
		header("Location:index.php");
	}
}
$result = $db_handle->runQuery("SELECT * FROM receipe WHERE id='" . $_GET["id"] . "'");
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
	/*if(!$("#stock_count").val()) {
		$("#stock_count-info").html("(required)");
		$("#stock_count").css('background-color','#FFFFDF');
		valid = false;
	}*/	
	return valid;
}
</script>
<form name="frmreceipe" method="post" action="" id="frmreceipe" onClick="return validate();">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="demoInputBox" value="<?php echo $result[0]["name"]; ?>">
</div>
<div>
<label>Preparation Time</label>
<span id="prep_time" class="prep_time"></span><br/>
<input type="text" name="prep_time" id="prep_time" class="demoInputBox" value="<?php echo $result[0]["prep_time"]; ?>">
</div>
<div>
<label>Difficulty</label> 
<span id="difficulty" class="difficulty"></span><br/>
<input type="text" name="difficulty" id="difficulty" class="demoInputBox" value="<?php echo $result[0]["difficulty"]; ?>">
</div>
<div>
<label>Vegetarian</label> 
<span id="vegetarian" class="vegetarian"></span><br/>
<input type="text" name="vegetarian" id="vegetarian" class="demoInputBox" value="<?php echo $result[0]["vegetarian"]; ?>">
</div>
<div>
<label>Modified</label> 
<span id="modified" class="modified"></span><br/>
<input type="text" name="modified" id="modified" class="demoInputBox" value="<?php echo $result[0]["modified"]; ?>">
</div>
<div>
<input type="submit" name="submit" id="btnAddAction" value="Save" />
</div>
</div>