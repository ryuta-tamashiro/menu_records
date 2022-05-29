<?php

namespace App\Http\Controllers;

use App\Models\MMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenusController extends Controller
{
    public function index()
    {
        $menus = MMenu::all();

        return view('member.menus.index', compact('menus'));
    }

    public function new()
    {
        $menu_types = [
            1 => '主食',
            2 => '主菜',
            3 => '副菜',
        ];

        return view('member.menus.new', compact('menu_types'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'menu_type' => 'required|max:4',
            'description' => 'max:100',
            'url' => 'max:100',
        ]);

        DB::transaction(function () use ($validated) {
            MMenu::create([
                'name' => $validated['name'],
                'menu_type' => (int) $validated['menu_type'],
                'description' => $validated['description'],
                'url' => $validated['url'],
                'is_default' => false,
                'sort_no' => 10,
                'operation_user_id' => 1
            ]);
        });

        return redirect('menus')->with('success_message', '登録に成功しました');
    }
}
