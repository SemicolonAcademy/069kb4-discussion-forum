// JavaScript Document
$(document).ready(function()
{//8
	$('form#loginform').submit(function()
{//7
		$('form#loginform .error').remove();
		var hasError = false;
		$('.required').each(function()
{//4
			if(jQuery.trim($(this).val()) == '')
			
{//1
            	var labelText = $(this).prev('label').text();
				$(this).parent().append('<span class="error">Can not be blank'+labelText+'</span>');
            	$(this).addClass('inputError');
            	hasError = true;          					
       
}

else if($(this).hasClass('email'))
{//3
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if(!emailReg.test(jQuery.trim($(this).val())))

{//2
var labelText = $(this).prev('label').text();

$(this).parent().append('<span class="error">Invalid Email</span>');
$(this).addClass('inputError');
hasError = true;
}//2//
}//3//


else if($(this).hasClass('ans'))
{
var name=/^(5)+$/;
if(!name.test(jQuery.trim($(this).val())))
{
var labettext = $(this).prev('label').text();
$(this).parent().append('<span class="error">Incorrect code<span>');
$(this).addClass('inputError');
hasError = true;
}
}
//phone
else if($(this).hasClass('phone'))
{
var phone=/^([0,9][0-9]{8,9}$)/;
if(!phone.test(jQuery.trim($(this).val())))
{
var labeltext = $(this).prev('label').text();
$(this).parent().append('<span class="error">Invalid phone number</span>');
$(this).addClass('inputError');
hasError = true;
}}//phone
//
else if($(this).hasClass('code'))
{
var phone=/^([0][0-9]{2,4}$)/;
if(!phone.test(jQuery.trim($(this).val())))
{
var labeltext = $(this).prev('label').text();
$(this).parent().append('<span class="error">Invalid ZIP code</span>');
$(this).addClass('inputError');
hasError = true;
}}//phone


else if($(this).hasClass('name'))
{
var name=/^([aA-zZ ])+$/;
/*/^[^\s]+\s[^\s]+$/*/
if(!name.test(jQuery.trim($(this).val())))
{
var labettext = $(this).prev('label').text();
$(this).parent().append('<span class="error">This is not your real name</span>');
$(this).addClass('inputError');
hasError = true;
}
}
}//4//
);

if(!hasError) {
			$('form#loginform input.submit').fadeOut('normal', function()
{//6
				$(this).parent().append('');
			});
			var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$('form#loginform').slideUp("fast", function()
{//5
					$(this).before('<p class="success"><strong>Done!</strong> Thank you for contacting us. Your message has been sent. Our customer representative will contact you shortly.</span>')
}//5//
);
}//6//
);
}//7//

		return false;

}//8//
);
}
);
