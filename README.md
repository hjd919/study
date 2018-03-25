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
* 使用docker部署nodejs\php应用 https://www.jianshu.com/p/410ec589cfc2

## 后端
* php\lumen api
  * `git clone git@gitee.com:jdhu/api.git` -> 修改配置文件.env mysql配置
  * 文档 https://lumen.laravel.com/docs/5.6 

## 前端
* js\react\dva\ant-pro 后台 backend
  * `git clone git@github.com:hjd919/ant-design-pro.git --depth=1 backend`
  * 文档 https://pro.ant.design/docs/getting-started-cn

* js\react\dva\umi 前台 frontend
  * `git clone git@github.com:hjd919/umi-dva-user-dashboard.git --depth=1 frontend`
  * 文档 https://umijs.org/docs/zh-Hans/api.html
  * umi demo https://github.com/umijs/umi/tree/master/examples

## 微信小程序
* js\dva
 * https://github.com/yautah/dva-wxapp
* wepy
 * https://github.com/dyq086/wxYuHanStore
 * https://github.com/aben1188/awesome-wepy
 
 
## 参考教程
* 微信小程序 https://github.com/justjavac/awesome-wechat-weapp
* php https://github.com/phptodayorg/php-must-watch
* 前端 https://github.com/icepy/Front-End-Develop-Guide
* “资料汇总”的汇总 https://github.com/justjavac/awesome-awesomeness-zh_CN
---

## 其他
* 切换用户执行命令
```
useradd nagios
passwd nagios
su - www-data -c '/usr/bin/docker exec dc_fpm_1 php reg_mrg/artisan schedule:run'
```
