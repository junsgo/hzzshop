<?php
define('IN_HHS', true);
require(dirname(__FILE__) . '/includes/init.php');

if (isset($_REQUEST['id']))
{
    $cat_id = intval($_REQUEST['id']);
}
$appid=$weixin_config_rows['appid'];
$secret= $weixin_config_rows['appsecret'];

/* 缓存编号 */


    //assign_template();
/*
    $position = assign_ur_here();
    $smarty->assign('page_title',      $position['title']);    // 页面标题
    $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置
*/
    /* meta information 
    $smarty->assign('keywords',        htmlspecialchars($_CFG['shop_keywords']));
    $smarty->assign('description',     htmlspecialchars($_CFG['shop_desc']));
*/
    /* 页面中的动态内容 */
if (!$smarty->is_cached('index.dwt', $cache_id))
{ 
$smarty->assign('goods_list',    get_goodslist($cat_id)); 
$sql="select * from ".$hhs->table('users')." where user_id=".$_SESSION['user_id'];
$user_info=$db->getRow($sql);

$smarty->assign('appid', $appid);
$timestamp=time();
$smarty->assign('timestamp', $timestamp );
$class_weixin=new class_weixin($appid,$appsecret);
$signature=$class_weixin->getSignature($timestamp);
$smarty->assign('signature', $signature);

$smarty->assign('imgUrl', $user_info['headimgurl'] );
$smarty->assign('title', $_CFG['index_share_title']);
$smarty->assign('desc', mb_substr($_CFG['index_share_dec'], 0,30,'utf-8')  );
$smarty->assign('categories',  get_categories_tree());
$link="http://" . $_SERVER['HTTP_HOST'] . "/group.php";
$smarty->assign('link', $link );
$smarty->assign('link2', urlencode($link) );
$smarty->assign('shop_name', $_CFG['shop_title'] );
$smarty->assign('cat_id',    $cat_id);
/*
*/
$loading=$smarty->fetch('loading.html');
$smarty->assign('loading',    $loading);

}


$smarty->display('group.dwt',$cache_id);

function get_goodslist($cat_id=0)
{
	$where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND g.is_team=1 ";
	if ($cat_id >0 ){
		$where.= "AND g.cat_id = ".$cat_id ;
	}
    $sql = 'SELECT g.goods_id, g.goods_name,g.goods_number, g.goods_name_style, g.little_img, g.market_price, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
                'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img,g.little_img ' .
            ' ,g.team_num,g.team_price '.
            'FROM ' . $GLOBALS['hhs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['hhs']->table('member_price') . ' AS mp ' .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
            "WHERE $where ORDER BY g.sort_order, g.goods_id";
    $res = $GLOBALS['db']->getAll($sql);

    $arr = array();
    foreach ($res AS $idx => $row)
    {
        $arr[$idx]['goods_name']          = $row['goods_name'];
        $arr[$idx]['goods_brief']       = $row['goods_brief'];
        $arr[$idx]['goods_number']       = $row['goods_number'];
        $arr[$idx]['market_price']    = price_format($row['market_price'],false);
		$arr[$idx]['shop_price']    = price_format($row['shop_price'],false);
		
        $arr[$idx]['goods_thumb']      = get_image_path($row['goods_id'], $row['goods_thumb'], true);
		$arr[$idx]['little_img']      = get_image_path($row['goods_id'], $row['little_img'], true);
        $arr[$idx]['goods_img']        = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$idx]['url']              = "tgoods.php?id=".$row['goods_id'];//build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
        $arr[$idx]['team_num']    = $row['team_num'];
        $arr[$idx]['team_price']    = price_format($row['team_price'],false);
        //echo $arr[$idx]['url'];exit();
        $arr[$idx]['team_discount']    = number_format($row['team_price']/$row['shop_price']*10,1);
        
    }

    return $arr;
}
?>
