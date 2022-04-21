<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('google', 'HandleProviderCallback');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->is_admin) {
            case 1:
                return redirect('/dashboard/admin');
                break;

            default:
                return redirect('dashboard/user');
                break;
        }
    }

    public function transaksi()
    {
        switch (Auth::user()->is_admin) {
            case 1:
                return redirect()->route('admin.transaksi');
                break;

            default:
                return redirect()->route('user.transaksi');
                break;
        }
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function HandleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];

        // firstOrCreate ini gunanya adalah jika email sudah ada maka sistem tidak akan membuat data baru
        // $user = User::firstOrcreate(['email' => $data['email']], $data);

        // cek apakah email user sudah ada atau belum
        $user = User::whereEmail($data['email'])->first();
        //jika tidak ada
        if (!$user) {
            // masukan request ke database
            $user = User::create($data);
        }

        Auth::login($user, true);
        // dd($callback);
        // return $user;
        return redirect()->route('dashboard');
    }

    public function settingProfile($id)
    {
        $user = User::findOrFail($id);
        return view('setting-user', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);

        if (!$request->file('avatar')) {
            $user->update($data);
        } else {
            Storage::delete('public/users/avatar' . $user->avatar);
            $image = $request->file('avatar');
            $image->storeAs('public/users/avatar', $image->hashName());
            $data['avatar'] = $image->hashName();
            $user->update($data);
        }
        return redirect('/dashboard');
    }
}
