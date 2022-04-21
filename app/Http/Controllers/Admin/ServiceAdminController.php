<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkouts;
use App\Models\ServisModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class ServiceAdminController extends Controller
{

    public function search(Request $request)
    {
        $usersCount = User::Customer(0);
        $servicePending = ServisModel::where('status', 'pending')->count();
        $serviceSelesai = ServisModel::where('status', 'selesai')->count();
        $keyword = $request->search;
        if ($keyword) {
            $services = ServisModel::Search($keyword);
        } else {
            $services = ServisModel::latest('tanggal_servis')->paginate(5);
        }
        return view('admin.dashboard-admin-search', compact('services', 'usersCount', 'servicePending', 'serviceSelesai'));
    }

    public function show($id)
    {
        $servis = ServisModel::findOrFail($id);
        return view('admin.detail-servis-admin', compact('servis'));
    }

    public function confirm($id)
    {
        $service = ServisModel::findOrFail($id);
        return view('admin.confirm-servis', compact('service'));
    }

    public function confirmStore(Request $request, $id)
    {
        $service = ServisModel::findOrFail($id);
        $data = $request->only(['biaya_jemput', 'tindakan_servis']);
        $data['id_service'] = $service->id;

        $data['notif'] = 1;

        $service->tindakan_servis = $data['tindakan_servis'];
        $service->save();

        $input = Checkouts::create($data);

        if ($input) {
            return redirect()->route('dashboard');
        }
    }

    public function transaksi()
    {
        $transactions = Checkouts::with('service')->latest()->paginate(5);
        $totalLunas = Checkouts::where('status', 1)->count();
        $totalBelum = Checkouts::where('status', 0)->count();
        // dd($transactions);
        $usersCount = User::Customer(0);
        $servicePending = ServisModel::where('status', 'pending')->count();
        $serviceSelesai = ServisModel::where('status', 'selesai')->count();

        return view('admin.admin-transaksi', compact('transactions', 'usersCount', 'totalLunas', 'totalBelum'));
    }
}
