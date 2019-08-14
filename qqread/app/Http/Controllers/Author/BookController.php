<?php

namespace App\Http\Controllers\Author;

use App\Model\Book;
use App\Model\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Storage;
class BookController extends Controller
{
    /**
     * 获取小说类型
     * 获取作者
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function book()
    {
        $data = DB::table('type')->get();
        $res = DB::table('author')->get();
        return view('author.book.book',['data'=>$data,'res'=>$res]);
    }

    /**
     *获取审核状态
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function booklist(){
        $data = DB::table('book')->join('type','book.type_id','=','type.type_id')->get();
//        dd($data);
        return view('author.book.booklist',['data'=>$data]);
    }

    /**
     * 上传图片
     * @param Request $request
     */
    public function add(Request $request)
    {
        $data=request()->all();
        $file=request()->file('b_img');
        $allow=['jpg','png','gif','jpeg'];
        if(request()->hasFile('b_img') && $file->isValid()) {
            $ext = $file->getClientOriginalExtension();
            if(in_array($ext,$allow)) {
                $path = $file->getRealPath();
                $newfilename = date('Ymd')."/".time().".".$ext;
                $data['b_img']=$newfilename;
                $re = Storage::disk('uploads')->put($newfilename,file_get_contents($path));
                if($re) {
                    Book::create($data);
                }else{
                    exit('文件类型不合法，请重新检测');
                }
            }else{
                exit('上传文件错误，请重新检测');
            }
        }

    }

    /**
     * 查询小说
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function section(Request $request)
    {
        $data = Book::get();
        return view('admin.section.sectionadd',['data'=>$data]);
    }

    /**
     * 添加小说
     * @param Request $request
     */
    public function adddo(Request $request)
    {
        $data = $request->input();
        $res=Section::insert($data);
        if ($res) {
            echo '添加成功';
        }else{
            echo '添加失败';
        }
    }

    /**
     *展示章节
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function sectionlist($id)
    {
        $data=Section::where('b_id',$id)->orderBy('s_num','asc')->get();
        return view('admin.section.sectionlist',['data'=>$data]);
    }
}
