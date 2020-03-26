<!doctype html>
<html  class="x-admin-sm">
<head>
  <meta charset="UTF-8">
  <title>注册</title>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">注册</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" action="{{url('index/register_do')}}" class="layui-form" >
            <input name="user_tel" placeholder="手机号"  type="text" lay-verify="required" class="layui-input" id="tel">
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input name="code" lay-verify="required" placeholder="验证码"  type="text" class="layui-input">
            <input type="button" value="获取验证码" lay-submit lay-filter="login" style="width:30%;" id="yan">
            <hr class="hr15">
            <input value="注册" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    
</body>
</html>
<script>
$(document).on('click','#yan',function(){
    var _this=$(this);
    var user_tel=$('#tel').val();
    if(user_tel==''){
        alert('请输入手机号');
        return false;
    }
    $.ajax({
        url:"http://1905lw.lwei.xyz/index/sendSms",
        type:'GET',
        dataType:'json',
        data:{user_tel:user_tel},
        success:function(res) {
            //alert(res.msg);
            if(res.code){
                _this.attr("disabled");
            }
        }
    })

});


</script>