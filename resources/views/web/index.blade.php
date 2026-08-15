<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>应用下载 - {{sysconfig('site','app_name')}}</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/plugs/layui-v2.x/css/layui.css" media="all">
    <style>
        body { background: #f5f7fa; padding: 40px 15px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; }
        .download-card { 
            max-width: 440px; 
            margin: 0 auto; 
            background: #fff; 
            padding: 35px 25px; 
            border-radius: 16px; 
            box-shadow: 0 8px 30px rgba(0,0,0,0.06); 
            text-align: center; 
        }
        .app-logo { width: 88px; height: 88px; border-radius: 20px; margin-bottom: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .app-title { font-size: 22px; font-weight: 700; color: #1a1a1a; margin-bottom: 6px; }
        .app-slogan { font-size: 13px; color: #8c8c8c; margin-bottom: 20px; }
        
        /* 标签与安全提示 */
        .tags-group { margin-bottom: 25px; }
        .tags-group .layui-badge-rim { border-radius: 12px; padding: 3px 10px; font-size: 12px; color: #52c41a; border-color: #b7eb8f; background: #f6ffed; margin: 0 2px; }
        
        /* 按钮样式 */
        .download-btn-group .layui-btn { 
            display: block; 
            width: 100%; 
            height: 48px; 
            line-height: 48px; 
            font-size: 16px; 
            font-weight: 600;
            border-radius: 24px; 
            background: linear-gradient(135deg, #1677ff 0%, #0958d9 100%);
            box-shadow: 0 4px 12px rgba(22, 119, 255, 0.3);
            transition: all 0.2s ease;
        }
        .download-btn-group .layui-btn:active { transform: scale(0.98); }

        /* 特性展示 */
        .feature-grid { 
            display: flex; 
            justify-content: space-around; 
            margin-top: 30px; 
            padding-top: 25px; 
            border-top: 1px dashed #f0f0f0; 
        }
        .feature-item { text-align: center; }
        .feature-item i { font-size: 20px; color: #1677ff; display: block; margin-bottom: 4px; }
        .feature-item span { font-size: 12px; color: #666; }

        /* 页脚信息 */
        .footer-tips { margin-top: 25px; font-size: 12px; color: #bfbfbf; line-height: 1.6; }

        /* 微信遮罩 */
        .weixin-tip {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.85);
            z-index: 99999;
            color: #fff;
            text-align: right;
            padding: 20px 25px 0 0;
        }
        .weixin-tip img { width: 200px; height: auto; }
    </style>
</head>
<body>

<!-- 微信环境提示遮罩 -->
<div id="weixinTip" class="weixin-tip">
    <img src="https://game.gtimg.cn/images/game/act/a20200302wechat/tip.png" alt="请在浏览器中打开">
</div>

<div class="download-card">
    <img src="{{sysconfig('site','app_logo')}}" alt="App Logo" class="app-logo">
    <div class="app-title">{{sysconfig('site','app_name')}}</div>
    <div class="app-slogan">官方正版 · 极速安全下载</div>

    <div class="tags-group">
        <span class="layui-badge-rim"><i class="layui-icon layui-icon-vercode"></i> 已通过安全检测</span>
        <span class="layui-badge-rim"><i class="layui-icon layui-icon-ok-circle"></i> 无广告插件</span>
    </div>

    <div class="download-btn-group">
        <a href="{{sysconfig('site','app_link')}}" id="downloadBtn" class="layui-btn">
            <i class="layui-icon layui-icon-android"></i> 立即下载安装
        </a>
    </div>

    <!-- 增加界面丰满度的特性栏 -->
    <div class="feature-grid">
        <div class="feature-item">
            <i class="layui-icon layui-icon-android"></i>
            <span>官方节点</span>
        </div>
        <div class="feature-item">
            <i class="layui-icon layui-icon-chart"></i>
            <span>极速传输</span>
        </div>
        <div class="feature-item">
            <i class="layui-icon layui-icon-cellphone"></i>
            <span>全机型兼容</span>
        </div>
    </div>

    <div class="footer-tips">
        <p>如遇到无法安装，请在设置中开启“允许未知来源”</p>
        <p>© {{date('Y')}} {{sysconfig('site','app_name')}} All Rights Reserved.</p>
    </div>
</div>

<script src="static/plugs/layui-v2.x/layui.js" charset="utf-8"></script>
<script>
    layui.use(['layer'], function () {
        var $ = layui.jquery;
        var ua = navigator.userAgent.toLowerCase();
        var isWechat = ua.indexOf('micromessenger') !== -1;

        if (isWechat) {
            $('#downloadBtn').on('click', function (e) {
                e.preventDefault();
                $('#weixinTip').fadeIn(200);
            });

            $('#weixinTip').on('click', function () {
                $(this).fadeOut(200);
            });
        }
    });
</script>
</body>
</html>