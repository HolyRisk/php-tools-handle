## layui page tool

### 介绍
基于tp框架，配合layui，实现layui代码分页格式输出、tp框架含：tp5.0/tp5.1/tp6.0 


### 文档

我的个人博客 欢迎访问   [云天阁](https://wangshengxian.com/)




 ### 效果

![](page.png)

### 安装教程

1. 使用composer方式

   ```
   composer require holyrisk/php-tools-handle
   ```

2. 使用第三方类库加载方式

   代码仓库地址

   ```
   https://github.com/HolyRisk/php-tools-handle
   ```

### 使用说明

1. tp6.0

   项目全局使用 编辑app/provider.php 添加

   或者

   项目模块使用 编辑app/模块/provider.php 添加

   ```
    'think\Paginator'    =>    'Holyrisk\PhpToolsHandle\Layui',//新增
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
