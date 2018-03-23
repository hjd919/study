# study

## 服务器 ubuntu16.04
* docker 
  * 安装 https://docs.docker.com/install/linux/docker-ce/ubuntu/
* git 
  * 安装 `sudo apt-get install git`
  * 配置ssh公钥 gitee.com https://gitee.com/profile/sshkeys
* docker-compose 
  * 安装 `https://docs.docker.com/compose/install/#install-compose`
  * 拉取dc代码 `git clone git@gitee.com:jdhu/dc.git`
  * 运行 `docker-compose up -d`
* 配置nginx/etc/conf.d/default.conf
* 配置docker-compose配置文件：端口

## 后端php\lumen
* 安装、配置 https://lumen.laravel.com/docs/5.6

## 前端js\react\dva\ant-pro

linux
切换用户执行命令
```
useradd nagios
passwd nagios
su - www-data -c '/usr/bin/docker exec dc_fpm_1 php reg_mrg/artisan schedule:run'
```
