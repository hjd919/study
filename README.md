# study
##经验
* 删除数据，需备份；需删除对应关联关系

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
  * 配置中国加速 https://www.docker-cn.com/registry-mirror
  * 运行 `docker-compose up -d`
* 配置nginx/etc/conf.d/default.conf
* 配置docker-compose配置文件：端口
* 使用docker部署nodejs\php应用 https://www.jianshu.com/p/410ec589cfc2
* 同步mysql数据库和表
* [配置nginx\fpm的配置文件以及系统优化](https://github.com/Tinywan/lua-nginx-redis/blob/master/Nginx/nginx-parameter-config.md)

## 后端
* php\lumen api
  * `git clone git@gitee.com:jdhu/api.git` -> 修改配置文件.env mysql\oss配置,
  * 文档 https://lumen.laravel.com/docs/5.6 

## 前端
* js\react\dva\ant-pro 后台 admin
  * `git clone git@github.com:hjd919/ant-design-pro.git --depth=1 admin`
  * 文档 https://pro.ant.design/docs/getting-started-cn

* js\react\dva\umi 前台 wap
  * `git clone git@github.com:hjd919/wap.git --depth=1`
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

* 查看linux版本
```
cat /etc/issue
```
* 同步fork后原始的内容 https://www.zhihu.com/question/28676261

## 服务器
* [定时任务配置](https://www.baidu.com/link?url=EdVjt2uih5usT3CBl-isb-QGOb9JKpcsU97SHyp_5bc1NsfPRRchmXCxtPGi7z6ewBNlnpFfHQ4YTXlFRYknlK&wd=&eqid=ba0598e200022503000000025b14fe5e)

## css3
* flex浮动效果
```
flex-basis: 25%;  内部

display: flex;flex-wrap: wrap;justify-content: flex-start; 外部
```

### php
* 公共部分 common
Selector 解析脚本

(正则表达式)[https://cuiqingcai.com/1186.html]
