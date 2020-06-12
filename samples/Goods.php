<?php
/**
 * Created by PhpStorm.
 * User: gu
 * Date: 2020/6/12
 * Time: 2:22 PM
 */

require_once __DIR__ . '/Common.php';


$supplyClient = Common::getSupplyClient();
if (is_null($supplyClient)) exit(1);



//******************************* 简单使用 ****************************************************************


//获取我的选品库
$response = $supplyClient->MyGoodsLists(2,1,10);
var_dump($response);