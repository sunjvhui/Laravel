<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
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
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $password = $request->input('password');
        if ($name && $mobile && $password) {
            //新建数据
            DB::table('user')->insertGetId(
                [ 'name' => $name, 'mobile' => $mobile, 'password' => $password]
            );
        }


//        更新数据
//        DB::table('user')->where('id', 3)->update(['name' => '小强']);
//        删除数据
//        DB::table('user')->where('id',4)->delete();
//        查询数据
        $users = DB::table('user')->orderBy('id', 'desc')->paginate(5);

        return view('index', ['users' => $users]);
    }

    public function del ($id)
    {
//        删除数据
        DB::table('user')->where('id',$id)->delete();
//        查询数据
        $users = DB::table('user')->orderBy('id', 'desc')->paginate(5);

        return redirect('index', ['users' => $users]);
    }


}
