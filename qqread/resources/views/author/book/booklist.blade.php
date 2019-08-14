@include('public.top');
@include('public.left');
<div class="layui-body" style="margin: 15px">
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
            <th>是否上架</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
        <tr>
            <td>{{$v->type_name}}</td>
            <td>{{$v->b_name}}</td>
            <td>{{$v->a_id}}</td>
            <td><img width="240" height="150" src="/uploads/{{$v->b_img}}"/></td>
            <td>
                @if ($v->sign ==1)
                    未签约
                @else
                    <button class="layui-btn layui-btn-radius layui-btn-disabled">已签约</button>
                    <button class="layui-btn layui-btn-radius"><a href="/author/sectionlist/{{$v->b_id}}">目录</a></button>
                @endif
            </td>
            <td>
            @if ($v->is_shelf ==1)
                上架
            @else
                未上架
            @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('public.button');