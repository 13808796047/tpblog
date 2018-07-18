<?php /*a:4:{s:70:"/Users/mars/Desktop/code/tpblog/application/admin/view/home/index.html";i:1531934448;s:71:"/Users/mars/Desktop/code/tpblog/application/admin/view/layouts/app.html";i:1531928185;s:74:"/Users/mars/Desktop/code/tpblog/application/admin/view/public/_header.html";i:1531934232;s:72:"/Users/mars/Desktop/code/tpblog/application/admin/view/public/_left.html";i:1531928396;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>管理后台--忘记密码</title>
    <link rel="shortcut icon" href="/static/admin/img/logo.jpg" type="image/x-icon">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/admin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/static/admin/css/weather-icons.min.css" rel="stylesheet"/>
    <link id="beyond-link" href="/static/admin/css/beyond.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small style="line-height: 40px;">管理后台</small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="assets/img/logo.jpg">
                                </div>
                                <section style="min-width: 70px">
                                    <h2><span class="profile"><span><?php echo session('admin.nickname'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a><?php echo session('admin.nickname'); ?></a></li>
                                <li class="email"><a>leruge@163.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="assets/img/logo.jpg" class="avatar">
                                        <span class="caption">个人头像</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">个人资料</a>
                                    <a href="#" class="pull-right">个人设置</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="assets/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="assets/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="assets/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="assets/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="assets/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="assets/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="assets/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="javascript:;" id="logout">退出</a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                    <div class="setting">
                        <a id="btn-setting" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>
                    </div>
                    <div class="setting-container">
                        <label>
                            <input type="checkbox" id="checkbox_fixednavbar">
                            <span class="text">头部固定</span>
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox_fixedsidebar">
                            <span class="text">菜单固定</span>
                        </label>
                    </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->

<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        
<div class="page-sidebar" id="sidebar">
    <ul class="nav sidebar-menu">
        <li class="active">
            <a href="index.html">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text">后台首页</span>
            </a>
        </li>
        <li>
            <a href="index.html" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-th"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="catelist.html">
                        <span class="menu-text">栏目列表</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">栏目添加</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-book"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">文章列表</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">文章添加</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-user"></i>
                <span class="menu-text">会员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">会员列表</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">会员添加</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-send"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">管理员列表</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">管理员添加</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon glyphicon glyphicon-cog"></i>
                <span class="menu-text">系统设置</span>
            </a>
        </li>
    </ul>
</div>
<!-- /Page Sidebar -->
        <!--Page Sidebar-->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-home"></i>&nbsp;控制面板
                    </li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well bordered-left bordered-themeprimary">
                            <h1 style="font-weight: 900!important;font-style: italic;text-shadow: 5px 5px 5px #ff0000;font-family: '新宋体'">
                                欢迎使用梦中程序员后台管理系统！
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well with-header with-footer">
                            <div class="header bg-themeprimary">
                                服务器信息
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th colspan="2">服务器信息</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>服务器域名</td>
                                    <td>http://www.dreamphp.com.cn/</td>
                                </tr>
                                <tr>
                                    <td>服务器IP地址</td>
                                    <td>127.0.0.1</td>
                                </tr>
                                <tr>
                                    <td>服务器端口</td>
                                    <td>80</td>
                                </tr>
                                <tr style="font-weight: bold;text-align: center;text-shadow: 2px 2px 2px #ff0000;font-style: italic;">
                                    <td>拜师QQ</td>
                                    <td>305530751</td>
                                </tr>
                                <tr>
                                    <td>联系邮箱</td>
                                    <td>leruge@163.com</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="footer">拜师请联系QQ:305530751</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>


<script src="/static/admin/js/skins.min.js"></script>
<!--Basic Scripts-->
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/slimscroll/jquery.slimscroll.min.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/js/beyond.js"></script>
<script src="/static/lib/layer/layer.js"></script>
<script>
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');

    });

</script>

<script>
    $(()=>{
        $('#logout').click(()=>{
            $.ajax({
                url:"<?php echo url('admin/index/logout'); ?>",
                type:'post',
                dataType:'json',
                success:(data)=>{
                    console.log(data);
                }
            });
            return false;
        });
    });
</script>

</body>
<!--  /Body -->
</html>