@include('public.top');
@include('public.left');
    <div class="layui-body"  style="padding: 15px;">
        <table class="layui-table">
            <colgroup>
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>章节</th>
                <th>章节名</th>
                <th>章节内容</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
            <tr>
                <td>第{{$v->s_num}}章</td>
                <td>{{$v->s_name}}</td>
                <td>{{$v->s_desc}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@include('public.button');