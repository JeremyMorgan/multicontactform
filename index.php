<?php


switch($_REQUEST['mode']){


	case 'savecontact':
	
	echo "<pre>";
	
		$textinputs = $_REQUEST['textinput'];
		$jobtitles = $_REQUEST['selectbasic'];
		
		$ctr = 0;
		
		foreach ($textinputs as $row){
			echo "Insert $row - " . $jobtitles[$ctr] . "<br>";
			$ctr++;		
		}
	
	break;
		
	default:
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<form class="form-horizontal" method="POST">
<fieldset>
<legend>Form Name</legend>

<div id="inputgroup" name="inputgroup">
</div>
<!-- end Input Group --> 
<h2><a href="#" name="addcontact" id="addcontact">Add another contact</a></h2>
<br /><br />
<!-- Button -->
<div class="control-group">
  <div class="controls">
	<input type="hidden" name="mode" value="savecontact">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit Form</button>
  </div>
</div>

</fieldset>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="contact.js"></script>

<?php

break;

}
