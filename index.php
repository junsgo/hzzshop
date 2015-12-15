<?php
define('IN_HHS', true);
require(dirname(__FILE__) . '/includes/init.php');

/*
if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}*/

/* 缓存编号 */
$cache_id = sprintf('%X', crc32($_SESSION['user_rank'] . '-' . $_CFG['lang']));


if (!$smarty->is_cached('index.dwt', $cache_id))
{
    //assign_template();

    $position = assign_ur_here();
    $smarty->assign('page_title',      $position['title']);    // 页面标题
    $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置
	$smarty->assign('categories',  get_categories_tree()  ); // 分类树
    /* meta information */

    $smarty->assign('keywords',        htmlspecialchars($_CFG['shop_keywords']));
    $smarty->assign('description',     htmlspecialchars($_CFG['shop_desc']));

   
	$smarty->assign('playerdb',        get_flash_xml());
	$smarty->assign('shop_notice',     $_CFG['shop_notice']);       // 商店公告
	
	
	$cate_index= get_cate_index_tree();
	
	foreach($cate_index as $k=>$v){
		
		$arr=get_cat_id_goods_list($v['id'],$_CFG['limit_index_goods_num']);
		if(empty($arr)){
			unset($cate_index[$k]);
		}else{
			$cate_index[$k]['cat_goods']=$arr;
		}
		
	}
	$smarty->assign('cate_index',  $cate_index); 


    /* 页面中的动态内容
    assign_dynamic('index');
	*/
} 
 
	
$sql="select * from ".$hhs->table('users')." where user_id=".$_SESSION['user_id'];
$user_info=$db->getRow($sql);
//$appid=$weixin_config_rows['appid'];
//$secret= $weixin_config_rows['appsecret'];

$smarty->assign('appid', $appid);
$timestamp=time();
$smarty->assign('timestamp', $timestamp );
$class_weixin=new class_weixin($appid,$appsecret);
$signature=$class_weixin->getSignature($timestamp);
$smarty->assign('signature', $signature);
//$smarty->assign('jssdk', $class_weixin->getJsApiTicket() );

//$smarty->assign('signature', jssdk($appid,$secret, $timestamp));

$smarty->assign('imgUrl', $user_info['headimgurl'] );
$smarty->assign('title', $_CFG['index_share_title']);
$smarty->assign('desc', mb_substr($_CFG['index_share_dec'], 0,30,'utf-8')  );
/*
$smarty->assign('title', 'aaa'.$_CFG['index_share_title']);
$smarty->assign('desc', mb_substr('bbbb'.$_CFG['index_share_dec'], 0,30,'utf-8')  );
*/
$link="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];//"/index.php";
$smarty->assign('link', $link);

$smarty->assign('link2', urlencode($link) );

$loading=$smarty->fetch('loading.html');
$smarty->assign('loading',    $loading);

$smarty->display('index.dwt');



function get_cat_id_goods_list($cat_id = '', $num = '', $ext='') {
    
	$sql = 'Select g.goods_id,g.guige, g.cat_id,c.parent_id, g.goods_name, g.goods_number, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' .
		"IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, " .
		"promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img, " .
		"g.is_best, g.is_new, g.is_hot, g.is_promote,b.brand_name " .
		'FROM ' . $GLOBALS ['hhs']->table ( 'goods' ) . ' AS g ' .
		'LEFT JOIN ' . $GLOBALS ['hhs']->table ( 'category' ) . ' AS c ON c.cat_id = g.cat_id ' .
		"LEFT JOIN " . $GLOBALS ['hhs']->table ( 'member_price' ) . " AS mp " .
		"ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
		" left join ". $GLOBALS ['hhs']->table ( 'brand' ) ." as b on g.brand_id=b.brand_id ".
		" Where g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_new = 1 AND g.is_delete = 0 and g.is_mall=1 " .
		$sql .= " AND (c.parent_id =" . $cat_id . " OR g.cat_id = " . $cat_id . " OR g.cat_id " . db_create_in ( array_unique ( array_merge ( array (
			$cat_id
		), array_keys ( cat_list ( $cat_id, 0, false ) ) ) ) ) . ")";
    
    $sql.=$ext;
    $sql .= " LIMIT $num";
    $res = $GLOBALS ['db']->getAll ( $sql );
    $goods = array ();
    foreach ( $res as $idx => $row ) {
        $goods [$idx] ['id'] = $row ['goods_id'];
        $goods [$idx] ['name'] = $row ['goods_name'];
		$goods [$idx] ['guige'] = $row ['guige'];
        $goods [$idx] ['brief'] = $row ['goods_brief'];
        $goods [$idx] ['brand_name'] = $row ['brand_name'];
		$goods [$idx] ['goods_number'] = $row ['goods_number'];
        $goods [$idx] ['goods_style_name'] = add_style ( $row ['goods_name'], $row ['goods_name_style'] );
        $goods [$idx] ['short_name'] = $GLOBALS ['_CFG'] ['goods_name_length'] > 0 ? sub_str ( $row ['goods_name'], $GLOBALS ['_CFG'] ['goods_name_length'] ) : $row ['goods_name'];
        $goods [$idx] ['short_style_name'] = add_style ( $goods [$idx] ['short_name'], $row ['goods_name_style'] );
        $goods [$idx] ['market_price'] = price_format ( $row ['market_price'] );
        $goods [$idx] ['shop_price'] = price_format ( $row ['shop_price'] );
        $goods [$idx] ['thumb'] = empty ( $row ['goods_thumb'] ) ? $GLOBALS ['_CFG'] ['no_picture'] : $row ['goods_thumb'];
        $goods [$idx] ['goods_img'] = empty ( $row ['goods_img'] ) ? $GLOBALS ['_CFG'] ['no_picture'] : $row ['goods_img'];
        $goods [$idx] ['url'] = build_uri ( 'goods', array (
                            'gid' => $row ['goods_id'] 
                            ), $row ['goods_name'] );
        if($GLOBALS['SID']){
            $goods [$idx] ['shop_price'] = price_format ( $row ['s_goods_price'] );
            

        }
    
    }
    return $goods;
}

function get_flash_xml()
	{
		$flashdb = array();
		if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
		{
	
			// 兼容v2.7.0及以前版本
			if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
			{
				preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
			}
	
			if (!empty($t))
			{
				foreach ($t as $key => $val)
				{
					$val[4] = isset($val[4]) ? $val[4] : 0;
					$flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
				}
			}
		}
		return $flashdb;
}


?>
