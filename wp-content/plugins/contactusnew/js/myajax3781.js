jQuery(document).ready(function($){

jQuery("#contactusForm").frmvalidate({
	rules: {
	firstname: "required",
	lastname: {
	required: true
	},
	company: {
	required: true
	},	
	phone: {
	required: true
	},
	email: {
	required: true,
	email: true
	},	
	address: {
	required: true
	},
	pincode: {
	required: true
	},speciality: {
	required: true
	},
	query: {
	required: false
	},
	/*captchacode: {
	required: true
	},	*/
	},submitHandler: function() {
		jQuery('#contactusForm input[type=submit]').hide();
		jQuery('#contactusForm input[type=submit]').after('<div class="loader"></div>');
		jQuery('.contmsgFrm').remove();
        jQuery.ajax({ 
            data: 'action=send_contactus&security='+contactus_script.security+'&'+jQuery("#contactusForm").serialize(),
            type: 'POST',
            url: contactus_script.ajaxurl,
            success: function(response) {
            	console.log(response);
				//jQuery('#contactusFrm').reset();				
				jQuery('#contactusForm .loader').remove();
				jQuery('#contactusForm input[type=submit]').after('<div class="contmsgFrm"></div>');	
				var obj=jQuery.parseJSON(response);				
				if(obj.status=="success"){						
				jQuery('.contmsgFrm').html('<div style="color:green;"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;">&nbsp;</i> '+obj.message+'</div>');
				jQuery("#contactusForm").trigger('reset');
				}else{
				jQuery("#contactusForm").trigger('reset');	
				jQuery('#contactusForm input[type=submit]').show();	
				jQuery('.contmsgFrm').html('<div style="color:green;"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;">&nbsp;</i> '+obj.message+'</div>');
				}
                //$("#response_area").html(response_from_the_action_function);
            }
        });	
	}
	
	});	

   /* $('#contactusFrm').submit(function(e){
        $.ajax({ 
            data: 'action=send_contactus&security='+contactus_script.security+'&'+jQuery("#contactusFrm").serialize(),
            type: 'post',
            url: contactus_script.ajaxurl,
            success: function(response) {
				$('#contactusFrm')[0].reset();
				alert(response);
				
                //$("#response_area").html(response_from_the_action_function);
            }
        });
		e.preventDefault();

    });*/

});