$(function(){
	$("#contact-form").validate({
		rules:{
			name:{
				required:true,
				minlength:3
			},
			email:{
				required:true,
				email:true
			},
			message:{
				maxlength:2000
			}
		},
		messages:{
			name:{
				required:"please Enter Your full name",
				minlength:"name should be longer than 3 character"
			},
			email:{
				required:"please enter your email",
				email:"please enter valid email address"
			},
			message:{
				maxlength:"message should not be longer than 2000 chars"	
			}	
		},
		submitHandler: function (form, e) {
			console.log("Form submitted");
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			console.log(name);
			console.log(email);
			console.log(message);
			$.ajax({
			  type: "POST",
			  url: "./include/operations.php?data=contactUs",
			  dataType: "json",
			  data: {
				name:name,
				email: email,
				message: message,
			  },
			  success: function (data) {
				if (data.output == "SUCCESS") {
				  alert("Thanks for contacting us!");
				  $('#contact-form')[0].reset();
				  $('.modal').modal('hide');
				} else {
				  alert("Message is not submitted");
				}
			  },
			  error: function (error) {
				  console.log(error);
			  },
			}); 
			return false;
		  }
	});
	
});