<?php /*a:1:{s:74:"/www/wwwroot/sam_zhuzhouyike_com/application/admin/view/index/welcome.html";i:1546130751;}*/ ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/public/static/css/index.css" rel="stylesheet" type="text/css">
    <link href="/public/static/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/css/purebox.css" rel="stylesheet" type="text/css">
    <link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/static/js/jquery.js"></script>
    <script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/public/static/js/jquery.cookie.js"></script>
    <style>
        .contentWarp_item .section_select .item_comment{
            padding: 83px 0 31px 38px;
        }
        .contentWarp_item .section_select .item {
            padding: 83px 0 38px 38px;
        }
        .contentWarp_item .section_order_select li{
            width: 23%;
        }
         .contentWarp_item .section_select .item_comment{
            padding: 83px 0 31px 38px;
        }
        .contentWarp_item .section_select .item {
            padding: 83px 0 38px 38px;
        }
        @media only screen and (min-width: 900px) and (max-width: 1761px) {
        	.contentWarp_item{
        		margin-right: 1%;
        	}
        	.contentWarp_item .section_select .icon img{
        		max-width: 74px;
        		max-height: 74px;
        	}
        	.contentWarp_item:nth-child(1){
        		    margin-bottom: 10px;
        	}
        }
           @media only screen and (min-width: 900px) and (max-width: 1312px) {
        	.contentWarp_item .section_select .item{
        		    width: 35%;
        		    margin-bottom: 10px;
        	}
        	
        }
    </style>
</head>
<body class="iframe_body">
<div class="warpper">
    <div class="title">管理中心</div>
    <div class="content start_content">
        <div class="contentWarp">
            <div class="section system_section" style="float: none;width: inherit;">
                <div class="system_section_con">
                    <div class="sc_title" style="padding: 26px 0 14px;border-bottom: 1px solid #e4eaec;">
                        <i class="sc_icon"></i>
                        <h3>系统信息</h3>
                        <!--<span class="stop stop_jia" id="system_section" title="展开详情"></span>-->
                    </div>
                    <div class="sc_warp" id="system_warp" style="display: block;padding-bottom: 30px;">
                        <table cellpadding="0" cellspacing="0" class="system_table">
                            <tbody><tr>
                                <td class="gray_bg">服务器操作系统:</td>
                                <td><?php echo htmlentities($sys_info['os']); ?></td>
                                <td class="gray_bg">服务器域名/IP:</td>
                                <td><?php echo htmlentities($sys_info['domain']); ?> [ <?php echo htmlentities($sys_info['ip']); ?> ]</td>
                            </tr>
                            <tr>
                                <td class="gray_bg">服务器环境:</td>
                                <td><?php echo htmlentities($sys_info['web_server']); ?></td>
                                <td class="gray_bg">PHP 版本:</td>
                                <td><?php echo htmlentities($sys_info['phpv']); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Mysql 版本:</td>
                                <td><?php echo htmlentities($sys_info['mysql_version']); ?></td>
                                <td class="gray_bg">GD 版本:</td>
                                <td><?php echo htmlentities($sys_info['gdinfo']); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">文件上传限制:</td>
                                <td><?php echo htmlentities($sys_info['fileupload']); ?></td>
                                <td class="gray_bg">最大占用内存:</td>
                                <td><?php echo htmlentities($sys_info['memory_limit']); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">最大执行时间:</td>
                                <td><?php echo htmlentities($sys_info['max_ex_time']); ?></td>
                                <td class="gray_bg">安全模式:</td>
                                <td><?php echo htmlentities($sys_info['safe_mode']); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Zlib支持:</td>
                                <td><?php echo htmlentities($sys_info['zlib']); ?></td>
                                <td class="gray_bg">Curl支持:</td>
                                <td><?php echo htmlentities($sys_info['curl']); ?></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $("*[data-toggle='tooltip']").tooltip({
            position: {
                my: "left top+5",
                at: "left bottom"
            }
        });
    });
</script>
<script type="text/javascript" src="/public/static/js/jquery.purebox.js"></script>
<script type="text/javascript" src="/public/static/js/echart/echarts.min.js"></script>
<script type="text/javascript">

</script>
</body>

</html>