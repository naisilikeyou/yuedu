@include('public.admintop');
@include('public.adminleft');
<div class="layui-body">
        <!-- 内容主体区域 -->
    <div style="padding: 15px;width: 600px">
        <form class="layui-form" action="addhandle" method="post" enctype="multipart/form-data"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->

            <div class="layui-form-item">
                <label class="layui-form-label">上传轮播图</label>
                <div class="layui-input-block">
                    <input type="file" name="img" autocomplete="off" class="layui-input">
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
</div>
@include('public.adminbutton');
<script>
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>