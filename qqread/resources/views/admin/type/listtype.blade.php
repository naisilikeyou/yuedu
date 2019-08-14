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
            <th>分类名称</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{$v->type_id}}</td>
                <td>{{$v->type_name}}</td>
                <td class="td-manage">
                    <a href="/admin/deltype/{{$v->type_id}}">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('public.adminbutton');