<?php 

//include_once(dirname(__FILE__) . '/mobile/includes/init2.php');

$code=$_GET['code'];

$state=urldecode($_GET['state']);

if($code)
{
    /*
    $state=str_replace("△","&",$state);
    if(strrpos($state,'&')!==false){
        $pos=strrpos($state,'&');
        $temp=substr($state, $pos+1);
        $t=explode("=", $temp);
        $appsecret=$t[1];
        $state=substr($state, 0 , $pos);
    }
    if(strrpos($state,'&')!==false){
        $pos=strrpos($state,'&');
        $temp=substr($state, $pos+1);
        $t=explode("=", $temp);
        $appid=$t[1];
        $state=substr($state, 0 , $pos);
    }*/
    
	//$back_openid_arr=get_openid($appid,$appsecret,$code);
	/*
	$fp=fopen('a.txt','w');
	fputs($fp,$_SERVER['HTTP_HOST'].'========'.$appid.'=---='.$appsecret.'========='.$back_openid_arr['openid']);
    fclose($fp);
    	*/
	//setcookie("xaphp_sopenid",$back_openid_arr['openid'] , 0, '/' , '', false,false);
	//$_SESSION['xaphp_sopenid']=$back_openid_arr['openid'];

	//setcookie("xaphp_sopenid",$back_openid_arr['openid'],time()+864000,'/');
/*
	$fp=fopen("cache/".$back_openid_arr['openid'].'.tpl','w');
	fputs($fp,$back_openid_arr['openid']);
	fclose($fp);
	*/
	//header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state) );
	/*
	if(strpos($state,'?')!==false){
	    header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."&sopenid=".$back_openid_arr['openid']  );
	}else{
	    header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."?sopenid=".$back_openid_arr['openid']  );
	}*/
    if(strpos($state,'?')!==false){
	    header("location:http://".$_SERVER['HTTP_HOST'].$state."&code=".$code  );
	}else{
	    header("location:http://".$_SERVER['HTTP_HOST'].$state."?code=".$code  );
	}
	 exit();


}

else

{

	echo "未授权";

}




?>