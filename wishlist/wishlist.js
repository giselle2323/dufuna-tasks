$(document).ready(function(){ //Runs script after page loads.
	$('#add').click(function(e){ //When button is clicked,execute the event below
	    var wish =$('#textfield').val(); //A variable "wish" is assigned to the value entered in the textfield.
	    $('#list'). append('<li>'+wish+'</li>');// select id #list and append variable"wish" into the list tags.
		e.preventDefault();// Prevents holding default value in the textfield.
	});
});



