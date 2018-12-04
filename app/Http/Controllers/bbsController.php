<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bbsController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show($id)
    {
//        查询数据
        $lists = DB::table('bbs')->where('id', $id)->paginate(10);
        $name = DB::table('user')->where('id', $id)->value('name');

        return view('bbs', ['lists' => $lists, 'name' => $name]);
    }


}