<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ComplaintRequest;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class PengaduanController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Complaint::query()->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <p class="text-bold">
                            '. $item->letter_status .'
                            </p>
                            
                        ';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action','photo'])
                ->make();
        }
        return view('pages.pengaduan');
    }

    public function createPengaduan()
    {
        return view('pages.create-pengaduan');
    }

    public function store(ComplaintRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['slug'] = Str::slug($request->title);
        $data['letter_status'] = 'MENUNGGU' ;
        $data['photo'] = $request->file('photo')->store('assets/complaint','public');

        Complaint::create($data);

        return redirect()->route('layanan-pengaduan');

        

    }

        
        
    
}
