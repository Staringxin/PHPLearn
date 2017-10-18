<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>欢迎您学习PHP语言，PHP是世界上最友好的语言</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="/Public/Home/css/reset.css">
        <link rel="stylesheet" href="/Public/Home/css/supersized.css">
        <link rel="stylesheet" href="/Public/Home/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>Login</h1>
            <form action="<?php echo U('Index/login');?>" method="post" id="form">
                <input type="text" name="username" class="username" placeholder="Username">
                <input type="password" name="password" class="password" placeholder="Password">
                <button type="button" class="commit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
        </div>

        <!-- Javascript -->
        <script src="/Public/Home/js/jquery-1.8.2.min.js"></script>
        <script src="/Public/Home/js/supersized.3.2.7.min.js"></script>
        <script src="/Public/Home/js/supersized-init.js"></script>
        <script src="/Public/Home/js/scripts.js"></script>

        <script>
            $('.commit').click(function(){
                var user_name = $('.username').val();
                var user_pass = $('.password').val();

                console.log(user_name+','+user_pass);

                if(user_name == '') {
                    $('.error').fadeOut('fast', function(){
                        $(this).css('top', '27px');
                    });
                    $('.error').fadeIn('fast', function(){
                        $('.username').focus();
                    });
                    return ;
                }
                if(user_pass == '') {
                    $('.error').fadeOut('fast', function(){
                        $(this).css('top', '96px');
                    });
                    $('.error').fadeIn('fast', function(){
                        $('.password').focus();
                    });
                    return ;
                }

                $.ajax({
                    type: "POST",
                    url:$('#form').attr('action'),
                    data:$('#form').serialize(),// 序列化表单值
                    async: false,
                    error: function(request) {
                        alert("Connection error");
                    },
                    success: function(data) {
//                        var result = JSON.parse(data);
                        console.log(data);
                        console.log(data.code);

                        if(data.code==1){

                            console.log(data.msg);
                            alert(data.msg);
//                            window.location.href="跳转页面"
                        }else{

                            console.log(data.msg);
                            alert(data.msg);
                        }
//
                    }
                });
            });
        </script>
    </body>

</html>