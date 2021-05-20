# Postman-cn
最新汉化版本：8.4.0  
更新时间：2021-05-14  
不要Clone存储库！  
请按照下面步骤：

## 步骤
1. [下载&安装Postman](#1-下载Postman)  
2. [设置为中文](#2-设置为中文)  
3. [禁止更新❗❗❗](#3-禁止更新)  

## 帮助
QQ群：[494969115](https://jq.qq.com/?_wv=1027&k=WAheqTCx)  
不使用联网工作区，可以点开右上角设置图标中的便笺(Scratch Pad)模式


## 1. 下载Postman

### 最新版本下载
https://www.postman.com/downloads/


### 历史版本下载

**Windows64位** https://dl.pstmn.io/download/version/版本号/win64  
**Windows32位** https://dl.pstmn.io/download/version/版本号/win32  
**Mac** https://dl.pstmn.io/download/version/版本号/osx  
**Linux** https://dl.pstmn.io/download/version/版本号/linux  


## 2. 设置为中文
### 1. 下载[**app.zip**](https://github.com/hlmd/Postman-cn/releases)  

### 2. 解压替换
#### Windows
解压&&复制app文件夹到resources目录下即可(PS:\~为应用程序安装目录，默认在C:/Users/用户名/AppData/Local/Postman)  
**\~/Postman/app-\*.\*.\*/resources/**  
例如main.js位置：app-8.2.1/resources/app/main.js

#### Mac
解压&&替换app目录  
访达/应用程序/Postman.app(右键查看包内容)  
目录位置 ~/Postman.app/Contents/Resources/app

#### Linux
解压&&替换app目录


## 3. 禁止更新❗❗❗
> 这是一项危险操作，将会使你的电脑无法与Postman下载服务器连接，当然这就可以使你的Postman应用程序不再更新  

将此解析加入你电脑的主机文件hosts
```
0.0.0.0         dl.pstmn.io
```
### hosts文件在
Windows：C:/Windows/System32/drivers/etc/  
Linux|Mac：/etc/

> 如果想更新请将此解析注释或移除


