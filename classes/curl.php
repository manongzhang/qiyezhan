<?php
	//发送get请求
	function curl_send_get($url){
		$ch = curl_init();
		 // 2. 设置选项，包括URL
		 curl_setopt($ch,CURLOPT_URL,$url);
		 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		 curl_setopt($ch,CURLOPT_HEADER,0);
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		 // 3. 执行并获取HTML文档内容
		 $output = curl_exec($ch);
		 // 4. 释放curl句柄
		 curl_close($ch);
		 return $output;
	}

	//发送post请求
	function curl_send_post($url,$arr){
    	$curlPost = http_build_query($arr);
     	$ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

		$data_string=[
			"pageSize"=>"90",
			"cityId"=>"530",
			"salary"=>"8001,10000",
			"workExperience"=>"0103",
			"education"=>"5",
			"companyType"=>"-1",
			"employmentType"=>"-1",
			"jobWelfareTag"=>"-1",
			"kw"=>"PHP",
			"kt"=>"3"
		];
		$data_string = json_encode($data_string);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    		"Content-Type: application/json;charset=utf-8",
    		"Content-Length: " . strlen($data_string)));
        $data = curl_exec($ch);//运行curl
        return $data;

	}
?>