/*#############################################################
Name: MyForm
Version: 1.0
Author: Franz Ordóñez
Based on: http://net.tutsplus.com/tutorials/javascript-ajax/submit-a-form-without-page-refresh-using-jquery/
		  http://www.paulund.co.uk/regular-expression-to-validate-email-address
		  http://www.webdesignerforum.co.uk/topic/68584-anti-spam-form-without-captcha/
		  http://www.vallgroup.com/blog/building-your-own-contact-form-in-php-html5-no-javascript.html
URL: 

Feel free to use and modify but please provide credits!
#############################################################*/

/* VALIDATION */
function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
		return false;
	} else {
		return true;
	}
}

/* MAIN FUNCTION */
$(function() {
	$('.error').hide();
	$(".buttonSubmit").click(function() {
		
		if ($("input[name=reference]").val()) {
			return false;
		}
		// validate and process form here
		
		$('.error').hide();  
		var name = $("input[name=name]").val();  
			if (name == "") {  
				$("#name_error").show();  
				$("input[name=name]").focus();  
				return false;  
			}
		var email = $("input[name=email]").val();  
			if (email == "") {  
				$("#email_error").show();  
				$("input[name=email]").focus();  
				return false;  
			} 
			if (!(validateEmail(email))) {  
				$("#email_missing").show();  
				$("input[name=email]").focus();  
				return false;  
			} 
		var subject = $("input[name=subject]").val();  
			if (subject == "") {  
				$("#subject_error").show();  
				$("input[name=subject]").focus();  
				return false;  
			}
		var message = $("textarea[name=message]").val()
			if (message == "") {  
				$("#message_error").show();  
				$("textarea[name=message]").focus();  
				return false;  
			}
		
		var trap = $("reference[name=subject]").val()
		
		var dataString = 'name='+ name + '&email=' + email + '&subject=' + subject + '&message=' + message + '&trap=' + trap;
		//alert (dataString);return false;
		
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: dataString,
			success: function() {
				$('#contact_box').html("<div id='sucess'></div>");
				$('#sucess').html("<h2>¡Mensaje enviado exitosamente!</h2>")
				.append("<p>Pronto le estaremos respondiendo, gracias por preferirnos.</p>")
				.hide()
				.fadeIn(1000, function() {
					$('#sucess');//.append("<img id='checkmark' src='images/check.png' />");
				});
			}
		});
		return false;
	});
});