@include('admin.layout.head')
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">

        <div class="layui-form-item">
            <label class="layui-form-label">卡密</label>
            <div class="layui-input-block">
                <input type="text" name="key" class="layui-input cdkey-input" placeholder="请输入卡密" value="">
                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm" lay-on="gen">生成</button>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input" placeholder="请输入排序" value="0">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态(1:禁用,2:启用)</label>
            <div class="layui-input-block">
                <input type="text" name="status" class="layui-input" placeholder="请输入状态(1:禁用,2:启用)" value="2">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注说明</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea" placeholder="请输入备注说明"></textarea>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>
@include('admin.layout.foot')
<script>
    layui.use(['form'], function() {
        var form = layui.form;
        var util = layui.util;

        util.on('lay-on', {
            'gen': function() {
                var key = randomString(16);
                $('.cdkey-input').val(key);
            },
        })
    });
</script>