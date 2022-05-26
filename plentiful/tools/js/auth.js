$(document).on('submit','.login_user',function(){
	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true')
		{
			
				window.location.href=resp.reload;
		}
		else
		{
			alert(resp.message);
		}
	})
	return false;
});

$(document).on('submit','.database_operations',function(){
	var url=$(this).attr('action');
	$.ajax({
        type:'POST',
        url:url,
        data:new FormData($(".database_operations")[0]),
        contentType:false,
        processData:false,
        success:function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true')
		{
			alert(resp.message);
			setTimeout(function(){
				window.location.href=resp.reload;
			},2000);
		}
		else
		{
			alert(resp.message);
		}
		}	
	});
	return false;
});