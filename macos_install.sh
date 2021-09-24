#需要安装jq 命令 : MacOS: brew install jq
tag_name=$(curl -k -s https://api.github.com/repos/hlmd/Postman-cn/releases/latest | /usr/local/bin/jq '.tag_name' | sed 's/\"//g')
postman_install_path='/Applications/Postman.app/Contents/Resources'
echo " https://github.com/hlmd/Postman-cn 最新版本：${tag_name}"
echo "Postman.app 存放汉化文件位置：${postman_install_path}"
if [ -d "${postman_install_path}" ];then
    if [ ! -d "${postman_install_path}/app" ]; then
        echo "app 文件夹不存在！"
    else
        rm -rf ${postman_install_path}/app
    fi
    wget -P ${postman_install_path} https://github.com/hlmd/Postman-cn/releases/download/${tag_name}/app.zip
    if [ ! -f "${postman_install_path}/app.zip" ]; then
        echo "下载失败！"
    else
        unzip -n -d ${postman_install_path} ${postman_install_path}/app.zip
        
    fi
    if [ ! -d "${postman_install_path}/app" ]; then
        echo "失败！"
    else
        echo "完成！"
    fi
    rm -rf ${postman_install_path}/app.zip
else
    echo "检查 Postman.app 是否安装"
fi
exec /bin/zsh
