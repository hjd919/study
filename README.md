# study

## 服务器 ubuntu16.04
* docker 
  * 安装 https://docs.docker.com/install/linux/docker-ce/ubuntu/
  * 配置不用root https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user
* git 
  * 安装 `sudo apt-get install git`
  * 配置ssh公钥 gitee.com https://gitee.com/profile/sshkeys
* docker-compose 
  * 安装 `https://docs.docker.com/compose/install/#install-compose`
  * 拉取dc代码 `git clone git@gitee.com:jdhu/dc.git`
  * 运行 `docker-compose up -d`
* 配置nginx/etc/conf.d/default.conf
* 配置docker-compose配置文件：端口

## api 
* php\lumen
 * 安装、配置 https://lumen.laravel.com/docs/5.6
* 新增 
 * 同步下载代码 `git clone git@gitee.com:jdhu/api.git`
 * 修改配置文件.env mysql配置

## 前端
* js\react\dva\ant-pro
 * 后台 backend 
  * https://github.com/ant-design/ant-design-pro

* js\react\umi
 * 前台 frontend
  * `git clone https://github.com/umijs/umi-dva-user-dashboard.git`
 * umi demo https://github.com/umijs/umi/tree/master/examples

## 微信小程序
* js\dva
 * https://github.com/yautah/dva-wxapp
* wepy 
 * https://github.com/dyq086/wxYuHanStore
 * https://github.com/aben1188/awesome-wepy
 
---

## 其他
* 切换用户执行命令
```
useradd nagios
passwd nagios
su - www-data -c '/usr/bin/docker exec dc_fpm_1 php reg_mrg/artisan schedule:run'
```
