$(function(){

	$('a.delete').on('click', function(){
		var url = $(this).attr('href');
		bootbox.confirm("Are you sure?", function(result) {
			if(result) {
				window.location = url;
			}else{
				 bootbox.hideAll();
			}
		});
		return false;
	});

});
