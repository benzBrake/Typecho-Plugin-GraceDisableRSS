# GraceDisableRSS
Typecho 博客禁用 RSS 功能插件。

插件没有选项，打开即可禁用 RSS 功能。

## 原理
拦截路由，只是不让访问 RSS 路径，阉割`/feed`路由后台会显示异常。

## 兼容性
兼容 Typecho 1.1 及以后版本，支持 PHP 5.3+
