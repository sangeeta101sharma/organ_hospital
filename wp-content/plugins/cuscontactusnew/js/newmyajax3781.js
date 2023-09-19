jQuery(document).ready(function($){

jQuery("#contactpageForm").frmvalidate({
	rules: {
	firstname: "required",
	lastname: {
	required: true
	},
	/*company: {
	required: true
	},	*/
	phone: {
	required: true
	},
	email: {
	required: true,
	email: true
	},	
	/*address: {
	required: true
	},
	pincode: {
	required: true
	},*/
	specialist: {
	required: true
	},
	appointments: {
	required: true
	},
	preferedate: {
	required: true
	},
	country: {
	required: true
	},	
	query: {
	required: true
	},
	/*captchacode: {
	required: true
	},	*/
	},submitHandler: function() {
		jQuery('#contactpageForm input[type=submit]').hide();
		jQuery('#contactpageForm input[type=submit]').after('<div class="loader"></div>');
		jQuery('.contmsgFrm').remove();
        jQuery.ajax({ 
            data: 'action=send_contactpage&security='+contactpage_script.security+'&'+jQuery("#contactpageForm").serialize(),
            type: 'POST',
            url: contactpage_script.ajaxurl,
            success: function(response) {
            	console.log(response);
				//jQuery('#contactusFrm').reset();				
				jQuery('#contactpageForm .loader').remove();
				jQuery('#contactpageForm input[type=submit]').after('<div class="contmsgFrm"></div>');	
				var obj=jQuery.parseJSON(response);				
				if(obj.status=="success"){						
				jQuery('.contmsgFrm').html('<div style="color:green;"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;">&nbsp;</i> '+obj.message+'</div>');
				jQuery("#contactpageForm").trigger('reset');
				}else{
				jQuery("#contactpageForm").trigger('reset');	
				jQuery('#contactpageForm input[type=submit]').show();
				jQuery('.contmsgFrm').html('<div style="color:green;"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;">&nbsp;</i> '+obj.message+'</div>');
				}
                //$("#response_area").html(response_from_the_action_function);
            }
        });	
	}
	
	});	

   /* $('#contactusFrm').submit(function(e){
        $.ajax({ 
            data: 'action=send_contactus&security='+contactpage_script.security+'&'+jQuery("#contactusFrm").serialize(),
            type: 'post',
            url: contactpage_script.ajaxurl,
            success: function(response) {
				$('#contactusFrm')[0].reset();
				alert(response);
				
                //$("#response_area").html(response_from_the_action_function);
            }
        });
		e.preventDefault();

    });*/

});