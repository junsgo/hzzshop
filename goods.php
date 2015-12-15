<?php

/**
 * 昊海电商 商品详情
 * ============================================================================
 * * 版权所有 2012-2014 西安昊海网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.xaphp.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: pangbin $
 * $Id: goods.php 17217 2014-05-12 06:29:08Z pangbin $
*/

define('IN_HHS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

$goods_id = isset($_REQUEST['id'])  ? intval($_REQUEST['id']) : 0;

/*------------------------------------------------------ */
//-- 改变属性、数量时重新计算商品价格
/*------------------------------------------------------ */

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'price')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '', 'qty' => 1);
    
    $attr_id    = isset($_REQUEST['attr']) ?(empty($_REQUEST['attr'])?array(): explode(',', trim($_REQUEST['attr']) )) : array();
    $number     = (isset($_REQUEST['number'])) ? intval($_REQUEST['number']) : 1;
    
    if ($goods_id == 0)
    {
        $res['err_msg'] = $_LANG['err_change_attr'];
        $res['err_no']  = 1;
    }
    else
    {
        if ($number == 0)
        {
            $res['qty'] = $number = 1;
        }
        else
        {
            $res['qty'] = $number;
        }
        
        $shop_price  = get_final_price($goods_id, $number, true, $attr_id);
        
        $res['result'] = price_format($shop_price * $number);
        
        //$res['result'] = implode('-', $attr_id);
    }

    die($json->encode($res));
}


/*------------------------------------------------------ */
//-- 商品购买记录ajax处理
/*------------------------------------------------------ */
if(!empty($_REQUEST['act']) && $_REQUEST['act'] == 'save_location' ){
    
	include_once('includes/cls_json.php');
	$json = new JSON();
	$result = array('error' => 0,'message'=>'', 'content' => '');
	
	$lat=$_REQUEST['lat'];
	$lng=$_REQUEST['lng'];
	$xaphp_sopenid=$_SESSION['xaphp_sopenid'];
	$sql="update ".$hhs->table('users')." set lat='$lat',lng='$lng' where openid='$xaphp_sopenid' ";
	$db->query($sql);
	//setcookie("lat",$lat);
	//setcookie("lng",$lng);
	die($json->encode($result));
	
}


/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

