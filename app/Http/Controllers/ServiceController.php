<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\ServisRequest;
use App\Http\Requests\ServisUpdate;
use App\Models\Checkouts;
use App\Models\ServisModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;



class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->search;

        if ($keyword) {
            $services = ServisModel::where('nama_barang', 'like', "%{$keyword}%")
                ->where('id_user', Auth::id())
                ->orWhere('tanggal_servis', 'like', "%{$keyword}%")
                ->orWhere('status', 'like', "%{$keyword}%")
                ->latest('tanggal_servis')
                ->paginate(5);
        } else {
            $services = ServisModel::where('id_user', Auth::id())->latest('tanggal_servis')->paginate(5);
        }

        return view('user.dashboard-user', compact('services'));
    }

    public function create()
    {
        $now = Carbon::now();
        $day = date("Y-m-d");
        $tanggal = $now->year . $now->month . $now->day;
        $cek = ServisModel::count();
        $servis = ServisModel::all()->last();

        if ($cek == 0) {
            $urut = 1001;
            $nomor = $tanggal . $urut;
        } elseif ($servis->tanggal_servis < $day) {
            $nomor = $tanggal . 1001;
        } elseif (substr($servis->nomor_antri, -4) == 1999) {
            $nomor = $tanggal . 1001;
        } else {
            $ambil = ServisModel::all()->last();
            $urut = substr($ambil->nomor_antri, -4) + 1;
            $nomor = $tanggal . $urut;
        }

        return view('user.form-servis', compact('nomor'));
    }

    public function store(ServisRequest $request)
    {
        $data = $request->all();

        $image = $request->file('image');
        $image->storeAs('public/services', $image->hashName());

        $data['image'] = $image->hashName();
        $data['id_user'] = Auth::id();

        $data['tanggal_servis'] = date('Y-m-d H:i:s');
        $input = ServisModel::create($data);

        // dd($input);
        if ($input) {
            Alert::success('Berhasil mengajukan servis');
            return redirect()->route('dashboard.user');
        } else {
            Alert::error('Gagal mengajukan servis');
            return redirect()->route('dashboard.user');
        }
    }

    public function show($id)
    {
        $servis = ServisModel::findOrFail($id);
        $servis->notif = 0;
        $servis->save();
        return view('user.detail-servis', compact('servis'));
    }

    public function edit($id)
    {
        $service = ServisModel::findOrFail($id);

        return view('user.form-servis-edit', compact('service'));
    }

    public function update(ServisUpdate $request, $id)
    {
        $data = $request->all();

        $service = ServisModel::findOrFail($id);

        if (!$request->file('image')) {
            $service->update($data);
        } else {
            Storage::delete('public/services/' . $service->image);
            $image = $request->file('image');
            $image->storeAs('public/services', $image->hashName());
            $data['image'] = $image->hashName();
            $service->update($data);
        }

        if ($service) {
            Alert::success('Data servis berhasil diubah');
            return redirect()->route('dashboard.user');
        } else {
            Alert::error('Data servis gagal diubah');
            return redirect()->route('dashboard.user');
        }
    }

    public function delete($id)
    {
        $service = ServisModel::findOrFail($id);
        Storage::delete('public/services/' . $service->image);
        $service->delete();

        if ($service) {
            Alert::success('Data servis berhasil dibatalkan');
            return redirect()->route('dashboard.user');
        } else {
            Alert::error('Data servis gagal dibatalkan');
            return redirect()->route('dashboard.user');
        }
    }

    public function transaksi()
    {
        // $transactions = Checkouts::with('service')->where('id_user', Auth::id())->latest()->paginate(5);
        $transactions = Checkouts::whereHas('service', function ($q) {
            $q->where('id_user', Auth::id());
        })->latest()->paginate(5);

        return view('user.user-transaksi', compact('transactions'));
    }

    public function showTransaksi($id)
    {
        $transaksi = Checkouts::findOrFail($id);

        return view('user.user-detail-transaksi', compact('transaksi'));
    }

    public function bayar($id)
    {
        $transaksi = Checkouts::findOrFail($id);

        return view('user.user-confirm-transaksi', compact('transaksi'));
    }
}
