$(document).ready(function() {
// On Click SignIn Button Checks For Valid E-mail And All Field Should Be Filled
$("#login").click(function() {
	$("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "please enter your password"
                     },
            email: "please enter your email address",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'method/process/login.php',
			data : data,
			cache: false,
			success :  function(response)
			   {				
					if(response=="home"){
						window.location.href = "pages/home.php";
					
					}
					else if (response=="admin") {
						window.location.href = "pages/admin.php";
						
					}
					else if(response=="fail"){	
						alert('Invalid Email or Password!');
					}
			  }

			});
				return false;
		}

});
$("#register").click(function() {
var name = $("#name").val();
var email = $("#registeremail").val();
var password = $("#registerpassword").val();
var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact;
var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if ($("#name").val() == '' || $("#registeremail").val() == '' || $("#registerpassword").val() == '' || $("#contact").val() == '') {
		alert("Please fill all fields!");
	} else if (!($("#registeremail").val()).match(email)) {
		alert("Please enter valid Email!");
	} else {
		$.ajax({
			type: "POST",
			url : "method/process/registerprocess.php",
			data: dataString,
			cache: false,
			
		});
		alert("You have successfully Sign Up, Now you can login!");
		$("#form")[0].reset();
		$("#second").slideUp("slow", function() {
		$("#first").slideDown("slow");
	});
 }
});
// On Click SignUp It Will Hide Login Form and Display Registration Form
$("#signup").click(function() {
$("#first").slideUp("slow", function() {
$("#second").slideDown("slow");
});
});
// On Click SignIn It Will Hide Registration Form and Display Login Form
$("#signin").click(function() {
$("#second").slideUp("slow", function() {
$("#first").slideDown("slow");
});
});
});