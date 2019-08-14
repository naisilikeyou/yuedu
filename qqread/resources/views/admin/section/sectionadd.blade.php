@include('public.top');
@include('public.left');
<div class="layui-body" style="padding: 15px; width: 600px">
    <form class="layui-form" action="adddo" method="post">

        <div class="layui-form-item">
            <label class="layui-form-label">选择作品</label>
            <div class="layui-input-block">
                <select name="b_id" lay-verify="required">
                    <option value="">请选择作品</option>
                    @foreach($data as $v)
                    <option value="{{$v->b_id}}">{{$v->b_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">章节</label>
            <div class="layui-input-block">
                <input type="text" name="s_num" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">章节名</label>
            <div class="layui-input-block">
                <input type="text" name="s_name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">章节内容</label>
            <div class="layui-input-block">
                <textarea name="s_desc" placeholder="请输入内容" class="layui-textarea"></textarea>
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
@include('public.button');

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