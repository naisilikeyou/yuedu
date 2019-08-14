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
        <tr>
            <th>ID</th>
            <th>轮播图</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td><img width="200" height="100" src="/uploads/{{$v->img}}" /></td>
                <td class="td-manage">
                    <a href="">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('public.adminbutton');