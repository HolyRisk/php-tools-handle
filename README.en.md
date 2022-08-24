# tp-layui-page

#### Description
Based on the TP framework, with the help of layui, realize the pagination format output of layui code. The TP framework includes: tp5.0/tp5.1/tp6.0


#### Document

 [中文文档](README.md)

Welcome to my personal blog   [云天阁](https://wangshengxian.com/)

#### Effect
![](page.png)

#### Installation

1. Using composer method

   ```
   composer require holyrisk/tp-layui-page dev-master
   ```

2.  Use the third-party class library loading method

    Code warehouse address

    ```
    https://gitee.com/holyrisk/tp-layui-page
    ```


#### Instructions

1. tp6.0

   Project global use edit app/provider.php add

   or 

   Project module use edit app/module/provider.php add

   ```
   'think\Paginator'    =>    'Holyrisk\TpLayuiPage\Layui',//add
   ```

   demo

   ```
   <?php
   use app\ExceptionHandle;
   use app\Request;
   
   // 容器Provider定义文件
   return [
       'think\Request'          => Request::class,
       'think\exception\Handle' => ExceptionHandle::class,
       'think\Paginator'    =>    'Holyrisk\TpLayuiPage\Layui',//add
   ];
   
   ```

   

2.  tp5.1

3.  tp5.0

#### Contribution

1.  Fork the repository
2.  Create Feat_xxx branch
3.  Commit your code
4.  Create Pull Request


#### Gitee Feature

1.  You can use Readme\_XXX.md to support different languages, such as Readme\_en.md, Readme\_zh.md
2.  Gitee blog [blog.gitee.com](https://blog.gitee.com)
3.  Explore open source project [https://gitee.com/explore](https://gitee.com/explore)
4.  The most valuable open source project [GVP](https://gitee.com/gvp)
5.  The manual of Gitee [https://gitee.com/help](https://gitee.com/help)
6.  The most popular members  [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)
