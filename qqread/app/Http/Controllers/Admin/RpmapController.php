<?php

namespace App\Http\Controllers\Admin;

use App\Model\Book;
use App\Model\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Storage;
class RpmapController extends Controller
{
    public function add()
    {
        return view('admin.rpmap.add');
    }

    /**
     * 上传文件
     * @param Request $request
     */
    public function addhandle(Request $request)
    {
        $data=request()->all();
        $file=request()->file('img');
        $allow=['jpg','png','gif'];
        if(request()->hasFile('img') && $file->isValid()) {
            $ext = $file->getClientOriginalExtension();
            if(in_array($ext,$allow)) {
                $path = $file->getRealPath();
                $newfilename = date('Ymd')."/".time().".".$ext;
                $data['img']=$newfilename;
                $re = Storage::disk('uploads')->put($newfilename,file_get_contents($path));
                if($re) {
                    DB::table('rpamp')->insert($data);
                }else{
                    exit('文件类型不合法，请重新检测');
                }
            }else{
                exit('上传文件错误，请重新检测');
            }
        }
    }

    /**
     * 展示作品
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function lists()
    {
        $data=DB::table('rpamp')->limit(6)->get();
//        dd($data);
        return view('admin.rpmap.lists',['data'=>$data]);
    }

    /**
     * 展示位签约的页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function signlist()
    {
        $data = Book::get();
//        dd($data);
        return view('admin.index.signlist',['data'=>$data]);
    }

    /**
     * 修改签约
     * @param Request $request
     * @return int
     */
    public function update(Request $request)
    {
        $arr=$request->id;
        $arr1=[
            'sign'=>2
        ];
        $res=Db::table('book')->where('b_id',$arr)->update($arr1);
        if($res){
            return 1;
        }else{
            return 2;
        }
    }

    /**
     * 分类页面展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function type()
    {
        return view('admin.type.type');
    }

    /**
     * 分类添加方法
     * @param Request $request
     */
    public function addtype(Request $request)
    {
        $type_name = $request->type_name;
        $data = Type::create(['type_name'=>$type_name]);
        dd($data);
    }

    /**
     * 展示分类
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function listtype()
    {
        $data = Type::get();
        return view('admin.type.listtype',['data'=>$data]);
    }

    public function deltype($type_id)
    {
        $data = Type::where('type_id',$type_id)->delete();
        if ($data){
            echo '删除成功';
        }else{
            echo '删除失败';
        }
    }
}
