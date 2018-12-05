<?php

namespace App\Http\Controllers\mv;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mvController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show(Request $request)
    {
        $title = $request->input('title');
        $describe = $request->input('describe');
        $img = $request->input('img');
        $link = $request->input('link');
        if ($title && $describe && $img && $link) {
            //新建数据
            DB::table('mv')->insertGetId(
                [ 'title' => $title, 'describe' => $describe, 'img' => $img, 'link' => $link]
            );
        }


//        更新数据
//        DB::table('user')->where('id', 3)->update(['name' => '小强']);
//        删除数据
//        DB::table('user')->where('id',4)->delete();
//        查询数据
        $lists = DB::table('mv')->orderBy('id', 'desc')->paginate(5);

        return view('mv/mv', ['lists' => $lists]);
    }

    public function del ($id)
    {
//        删除数据
        DB::table('user')->where('id',$id)->delete();
//        查询数据
        $users = DB::table('user')->orderBy('id', 'desc')->paginate(5);

        return view('index', ['users' => $users]);
    }


}