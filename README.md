简介
===============================
本项目主要是自己根据开发习惯和经验，在开发过程中对Yii2框架进行适当的添加和修改，加些自己的东西，以便更适合自己，使用起来更加得心应手，嗯。

收集一些个人平时开发过程中，一些常用的东西，都有哪些东西呢？
比如，递归删除文件夹的函数，或者是curl函数以便操作post和get请求等。

有兴趣的朋友可以在issue里面，多多交流讨论。

更新
===============================
V1.0		2016-05-26 22:08:30

1、common\models\Utils.php
这是个工具类，主要放一些常用的工具函数。比如上面说的递归删除文件夹的函数和curl函数之类的。

2、api\controllers\BaseController.php这个类继承自Controller基类，然后其他的普通api\controller类都继承自它。而我呢，就在这个上面加一些自己的开发习惯，说得不太恰当。比如，定义了一些api端返回码，或者beforeAction中处理token。在这个类里面加的东西为的是可以在所有的api\controller中的每个控制器类都可以共用，具体可以见代码🤓

3、配置了Url美化。比如正常的请求地址可能是这样：

http://www.cenyol.com/index.php?r=site/login

但配置之后，就变成这样了

http://www.cenyol.com/site/login 去掉了index.php，是不是挺好看的。

甚至还可以这样

http://www.cenyol.com/login 对于登录这个操作，直接通过一个单词来表示：login

配置需要两个东西：

一个是api\web下的.htaccess文件，这个是Apache的配置文件，用来Rewrite，隐藏index.php需要它。

还有一个就是配置文件，见common\config\main.php中的component里url部分的配置😝。

4、重写了api\controller下的site\error路由，以便可以对客户端进行错误提示。

5、找了个自己觉得还可以的Css模板作为后台，第一次更新把里面的登录页面和首页整合了下。


安装步骤
===============================

1. 使用composer安装

	命令行下：composer.phar install
    
2. 直接下载vendor压缩包，解压安装即可。

	下载地址：http://pan.baidu.com/s/1c1fQTGW

3. 运行根目录下的init文件

	类Unix系统使用命令：./init

	Window直接点击运行init文件即可；

4. 一些配置说明

	数据库的配置信息写在common/config/main-local.php中

以下来自Yii模板原文：
Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend                  后台管理系统，给管理员用的
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend                 前台系统端，正常线上用户使用
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               视图层，前端UI交互人员工作区，用于存放前端html和js等源码文件
    web/                 静态资源存放区，在view层中直接引用即可，如<script src="js/site.js" type="text/javascript"></script>
        js/              js文件目录
        css/             css文件目录
        images/          图片资源文件
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```