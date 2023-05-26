jQuery(document).ready(function(){

	  
	jQuery('.add').click(function(){
		let fNumber = jQuery(".fNumber").val();
	    let sNumber = jQuery(".sNumber").val();

		jQuery.ajax({
			url:'proccess.php',
			type:'GET',
			data:{
				'call':"add",
				'fNumber':fNumber,
				'sNumber':sNumber
			},
			success: function(response){
				jQuery(".result").val(response)
			}
		});
	});
	jQuery('.sub').click(function(){
	  let fNumber = jQuery(".fNumber").val();
	  let sNumber = jQuery(".sNumber").val();
		jQuery.ajax({
			url:'proccess.php',
			type:'GET',
			data:{
				'call':"sub",
				'fNumber':fNumber,
				'sNumber':sNumber
			},
			success: function(response){
				jQuery(".result").val(response)
			}
		});
	});
	jQuery('.div').click(function(){
	  let fNumber = jQuery(".fNumber").val();
	  let sNumber = jQuery(".sNumber").val();
		jQuery.ajax({
			url:'proccess.php',
			type:'GET',
			data:{
				'call':"div",
				'fNumber':fNumber,
				'sNumber':sNumber
			},
			success: function(response){
				jQuery(".result").val(response)
			}
		});
	});
	jQuery('.mult').click(function(){
	  let fNumber = jQuery(".fNumber").val();
	  let sNumber = jQuery(".sNumber").val();
		jQuery.ajax({
			url:'proccess.php',
			type:'GET',
			data:{
				'call':"mult",
				'fNumber':fNumber,
				'sNumber':sNumber
			},
			success: function(response){
				jQuery(".result").val(response)
			}
		});
	});

	 





});