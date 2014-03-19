$( document ).ready(function() {
    
	drawform();
	
	function drawform() {
		
		$( "#inputgroup" ).append( "<div class=\"control-group\">\
		<label class=\"control-label\" for=\"textinput[]\">Text Input</label>\
		<div class=\"controls\">\
			<input id=\"textinput\" name=\"textinput[]\" type=\"text\" placeholder=\"placeholder\" class=\"input-xlarge\">\
		  </div>\
			</div>\
			<div class=\"control-group\">\
			  <label class=\"control-label\" for=\"selectbasic[]\">Select Basic</label>\
			  <div class=\"controls\">\
				<select id=\"selectbasic\" name=\"selectbasic[]\" class=\"input-xlarge\">\
				  <option>Master Craftsman</option>\
				  <option>Welder</option>\
				  <option>CodeMonkey</option>\
				</select>\
			  </div>\
			</div>\
			</div>\
			<hr>" );
	}		

	$( "#addcontact" ).click(function() {
			drawform();	
	});
	
	
	
});
