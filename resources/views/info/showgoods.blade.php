<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="/js/vue/zpageNav.css" rel="stylesheet" />
	<script src="/js/vue/jquery.js"></script>
<script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
<script src="/js/vue/vue.js"></script>
<script src="/js/vue/zpageNav.js"></script>
</head>
<body>

	<div id = "wrap" class="wrap">
		<table border="1px">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>age</td>
		</tr>
	</table>
		   <zpagenav v-bind:page="page" v-bind:page-size="pageSize" v-bind:total="total" 
        	v-bind:max-page="maxPage"  v-on:pagehandler="pageHandler">
        </zpagenav>
	</div>
</body>
</html>
<script>
        var vm = new Vue({
            el: '#wrap',
            data: {
                page: 1,  //显示的是哪一页
                pageSize: 10, //每一页显示的数据条数
                total: 150, //记录总数
                maxPage:9  //最大页数
            },
            delimiters: ["<{","}>"],
            methods: {
                pageHandler: function (page) {
                	//here you can do custom state update
                    this.page = page;
					send(this.page);
                }
            },
			created:function(){
				//created  表示页面加载完毕，立即执行
				this.pageHandler(1);
			}
        });

        function send(page){
        	console.log(111);
        }
</script>