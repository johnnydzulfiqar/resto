<?php

namespace App\Http\Controllers\Route;

use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RekapTransaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function welcome()
    {
        $menus = Menu::get('nama_menu');
        $total_menu = Menu::all()->count();

        $today = now()->format('yy-mm-dd');
        // $AgoDate= now()->subWeek()->format('Y-m-d');
        $AgoDate = now()->subDays()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $income = $in_a_week->sum('total_harga');

        return view('welcome', compact('menus', 'total_menu', 'total_transaksi', 'income'));
    }

    public function manajerDashboard()
    {
        $menus = Menu::get('nama_menu');
        $total_menu = Menu::all()->count();

        $today = now()->format('yy-mm-dd');
        $AgoDate = now()->subWeek()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $income = $in_a_week->sum('total_harga');

        return view('manajer.dashboard', compact('menus', 'total_menu', 'total_transaksi', 'income'));
    }
    public function kasirDashboard()
    {
        $menus = Menu::get('ketersediaan');
        $total_menu = Menu::all()->count();
        $stok = Menu::where('user_id', '=', 2)->sum('ketersediaan');
        $stok_terjual = Transaksi::all()->sum('jumlah');
        $today = now()->format('yy-mm-dd');
        $AgoDate = now()->subWeek()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $income = $in_a_week->sum('total_harga');
        $total_aset = Menu::all()->sum('ketersediaan') * Menu::all()->sum('harga');
        $total_terjual = Transaksi::all()->sum('total_harga');

        return view('kasir.dashboard', compact('menus', 'total_menu', 'total_transaksi', 'income', 'stok', 'stok_terjual', 'total_aset', 'total_terjual'));
    }

    public function transaksiPelanggan()
    {
        $user_id = Auth::user()->id;

        $data_hari_ini = Transaksi::where('user_id', $user_id)->whereDate('created_at', date('Y-m-d'))->get();

        $data_keseluruhan = Transaksi::where('user_id', $user_id)->whereDate('created_at', '<', date('Y-m-d'))->get();

        $menus = Menu::get('nama_menu');
        $total_menu = Menu::all()->count();

        $today = now()->format('yy-mm-dd');
        // $AgoDate= now()->subWeek()->format('Y-m-d');
        $AgoDate = now()->subDays()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $total_bayar = $in_a_week->sum('total_harga');


        return view('pelanggan.transaksi.index', compact('data_hari_ini', 'data_keseluruhan', 'total_bayar'));
    }
    public function show(Transaksi $transaksi, $id)
    {
        $data = Transaksi::find($id);
        $pdf = Pdf::loadview('pelanggan.transaksi.pdf', compact('data'))->setPaper('a4', 'landscape');
        return $pdf->stream();
        // return view('pelanggan.transaksi.pdf', compact('data'));
    }
}
