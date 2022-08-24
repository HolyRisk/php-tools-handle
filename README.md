# tp-layui-page

#### 介绍
基于tp框架，配合layui，实现layui代码分页格式输出、tp框架含：tp5.0/tp5.1/tp6.0 


#### 文档

 [English documents](README.en.md)

我的个人博客 欢迎访问   [云天阁](https://wangshengxian.com/)




 #### 效果

![](page.png)

#### 安装教程

1. 使用composer方式

   ```
   composer require holyrisk/tp-layui-page dev-master
   ```

2. 使用第三方类库加载方式

   代码仓库地址

   ```
   https://gitee.com/holyrisk/tp-layui-page
   ```


#### 使用说明

1. tp6.0

   项目全局使用 编辑app/provider.php 添加

   或者

   项目模块使用 编辑app/模块/provider.php 添加

   ```
   'think\Paginator'    =>    'Holyrisk\TpLayuiPage\Layui',//新增
   ```

   示例

   ```
   <?php
   use app\ExceptionHandle;
   use app\Request;
   
   // 容器Provider定义文件
   return [
       'think\Request'          => Request::class,
       'think\exception\Handle' => ExceptionHandle::class,
       'think\Paginator'    =>    'Holyrisk\TpLayuiPage\Layui',//新增
   ];
   
   ```

   

2. tp5.1

3. tp5.0


#### 参与贡献

1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request


#### 特技

1.  使用 Readme\_XXX.md 来支持不同的语言，例如 Readme\_en.md, Readme\_zh.md
2.  Gitee 官方博客 [blog.gitee.com](https://blog.gitee.com)
3.  你可以 [https://gitee.com/explore](https://gitee.com/explore) 这个地址来了解 Gitee 上的优秀开源项目
4.  [GVP](https://gitee.com/gvp) 全称是 Gitee 最有价值开源项目，是综合评定出的优秀开源项目
5.  Gitee 官方提供的使用手册 [https://gitee.com/help](https://gitee.com/help)
6.  Gitee 封面人物是一档用来展示 Gitee 会员风采的栏目 [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)
