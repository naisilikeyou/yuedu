<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yansongda\Pay\Gateways\Alipay\WebGateway;
use Yansongda\Pay\Gateways\Wechat;

class NovelController extends Controller
{
    public function indexpicture()
    {
        return view('admin/picture');
    }

    public function uploads(Request $request)
    {
        //接收上传文件
        $data = $request->all();
        //文件上传操作
        $file = request()->file('img');
        //定义上传文件的类型
        $allow = ['jpg','jpeg','png','gif','PNG'];
        if (request()->hasFile('img') && $file->isValid()) {
            //获取文件的后缀名
            $ext = $file->getClientOriginalExtension();
            if (in_array($ext,$allow)) {
                //获取文件的当前位置
                $path = $file->getRealPath();
                //生成新文件的文件名
                $newfilename = date('Ymd')."/".time().".".$ext;
                $data['img'] = $newfilename;
                $re = Storage::disk('uploads')->put($newfilename,file_get_contents($path));
                if ($re) {
                    //入库
                    $res = DB::table('upload')->insert($data);
                    if ($res) {
                        echo '文件上传成功';
                    }else{
                        echo '文件上传失败';
                    }

                }else{
                    echo '文件类型不符合，请从新上传';exit;
                }
            }else{
               echo '文件上传错误，请从新上传文件';exit;
            }
        }
    }

    public function addnovel()
    {
        return view('admin/addnovel');
    }
}
