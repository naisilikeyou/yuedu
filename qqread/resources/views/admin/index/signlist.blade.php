@include('public.admintop');
@include('public.adminleft');
<div class="layui-body" style="margin:15px">
    <table class="layui-table">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr class="layui-bg-black">
            <th>作品分类</th>
            <th>作品书名</th>
            <th>作者笔名</th>
            <th>书面图</th>
            <th>是否签约</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>
                    @if ($v->c_id ==1)
                        都市
                    @elseif ($v->c_id ==2)
                        玄幻
                    @elseif ($v->c_id ==3)
                        奇幻
                    @elseif ($v->c_id ==4)
                        修仙
                    @else
                        校园
                    @endif
                </td>
                <td>{{$v->b_name}}</td>
                <td>{{$v->a_id}}</td>
                <td><img width="100" height="100" src="/uploads/{{$v->b_img}}" /></td>
                <td>
                    @if ($v->sign ==1)
                        <button class="layui-btn layui-btn-radius"><a href="javascript:;" class="update" id="{{$v->b_id}}">签约</a></button>
                    @else
                    <button class="layui-btn layui-btn-radius layui-btn-disabled">已签约</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('public.adminbutton');
<script>
    $('.update').click(function () {
        var id=$(this).attr('id');
        // alert(id);die;
        if(!id){
            alert('请选择一条');
        }
        $.post('/admin/update',{id:id},function (res) {
            if(res==1){
                alert('签约成功');
                // $('#'+id).remove();
                window.location.replace("");
            }else{
                alert('签约失败');
            }
        });
    })
</script>