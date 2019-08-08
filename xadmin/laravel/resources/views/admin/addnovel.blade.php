<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">书名：</label>
        <input type="text" class="form-control" id="book_name" placeholder="请输入小说名称">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">作者：</label>
        <input type="text" class="form-control" id="username" placeholder="请输入作者名称">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">点击量：</label>
        <input type="text" class="form-control" id="book_num" placeholder="请输入小说点击量">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">网络书本地址：</label>
        <input type="text" class="form-control" id="book_url" placeholder="请输入小说网络地址">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">小说简介：</label>
        <textarea class="form-control" rows="3" placeholder="请输入小说简介" id="book_brief "></textarea>
    </div>
    <div id="editor">
        <p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p>
    </div>

    <button type="submit" class="btn btn-default" id="btn">添加</button>
</form>
</body>
</html>
<script type="text/javascript" src="/release/wangEditor.min.js"></script>
<script type="text/javascript">
var E = window.wangEditor
var editor = new E('#editor')
editor.create()
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(function(){
        $('#btn').click(function(){
            var book_name = $('#book_name').val();
            var username = $('#username').val();
            var book_num = $('#book_num').val();
            var book_url = $('#book_url').val();
            console.log(book_name);
            console.log(username);
            console.log(book_num);
            console.log(book_url);
        })
    })
</script>