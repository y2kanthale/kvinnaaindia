var ContactForm = function () {

    return {
        
        //Contact Form
        initContactForm: function () {
	        // Validation
	        $("#sky-form3").validate({
	            // Rules for form validation
	            rules:
	            {
	                name:
	                {
	                    required: true
	                },
	                email:
	                {
	                    required: true,
	                    email: true
	                },
					date:
	                {
	                    required: true,
	                    date: true
	                },
					time:
	                {
	                    required: true,
	                    time: true
	                },
					digits:
	                {
	                    required: true,
	                    digits: true,
						maxlength: 10
	                },
	                message:
	                {
	                    required: true,
	                    minlength: 10
	                }
	            },
	                                
	            // Messages for form validation
	            messages:
	            {
	                name:
	                {
	                    required: 'Please enter your name',
	                },
	                email:
	                {
	                    required: 'Please enter your email address',
	                    email: 'Please enter a VALID email address'
	                },
					date:
	                {
	                    required: 'Please enter some date'
	                },
					time:
	                {
	                    required: 'Please enter time'
	                },
					digits:
	                {
	                    required: 'Please enter phone number'
	                },
	                message:
	                {
	                    required: 'Please enter your message'
	                }
	            },
	                                
	            // Ajax form submition                  
	            submitHandler: function(form)
	            {
	                $(form).ajaxSubmit(
	                {
	                    beforeSend: function()
	                    {
	                        $('#sky-form3 button[type="submit"]').attr('disabled', true);
	                    },
	                    success: function()
	                    {
	                        $("#sky-form3").addClass('submited');
	                    }
	                });
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }

    };
    
}();