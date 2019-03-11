yum源加速
https://www.jianshu.com/p/b7cd2f9fb8b7

```
cd /etc/yum.repos.d
mv CentOS-Base.repo CentOS-Base.repo.bak
wget -O CentOS-Base.repo http://mirrors.aliyun.com/repo/Centos-7.repo

#查看系统
cat /etc/os-release

wget -O /etc/yum.repos.d/epel.repo http://mirrors.aliyun.com/repo/epel-7.repo

yum clean all
yum makecache
```
