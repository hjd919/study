nginx location
https://segmentfault.com/a/1190000013267839

location的配置有两种形式，前缀字符和正则。查找匹配的时候，先查找前缀字符，选择最长匹配项，再查找正则。正则的优先级高于前缀字符。
正则的查找是按照在配置文件中的顺序进行的。因此正则的顺序很重要，建议越精细的放的越靠前。
使用=精准匹配可以加快查找的顺序，如果根域名经常被访问的话建议使用=。
