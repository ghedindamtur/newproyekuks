<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function showSidebarMenu()
    {
        $menus = Menu::all();
        return view('include.sidebar', compact('menus'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'menu' => 'nullable|string|max:255',
        ]);

        // Simpan single data jika ada
        if ($request->filled('menu')) {
            Menu::create([
                'menu' => $request->input('menu'),
            ]);
        }

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }
}
