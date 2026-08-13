<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>应用下载</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/plugs/layui-v2.x/css/layui.css" media="all">
    <style>
        body { background-color: #f2f2f2; padding-top: 50px; }
        .download-card { max-width: 480px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); text-align: center; }
        .app-logo { width: 90px; height: 90px; border-radius: 16px; margin-bottom: 15px; }
        .app-title { font-size: 22px; font-weight: bold; color: #333; margin-bottom: 8px; }
        .app-desc { font-size: 14px; color: #666; margin-bottom: 25px; line-height: 1.5; }
        .download-btn-group .layui-btn { display: block; width: 100%; margin: 10px 0 0 0; height: 44px; line-height: 44px; font-size: 16px; border-radius: 4px; }
        .app-info { margin-top: 25px; font-size: 12px; color: #999; border-top: 1px solid #eee; padding-top: 15px; }
    </style>
</head>
<body>

<div class="download-card">
    <img src="{{sysconfig('site','app_logo')}}" alt="App Logo" class="app-logo">
    <div class="app-title">{{sysconfig('site','app_name')}}</div>
    <!-- <div class="app-desc">一句话应用简介，说明主要功能与亮点特点。</div> -->

    <div class="download-btn-group">
        <a href="{{sysconfig('site','app_link')}}" class="layui-btn layui-btn-normal">
            <i class="layui-icon layui-icon-android"></i> 正版下载
        </a>
    </div>

    <div class="app-info">
        <span>版本：v1.0.0</span> | <span>大小：25.4 MB</span> | <span>更新时间：2026-08-13</span>
    </div>
</div>

<script src="static/plugs/layui-v2.x/layui.js" charset="utf-8"></script>
<script>
    layui.use(['layer'], function () {
        var $ = layui.jquery;
        // 扩展：若需UA判断自动调起下载，可直接在此处添加
    });
</script>
</body>
</html>