$(function(){ 
	//alert(1);

 	$('#blk-domain').hide();
 	$('#bulk').click(function(){
 		$('#blk-domain').show();
 	});
 	//$(".line").peity("bar");
 	$('.footable').footable();
 	$('#cross1').click(function(){
 		$('#blk-domain').hide();
 	});
$('.clear-filter').click(function(){
	$("tr").show();
});
  $("#dmn").change(function(){
  	//alert(1);
  	var dmn=$("#dmn").val();
  	var c=0;
  	if(dmn!=""){
  	$("tbody > tr ").each(function(){
  		console.log(1);
  		if($(this).hasClass(dmn)){
  			$(this).show();
  		}else{
  			$(this).hide();
  		}
	});
	}
  	});
  
$('.inlinebar').sparkline('html', {type: 'bar', barColor: 'red'} );
});
  

 