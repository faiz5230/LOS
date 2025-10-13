<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan semua data user

    public function __construct()
    {
        $this->middleware('auth');
    }
        public function index(Request $request)
    {
        $search = $request->query('search');
        $resource = 'users';
        $route = 'users';


        $collection = User::query();
        if (!empty($search)) {
            $collection = $collection->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('nik', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%');
            });
        }
        $rows = $request->query('rows', 10);
        $collection = $collection->orderBy('id', 'desc')->paginate($rows);
        $collection->appends(request()->query());

        return view('users.index', compact('collection', 'search', 'resource', 'route', 'rows'));
    }

    // Menampilkan form untuk membuat user baru
    public function create()
    {
        $resource = 'users';
        $route = 'users';

        return view('users.create', compact('resource', 'route'));
    }

    // Menyimpan user baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);

        // Simpan data user ke dalam database

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'password' => Hash::make($request->password),

        ]);
        return redirect('/users')->with('success', 'User berhasil ditambahkan.');
    }

    // Menampilkan detail user berdasarkan ID
    public function show($id)
    { 
        $resource = 'users';
        $route = 'users';
        $user = User::find($id);
        return view('users.show', compact('user','resource','route'));
    }

    // Menampilkan form untuk mengedit user berdasarkan ID
    public function edit($id)
    {
        $resource = 'users';
        $route = 'users';
        $user = User::find($id);
        return view('users.edit', compact('resource', 'route', 'user'));
    }

    // Mengupdate user berdasarkan ID
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users,nik,' . $id,
            'email' => 'required|unique:users,email,' . $id,
            'password' => 'nullable',
        ]);

        // Mengambil data user dari database
        $user = User::find($id);

        // Memeriksa apakah password baru dikirimkan
        if ($request->has('password')) {
            // Jika password baru dikirimkan, perbarui password
            $user->update([
                'name' => $request->input('name'),
                'nik' => $request->input('nik'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')), // Enkripsi password baru
            ]);
        } else {
            // Jika password tidak dikirimkan, perbarui data pengguna tanpa mengubah password
            $user->update([
                'name' => $request->input('name'),
                'nik' => $request->input('nik'),
                'email' => $request->input('email'),
            ]);
        }


        return redirect('/users')->with('success', 'User berhasil diperbarui.');
    }

    // Menghapus user berdasarkan ID
    public function destroy($id)
    {
        // Mengambil data user yang akan dihapus
        $userToDelete = User::find($id);

        // Mendapatkan data user yang sedang login
        $loggedInUser = auth()->user();

        // Memeriksa apakah user yang akan dihapus adalah user yang sedang login
        if ($userToDelete->id === $loggedInUser->id) {
            return redirect('/users')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        // Hapus user dari database
        $userToDelete->delete();

        return redirect('/users')->with('success', 'User berhasil dihapus.');

    }
}

?>