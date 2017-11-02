<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>个人博客</title>
    <meta name="keywords" content="个人博客"/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="/Public/home/css/home_index.css"/>
    <link rel="stylesheet" href="/Public/home/css/home_style.css"/>
    <script type="text/javascript" src="/Public/home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="/Public/home/js/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<div id="header">
    <h1>个人博客</h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="home.html">首页</a></li>
        <li><a href="#">关于我</a></li>
        <li><a href="#">碎言碎语</a></li>
        <li><a href="#">个人日记</a></li>
        <li><a href="#">相册展示</a></li>
        <li><a href="#">学无止境</a></li>
        <li><a href="#">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="c_left">
        <div class="s_tuijian">
            <h2>文章<span>推荐</span></h2>
        </div>
        <div class="content_text">
            <?php if(is_array($articles)): foreach($articles as $key=>$art): ?><!--wz-->
                <div class="wz">
                    <h3><a href="#" title="<?php echo ($art["title"]); ?>"><?php echo ($art["title"]); ?></a></h3>
                    <dl>
                        <dt><img src="<?php echo ($art["image_path"]); ?>" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1"><?php echo ($art["descript"]); ?></p>
                            <p class="dd_text_2">
                                <span class="left author"><?php echo ($art["user_name"]); ?></span><span
                                    class="left sj">时间:2014-8-9</span>
                                <span class="left fl">分类:<a href="#" title="学无止境">学无止境</a></span><span
                                    class="left yd"><a
                                    href="#" title="阅读全文">阅读全文</a>
               </span>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
                <!--wz end--><?php endforeach; endif; ?>

        </div>
    </div>
    <!--left end-->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="/Public/home/images/my.jpg" width="230" height="230" alt="博主"/>
            <p>博主：XX</p>
            <p>职业：</p>
            <p>简介：</p>
            <p>
                <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span
                    class="left b_2"></span></a>
            <div class="clear"></div>
            </p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul>
                    <li>精心推荐</li>
                    <li>最新文章</li>
                    <li class="hd_3">随机文章</li>
                </ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
            </div>
        </div>
        <!--end-->
        <div class="link">
            <h2>友情链接</h2>
            <p><a href="#">个人博客</a></p>
        </div>
    </div>
    <!--right end-->
    <div class="clear"></div>
</div>
<!--content end-->
<!--footer start-->
<div id="footer">
    <p>Design by:<a href="#">Test</a> 2017年11月2日10:09:07</p>
</div>
<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing: "easeOutBounce", delayTime: 400});</script>
<script type="text/javascript" src="/Public/home/js/nav.js"></script>

<script>
    $.ajax({
        type: "GET",
        url: "<?php echo U('Index/articles');?>",
        data: '',
        async: true,
        error: function (request) {
            alert("Connection error");
        },
        success: function (data) {
            if (data.code == 1) {
                $.each(data.data, function (index, value) {
                    $('.content_text').append('<div class="wz">\n' +
                        '                    <h3><a href="#" title="' +
                        value.title +
                        '">' +
                        value.title +
                        '</a></h3>\n' +
                        '                <dl>\n' +
                        '                <dt><img src="' +
                        value.image_path +
                        '" width="200" height="123" alt=""></dt>\n' +
                        '                    <dd>\n' +
                        '                    <p class="dd_text_1">' +
                        value.descript +
                        '</p>\n' +
                        '                <p class="dd_text_2">\n' +
                        '                    <span class="left author">' +
                        value.user_name +
                        '</span><span class="left sj">时间:2014-8-9</span>\n' +
                        '                <span class="left fl">分类:<a href="#" title="学无止境">学无止境</a></span><span\n' +
                        '            class="left yd"><a\n' +
                        '                href="#" title="阅读全文">阅读全文</a>\n' +
                        '                    </span>\n' +
                        '                    <div class="clear"></div>\n' +
                        '                    </p>\n' +
                        '                    </dd>\n' +
                        '                    <div class="clear"></div>\n' +
                        '                    </dl>\n' +
                        '                    </div>')
                });
            } else {
                console.log(data.message);
            }
        }
    });
</script>

</body>
</html>