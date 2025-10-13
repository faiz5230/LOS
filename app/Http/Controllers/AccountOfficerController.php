<?php

namespace App\Http\Controllers;

use App\Models\AccountOfficer;
use Illuminate\Http\Request;

class AccountOfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $search = $request->query('search');
        $resource = 'account_officers';
        $route = 'account_officers';

        $collection = AccountOfficer::query();
        if (!empty($search)) {
            $collection = $collection->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('jabatan', 'LIKE', '%' . $search . '%');
                    
            });
        }
        $rows = $request->query('rows', 10);
        $collection = $collection->orderBy('id', 'desc')->paginate($rows);
        $collection->appends(request()->query());

        return view('account_officers.index', compact('collection', 'search', 'resource', 'route', 'rows'));

        
    }

    public function create()
    {
        $resource = 'account_officers';
        $route = 'account_officers';

        return view('account_officers.create', compact('resource', 'route'));
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'nama_dokumen' => 'required',
            'alamat' => 'required',
        ]);

        AccountOfficer::create($request->all());

        return redirect()->route('account_officers.index')
            ->with('success', 'Account Officer berhasil ditambahkan.');
    }

    public function show($id)
    {
        $resource = 'account_officers';
        $route = 'account_officers';

        $accountOfficer = AccountOfficer::findOrFail($id);
        return view('account_officers.show', compact('accountOfficer','resource','route'));
    }

    public function edit($id)
    {
        $resource = 'account_officers';
        $route = 'account_officers';
        $accountOfficer = AccountOfficer::findOrFail($id);
        return view('account_officers.edit', compact('accountOfficer','resource','route'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'nama_dokumen' => 'required',
            'alamat' => 'required',
        ]);

        $accountOfficer = AccountOfficer::findOrFail($id);
        $accountOfficer->update($request->all());

        return redirect()->route('account_officers.index')
            ->with('success', 'Account Officer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $accountOfficer = AccountOfficer::findOrFail($id);
        $accountOfficer->delete();

        return redirect()->route('account_officers.index')
            ->with('success', 'Account Officer berhasil dihapus.');
    }
}
