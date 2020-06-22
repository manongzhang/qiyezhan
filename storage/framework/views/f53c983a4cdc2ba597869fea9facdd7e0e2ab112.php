<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script src="/js/vue/vue.js"></script>
<script src="/js/vue/jquery.js"></script>
<script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
<body>
	<div id="app">
		用户名:<input type="text" name="name" v-model="username"> <br />
		密码:<input type="password" name="pwd" v-model="userpwd"><br />
		<input type="button" name="btn"  value="确定" @click="send">
	</div>
</body>
</html>

<script>
	var vm  = new Vue({
		el : "#app",
		data: {
			username:null,
			userpwd:null
		},
		methods:{
			send:function(){
				 var  username = this.username;
				 var userpwd = this.userpwd;
				 var url = "/doregister";
				 var dataInfo={
				 	username:username,
				 	userpwd : userpwd
				 };
				 axios.post(url,dataInfo).then(function(response){
				 	var dataInfo = response.data;
				 	if(dataInfo.success == true){
				 		var url = dataInfo.url;
				 		window.location.href = url;
				 	}
				 });
			}
		}
	});
</script>