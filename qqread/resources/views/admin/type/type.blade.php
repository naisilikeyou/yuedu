@include('public.admintop');
@include('public.adminleft');
<div class="layui-body" style="padding: 15px; width: 600px">
    <form class="layui-form" action="addtype" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">分类</label>
            <div class="layui-input-block">
                <input type="text" name="type_name" required  lay-verify="required" placeholder="请输入标题分类名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

</div>
@include('public.adminbutton');

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;

        // //监听提交
        // form.on('submit(formDemo)', function(data){
        //     layer.msg(JSON.stringify(data.field));
        //     return false;
        // });
    });
</script>