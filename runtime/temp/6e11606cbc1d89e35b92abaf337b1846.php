<?php /*a:2:{s:74:"/Users/mars/Desktop/code/tpblog/application/admin/view/index/register.html";i:1531904744;s:71:"/Users/mars/Desktop/code/tpblog/application/admin/view/layouts/app.html";i:1531928185;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>管理后台--注册</title>
    <link rel="shortcut icon" href="/static/admin/img/logo.jpg" type="image/x-icon">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/admin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/static/admin/css/weather-icons.min.css" rel="stylesheet"/>
    <link id="beyond-link" href="/static/admin/css/beyond.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="login-container">
    <div class="loginbox bg-white">
        <div class="loginbox-title">注册</div>
        <form>
            <div class="loginbox-or">
                <div class="or-line"></div>
            </div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" name="username" placeholder="填写用户名"/>
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" name="password" placeholder="填写密码"/>
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" name="confirm_password" placeholder="确认密码"/>
            </div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" name="nickname" placeholder="昵称"/>
            </div>
            <div class="loginbox-textbox">
                <input type="email" class="form-control" name="email" placeholder="邮箱"/>
            </div>
            <div class="loginbox-forgot">
                <a href="<?php echo url('admin/index/forget'); ?>">忘记密码?</a>
            </div>
            <div class="loginbox-submit">
                <input type="button" class="btn btn-primary btn-block" id="register" value="注册">
            </div>
            <div class="loginbox-signup">
                <a href="<?php echo url('admin/index/login'); ?>">返回登录</a>
            </div>
        </form>
    </div>
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
    $(() => {
        $('#register').click(() => {
            $.ajax({
                url: "<?php echo url('admin/index/register'); ?>",
                type: 'post',
                data: $('form').serialize(),
                dataType: 'json',
                success: (data) => {
                   if(data.code==1){
                       layer.msg(data.msg,{
                           icon:6,
                           time:2000
                       },()=>{
                           location.href = data.url;
                       });
                   }else{
                       layer.open({
                           title:'注册失败',
                           content:data.msg,
                           icon:5,
                           anim:6
                       });
                   }
                }
            })
            return false;
        })
    })
</script>

</body>
<!--  /Body -->
</html>
