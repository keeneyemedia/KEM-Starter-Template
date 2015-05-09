jQuery(document).ready(function() {
	if(!Modernizr.input.placeholder){
		jQuery("input").each(
			function(){
				if(jQuery(this).val()=="" && jQuery(this).attr("placeholder")!=""){
					jQuery(this).val(jQuery(this).attr("placeholder"));
					jQuery(this).focus(function(){
						if(jQuery(this).val()==jQuery(this).attr("placeholder")) jQuery(this).val("");
					});
					jQuery(this).blur(function(){
						if(jQuery(this).val()=="") jQuery(this).val(jQuery(this).attr("placeholder"));
					});
				}
		});
	}
});