$cache_id = "g". $goods_id . '-' . $_SESSION['user_rank'].'-'.$_CFG['lang'];
$cache_id = sprintf('%X', crc32($cache_id));
if (!$smarty->is_cached('goods.dwt', $cache_id))
{
    $smarty->assign('image_width',  $_CFG['image_width']);
    $smarty->assign('image_height', $_CFG['image_height']);

    $smarty->assign('id',           $goods_id);
    $smarty->assign('type',         0);
    $smarty->assign('cfg',          $_CFG);
    //$smarty->assign('promotion',       get_promotion_info($goods_id));//促销信息
    //$smarty->assign('promotion_info', get_promotion_info());

    /* 获得商品的信息 */
    $goods = get_goods_info($goods_id);
    if($goods['is_mall']!=1){
        hhs_header("Location: ./\n");
        exit;
    }
    $smarty->assign('d_team_num', $goods['team_num']-1);
    if ($goods === false)
    {
        /* 如果没有找到任何记录则跳回到首页 */
        hhs_header("Location: ./\n");
        exit;
    }
    else
    {

        $shop_price   = $goods['shop_price'];
        //$linked_goods = get_linked_goods($goods_id);

        $goods['goods_style_name'] = add_style($goods['goods_name'], $goods['goods_name_style']);

        /* 购买该商品可以得到多少钱的优惠劵 
        if ($goods['bonus_type_id'] > 0)
        {
            $time = gmtime();
            $sql = "SELECT type_money FROM " . $hhs->table('bonus_type') .
                    " WHERE type_id = '$goods[bonus_type_id]' " .
                    " AND send_type = '" . SEND_BY_GOODS . "' " .
                    " AND send_start_date <= '$time'" .
                    " AND send_end_date >= '$time'";
            $goods['bonus_money'] = floatval($db->getOne($sql));
            if ($goods['bonus_money'] > 0)
            {
                $goods['bonus_money'] = price_format($goods['bonus_money']);
            }
        }*/

        $smarty->assign('goods',              $goods);
        $smarty->assign('goods_id',           $goods['goods_id']);
        $smarty->assign('promote_end_time',   $goods['gmt_end_time']);
        //$smarty->assign('categories',         get_categories_tree($goods['cat_id']));  // 分类树


    

        $position = assign_ur_here($goods['cat_id'], $goods['goods_name']);

        /* current position */
        $smarty->assign('page_title',          $position['title']);                    // 页面标题
        $smarty->assign('ur_here',             $position['ur_here']);                  // 当前位置

        $properties = get_goods_properties($goods_id);  // 获得商品的规格和属性

        $smarty->assign('properties',          $properties['pro']);                              // 商品属性
        $smarty->assign('specification',       $properties['spe']);                              // 商品规格
        //$smarty->assign('attribute_linked',    get_same_attribute_goods($properties));           // 相同属性的关联商品
       // $smarty->assign('related_goods',       $linked_goods);                                   // 关联商品
        //$smarty->assign('goods_article_list',  get_linked_articles($goods_id));                  // 关联文章
        //$smarty->assign('fittings',            get_goods_fittings(array($goods_id)));                   // 配件
       // $smarty->assign('rank_prices',         get_user_rank_prices($goods_id, $shop_price));    // 会员等级价格
        $smarty->assign('pictures',            get_goods_gallery($goods_id));                    // 商品相册
       // $smarty->assign('bought_goods',        get_also_bought($goods_id));                      // 购买了该商品的用户还购买了哪些商品
       // $smarty->assign('goods_rank',          get_goods_rank($goods_id));                       // 商品的销售排名

        //获取tag
        //$tag_array = get_tags($goods_id);
       // $smarty->assign('tags',                $tag_array);                                       // 商品的标记

        //获取关联礼包
        //$package_goods_list = get_package_goods_list($goods['goods_id']);
        //$smarty->assign('package_goods_list',$package_goods_list);    // 获取关联礼包

        //assign_dynamic('goods');
        //$volume_price_list = get_volume_price_list($goods['goods_id'], '1');
        //$smarty->assign('volume_price_list',$volume_price_list);    // 商品优惠价格区间
    }
}


/* 更新点击次数 */
$db->query('UPDATE ' . $hhs->table('goods') . " SET click_count = click_count + 1 WHERE goods_id = '$_REQUEST[id]'");

$sales_num = $goods['sales_num'];
/*
if($sales_num)
{
	$smarty->assign('buy_num',$sales_num);
}
else
{*/
	$smarty->assign('buy_num',get_buy_sum($goods_id)+$sales_num);
//}

$smarty->assign('now_time',  gmtime());           // 当前系统时间

$sql="select * from ".$hhs->table('users')." where user_id=".$_SESSION['user_id'];
$user_info=$db->getRow($sql);

//$appid=$weixin_config_rows['appid'];
//$secret= $weixin_config_rows['appsecret'];
$timestamp=time();
$smarty->assign('timestamp', $timestamp );
$smarty->assign('appid', $appid);
$class_weixin=new class_weixin($appid,$appsecret);
$signature=$class_weixin->getSignature($timestamp);
$smarty->assign('signature', $signature);
//$smarty->assign('jssdk', jssdk($appid,$secret,$timestamp));
$smarty->assign('imgUrl','http://' . $_SERVER['HTTP_HOST'].'/'.$goods['goods_thumb'] );
$smarty->assign('title', $goods['goods_name']);
$smarty->assign('desc', mb_substr($_CFG['goods_share_dec'], 0,30,'utf-8')  );
$link="http://" . $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
$smarty->assign('link', $link );
$smarty->assign('link2', urlencode($link) );

$smarty->display('goods.dwt',      $cache_id);


/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */


function get_buy_sum($goods_id)
{
    $sql = 'SELECT IFNULL(SUM(g.goods_number), 0) ' .
        'FROM ' . $GLOBALS['hhs']->table('order_info') . ' AS o, ' .
            $GLOBALS['hhs']->table('order_goods') . ' AS g ' .
        "WHERE o.order_id = g.order_id " .
        "AND o.order_status  in (0,1,5)  ".
        " AND o.shipping_status in (0,1,2) "  .
        " AND o.pay_status in (1,2) ".
        " AND g.goods_id = ".$goods_id;
    
    return $GLOBALS['db']->getOne($sql);
}
?>
