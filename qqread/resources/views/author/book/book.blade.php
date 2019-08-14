@include('public.top');
@include('public.left');
<div class="layui-body" style="margin-top: 30px;width: 600px">
    <form class="layui-form" action="add" method="post" enctype="multipart/form-data"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->
        <div class="layui-form-item">
            <label class="layui-form-label">选择分类</label>
            <div class="layui-input-block">
                <select name="type_id" lay-filter="aihao">
                    <option value="">请选择</option>
                    @foreach($data as $v)
                    <option value="{{$v->type_id}}">{{$v->type_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">书名</label>
            <div class="layui-input-block">
                <input type="text" name="b_name" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">笔名</label>
            <div class="layui-input-block">
                <input type="text" name="a_id" value="{{$res[0]->a_id}}" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">书面图</label>
            <div class="layui-input-block">
                <input type="file" name="b_img" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否上架</label>
            <div class="layui-input-block">
                <input type="radio" name="is_shelf" value="男" title="是"checked>
                <input type="radio" name="is_shelf" value="女" title="否">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
        <!-- 更多表单结构排版请移步文档左侧【页面元素-表单】一项阅览 -->
    </form>
</div>
@include('public.button');
<script>
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>
