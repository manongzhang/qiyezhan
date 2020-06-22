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
	<div id = "app">
		家庭住址:<input type="text" name="address" v-model="address"><br />
		年龄:<input type="text" name="age" v-model="age"><br />
		个人描述:<input type="text" name="desc" v-model="desc"><br />
		<input type="button"name = "btn" value="确定" v-on:click="send">
		<input type="hidden" name="uid" value="uid" v-model="uid">
	</div>
	
</body>
</html>
<script>
	var vm = new Vue({
		el : "#app",
		data: {
			address:null,
			age:null,
			desc:null,
			uid:null
		},
		methods:{
			send:function(){
				var data={};
				data.address = this.address;
				data.age = this.age;
				data.desc = this.desc;
				data.uid = $("input[name='uid']").val();
				var url = "/douserinfo";
				axios.post(url,data).then(function(response){
					var showdata = response.data;
					if(showdata.success == true){
						var url = showdata.url;
						window.location.href = url;
					}
				});
			}
		},
		mounted(){
			var url = "/getuserid";
			axios.post(url).then(function(response){
				var uid = response.data;
				//vm.uid = uid;
				vm.uid = uid;
			});
		}
	});
</script>