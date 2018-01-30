<?php


	
	$domain = explode('@', $_POST['from']); 
	if ($domain[1]==='qq.com' ||$domain[1]==='163.com' ||$domain[1]==='sina.com'||$domain[1]==='21cn.com'||
		$domain[1]==='139.com'||$domain[1]==='126.com'||$domain[1]==='sina.cn'||
		$domain[1]==='mtime.com'||$domain[1]==='sohu.com'||$domain[1]==='yahoo.cn'||$domain[1]==='163.cpm'){
		include file="$tpl_dir./errors.tpl"
		echo " coucou";
?>