function send(data){
	var url = "/doadd";
	var data = data;
	$.ajax({
		type : "post",
		data : data,
		url : url,
		dataType : "json",
		success:function(msg){
			console.log(msg);
			layer.msg(msg.msg);
			if(msg.status == 1){
				window.location.href= "/index";
			}
		}
	});
}