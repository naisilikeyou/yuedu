<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="test">
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">编辑管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="/admin/add">添加轮播图</a></dd>
                    <dd><a href="/admin/lists">展示轮播图</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">签约审核</a>
                <dl class="layui-nav-child">
                    <dd><a href="/admin/signlist">待审核列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">小说分类</a>
                <dl class="layui-nav-child">
                    <dd><a href="/admin/type">添加分类</a></dd>
                    <dd><a href="/admin/listtype">展示分类</a></dd>
                </dl>
            </li>

            {{--<li class="layui-nav-item">--}}
                {{--<a href="javascript:;">解决方案</a>--}}
                {{--<dl class="layui-nav-child">--}}
                    {{--<dd><a href="javascript:;">列表一</a></dd>--}}
                    {{--<dd><a href="javascript:;">列表二</a></dd>--}}
                    {{--<dd><a href="">超链接</a></dd>--}}
                {{--</dl>--}}
            {{--</li>--}}
            {{--<li class="layui-nav-item"><a href="">云市场</a></li>--}}
            {{--<li class="layui-nav-item"><a href="">发布商品</a></li>--}}
        </ul>
    </div>
</div>