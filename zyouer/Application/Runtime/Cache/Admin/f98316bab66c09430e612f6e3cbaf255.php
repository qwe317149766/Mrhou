<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>幼儿园信息管理系统</title>

    <link rel="stylesheet" href="/<?php echo (ADMIN_CSS_PATH); ?>/index.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/<?php echo (ADMIN_CSS_PATH); ?>/table.css" type="text/css" media="screen">

    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/jquery.js"></script>
    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/tendina.js"></script>
    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/common.js"></script>
</head>
<style>

</style>
<body>
<div class="route_bg">
    <a href="#">主页</a><i class="glyph-icon icon-chevron-right"></i>
    <a href="#">菜单管理</a>
</div>
<div id="body" class="ifr-body">
    <div id="new_common">
        <div id="order_type">
            <ul>
                <li class="new_common_on">销售中（100）</li>
                <li>已下架（30）</li>
            </ul>
        </div>

        <div id="choose_condition">
            <input class="check_time_left" contenteditable id="order_num" placeholder="商品名称">
            <input class="check_time_left" contenteditable id="buyer"  placeholder="全部类型">
            <div class="check_time_left" id="time_left">dd</div>
            <span style="padding-left:15px;">至</span>
            <div class="check_time_left" id="time_right">dd</div>
            <button id="search_type_infos">搜索</button>
        </div>

        <div class="common_go" id="list1">
            <div class="search_result">
                <table cellspacing="0" cellpadding="0" class="search_result_tab">
                    <tr>
                        <th>选择</th>
                        <th width="260px">商品名称</th>
                        <th>商品分类</th>
                        <th>售价</th>
                        <th>供货价</th>
                        <th><span class="slaes_among">佣金</span></th>
                        <th><span class="slaes_among">销量</span></th>
                        <th><span class="slaes_among">访问量</span></th>
                        <th><span class="slaes_among">库存</span></th>
                        <th>商品类型</th>
                        <th width="200px">操作</th>
                    </tr>
                    <tr>
                        <td class="check_go"></td>
                        <td style="position: relative;">
                            <div class="goods_name" title="测试商品测试商品测试商品测试商品试商品测试商品测试商品测试商品测试商品测试商品测试商品测试商品">
                                测试商品测试商品测试商品测试商品试商品测试商品测试商品测试商品测试商品测试商品测试商品测试商品
                            </div>
                        </td>
                        <td>3c数码</td>
                        <td>￥488.00</td>
                        <td>￥4888.00</td>
                        <td>￥488.00</td>
                        <td>888</td>
                        <td>777</td>
                        <td>100</td>
                        <td>限时抢购</td>
                        <td>
                            <span class="goods_edit">编辑</span>
                            <span class="goods_del">删除</span>
                            <span class="goods_look_up">查看</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="batch_week">
            <div class="batch_l">
                <span class="all_check">全选</span>
                <button class="btn_common batch_del">批量删除</button>
                <button  class="btn_common batch_out">下架</button>
            </div>
            <div class="batch_r">
                <span>共20条数据</span>
                <span class="disabled">上一页</span><span class="current f_on">1</span><span class="current">2</span><span class="disabled">下一页</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>