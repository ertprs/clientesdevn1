/*
* 	
* This function checked the group checkbox if is unchecked otherwise unchecked it.
*
*/ 
$(function(){
   $('.groupTitle').click(function(event) {
		if($("#select"+this.id).is(":checked")){
			$("#select"+this.id).prop('checked', false);
		}else{
			$("#select"+this.id).prop('checked', true);
		}
    });
});

$( document ).ready(function() {
	// postTypeMessage click event when click (define post type and make current post type active) 
	$( ".postTypeMessage" ).click(function() {
		$("#postLinkDetails,#postImageDetails,#postVideoDetails").hide();
		$(".postTypeLink,.postTypeImage,.postTypeVideo").removeClass("postTypeActive");
		$("input[name='postType']").val("message");
		$(this).addClass("postTypeActive");
		resetPostPreview();
	});
	
	// postTypeLink click event when click (define post type and make current post type active) 
	$( ".postTypeLink" ).click(function() {
		$("#postLinkDetails").show();
		$("#postImageDetails").hide();
		$("#postVideoDetails").hide();
		$(this).addClass("postTypeActive");
		$(".postTypeMessage").removeClass("postTypeActive");
		$(".postTypeImage").removeClass("postTypeActive");
		$(".postTypeVideo").removeClass("postTypeActive");
		$("input[name='postType']").val("link");
		linkPostPreview();
	});
	
	// postTypeImage click event when click (define post type and make current post type active) 
	$( ".postTypeImage" ).click(function() {
		$("#postImageDetails").show();
		$("#postVideoDetails").hide();
		$("#postLinkDetails").hide();
		$(this).addClass("postTypeActive");
		$(".postTypeMessage").removeClass("postTypeActive");
		$(".postTypeLink").removeClass("postTypeActive");
		$(".postTypeVideo").removeClass("postTypeActive");
		$("input[name='postType']").val("image");
		imagePostPreview();
	});

	// postTypeVideo click event when click (define post type and make current post type active) 
	$( ".postTypeVideo" ).click(function() {
		$("#postVideoDetails").show();
		$("#postImageDetails").hide();
		$("#postLinkDetails").hide();
		$(this).addClass("postTypeActive");
		$(".postTypeMessage").removeClass("postTypeActive");
		$(".postTypeImage").removeClass("postTypeActive");
		$(".postTypeLink").removeClass("postTypeActive");
		$("input[name='postType']").val("video");
		videoPostPreview();
	});
	
});