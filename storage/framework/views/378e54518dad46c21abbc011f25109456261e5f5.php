<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/js/vue/vue.js"></script>
<script src="/js/vue/jquery.js"></script>
<script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
</head>
<body>
	<div id="app">
		商品名字:<input type="text" name="goods_name" v-model="goods_name"><br />
		商品价格<input type="text" name="goods_price" v-model="goods_price"><br />
		商品描述<input type="text" name="desc" v-model="goods_desc"><br />
		<input type="button" name="btn" value="确定" @click="go">
	</div>
	
</body>
</html>

<script>
	var vm = new Vue({
		el : "#app",
		data: {
			goods_name:null,
			goods_price:null,
			goods_desc :null
		},
		methods:{
			go:function(){
				var data={};
				data.goods_name = this.goods_name;
				data.goods_price = this.goods_price;
				data.goods_desc = this.goods_desc;
				var url = "/addgoods";
				axios.post(url,data).then(function(response){
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