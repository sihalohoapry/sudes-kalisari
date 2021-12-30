<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ComplaintRequest;
use App\Http\Requests\Admin\ComplaintUpdateRequest;
use App\Http\Requests\ComplaintAcceptedRequest;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Complaint::query();

            
            // <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Login</a>

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                        <a class="btn btn-primary nav-link px-4 text-white" href="' . route('pengaduan.edit', $item->id) . '">
                        Baca
                    </a>
                        </div>';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action','photo'])
                ->make();
        }
        return view('pages.admin.pengaduan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComplaintRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request->file('photo')->store('assets/complaint','public');

        Complaint::create($data);

        return redirect()->route('layanan-pengaduan');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Complaint::findOrFail($id);
        return view('pages.admin.detail-pengaduan',[
            'pengaduan'=>$pengaduan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComplaintRequest $request, $id)
    {
        
        $item = Complaint::findOrFail($id);
        $data = $request->all();
        $data['letter_status'] = $request->letter_status;
        $item->update($data);

        return redirect()->route('pengaduan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
