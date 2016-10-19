$(document).ready(function() {
	
   $(".page_item_has_children").click(function(){
		
      $(this).find(".children").slideToggle("slow");
      $(this).toggleClass("active");
		
   });
	
	$('#toggle').click(function() {
      
      $(this).toggleClass('active');		
		$(".main-menu").slideToggle("slow");
		
   });
	
});