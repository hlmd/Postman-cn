# Postman 汉化

当前支持版本：9.6.0 ~ 9.10.1  
更新时间：2022-01-18  
直接汉化请看：[README](README.md)

## 目录
 + [先决条件](#先决条件)
 + [步骤](#步骤)
   + [1. 准备](#1-准备)
   + [2. 配置 Postman 信息](#2-配置-postman-信息)
   + [3. 汉化](#3-汉化)
   + [Postman 默认安装位置](#postman-默认安装位置)
   + [网页操作](#网页操作)
 + [命令操作](#命令操作)
   + [php api.php](#php-apiphp)
   + [js-beautify](#js-beautify)
   + [prettier](#prettier)
   + [asar](#asar)
 + [贡献指南](#贡献指南)

## 先决条件

1. **PHP >= 7.0**
2. **[asar](#asar)** *用于解压 asar 包*
3. 用于格式化代码
    + [js-beautify](#js-beautify) 推荐
    + [prettier](#prettier)

## 步骤

### 1. 准备

```shell
git clone https://github.com/hlmd/Postman-cn.git
```

> Windows 可直接使用 [init.bat](#initbat)  
> [Postman 默认安装目录](#postman-默认安装位置) | [asar](#asar)

```shell
# 解压 Postman 安装目录下的 app.asar 
cd <Postman 安装目录下的 Resources 目录>
# 解压 app.asar 到 app 目录
asar e app.asar app

# 以下操作可选
# 拷贝 app.asar 到 Git 项目目录
cp app.asar <Git 项目目录>/app.asar

# 用于 还原
asar e app.asar original 

# 用于 备份
asar e app.asar <app-版本>

# 删除 拷贝过来的 app.asar
rm app.asar
```

#### init.bat

修改 `init.bat`

```shell
# 设置 Postman 的安装磁盘驱动位置
set INSTALL_DERIVE=C:

# 设置 Postman 的安装目录
set INSTALL_PATH=%USERPROFILE%\AppData\Local\Postman\
```

使用

```shell
# 版本可选，不填为最后一个版本
.\init.bat [版本]

# 需要点时间
```

### 2. 配置 Postman 信息

`php/common.php`

```php
# 修改 版本为当前要汉化的 Postman 版本 
const APP_VERSION = '9.8.1';

# 修改 Postman 应用程序下的 app 目录
// Windows
const APP_PATH = 'C:/Users/用户名/AppData/Local/Postman/app-' . APP_VERSION . '/resources/app/';

// Mac
const APP_PATH = '/Applications/Postman.app/Contents/Resources/app/';

```

### 3. 汉化
> 进入 Git 项目目录  
> [php api.php 命令](#php-apiphp) | [网页操作](#网页操作)

```shell
cd php
php api.php s
```

### Postman 默认安装位置

```
# Windows
C:/Users/用户名/AppData/Local/Postman/app-版本/resources/app

# Mac
/Applications/Postman.app/Contents/Resources/app/
```

### 网页操作
> 使用 [Nginx](http://nginx.org/) 、[Apache](https://httpd.apache.org/) 或 [PhpStudy](https://www.xp.cn/) 建立站点  
> 访问 [站点/php/index.php](站点/php/index.php)




## 命令操作

### php api.php

```
使用：php api.php [命令]

进行文件文本替换

命令：
  s, sinicization            汉化
  b, backup                  备份
  r, restore                 还原
  rb, restoreFormBackup      从备份还原
  g, getString               提取文本
  h, help                    帮助
  b, version                 版本

```

### js-beautify

> 格式化 js 文件

```shell
# 安装 https://www.npmjs.com/package/js-beautify
npm i -g js-beautify

# 使用 格式化&替换原文件
js-beautify -r <文件名>

# 帮助
js-beautify -h
```

### prettier

> 格式化文件

```shell
# 安装 https://www.npmjs.com/package/prettier
npm i -g prettier

# 使用 格式化&替换原文件
prettier -w <文件名>

# 帮助
prettier -h
```

### asar

> 操作 asar 文件

```shell
# 安装 https://www.npmjs.com/package/asar
npm i -g asar

# 解压 app.asar 到 app 目录
asar e app.asar app

# 打包 app 目录到 app.asar
asar p app app.asar
```

命令提示

```
使用: asar [选项] [命令]

操作 asar 存档文件

选项:
  -V, --version                          输出版本号
  -h, --help                             显示命令帮助

命令:
  pack|p [选项] <dir> <output>           创建 asar 存档
  list|l [选项] <archive>                列出 asar 档案的文件
  extract-file|ef <archive> <filename>   从存档中提取一个文件
  extract|e <archive> <dest>             提取档案
  *
  help [命令]                            显示命令帮助
```


## 贡献指南
请参考 `php/lang/exp.php` 进行新增  
提取字符前，请先将文件格式化