800px模板介绍
=====
##模板介绍
这是一个800像素宽的单栏响应式HTML5的TYPECHO主题。

![模板预览图](http://page-attach.stor.sinaapp.com/1283320454.jpg "模板预览图") 

##微调

使用前，你可能需要做下面的一些配置：

###博客标题：
修改header.php第28行：

    <div><a href="<?php $this->options->siteUrl(); ?>">Cho's <span class="blue">Blog</span></a></div>

其中，被span标签包围的文字将显示为红色。

###底栏头像：
修改sidebar.php第59行：

    <img src="http://m1.img.libdd.com/farm5/8/F6F5425306A6C88472BA398473043608_180_220.PNG" alt="avator" />

###底栏友情链接：
sidebar.php第47行至50行。

###评论头像的大小：
var\Widget\Comments\Archieve.php第396行：

    'avatarSize' => 32,

修改为58。

style.css调用的图片都存在x.libdd.com服务器上，这是点点网的静态资源托管，非常稳定，速度相当可观，还是一个不产生cookie的domain，所以我已经尽量将静态资源都放在上面了，包括图片、几个javascript文件。修改模板里的图片时记得把style.css里的图片路径修改回来。

##版权

主题以GPLv2 General Public License发布，你可以免费使用，并按照你的意愿进行修改、移植。
ENJOY。当然，欢迎反馈问题。

##更新记录

2012.11.5 修复了底栏日期在IE家族下不正常的显示。对于在此时间之前下载的同学，可以用
    .sidebar .bicolumn ul li { margin-right: 10px; width: 58px; float: left; border-bottom: 1px dashed #AAA; }
替换style.css第554行起的对应的内容。
