<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MarriageCertificateRequest;
use App\Http\Requests\MarriageCertificateUpdateRequest;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class SuratMenikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (request()->ajax()) {
        //     $query = MarriageCertificate::query();

        //     return DataTables::of($query)
        //     ->addColumn('action', function ($item) {
        //         return '
        //         <div >
        //         <a class="btn btn-primary  mr-1 mb-1" href="' . route('surat-menikah.edit', $item->id) . '">
        //             Lihat
        //         </a>
        //     </div>';
        //     })
        //     ->addColumn('user','user', function ( $item) {
        //         return '
        //         <div >
        //         <a class="btn btn-primary  mr-1 mb-1" href="' . route('surat-menikah.edit', $item->id) . '">
        //             Lihat
        //         </a>
        //         </div>';
        //     })
        //     ->rawColumns(['user'])
        //     ->make()
        //     ;
        // }
        if (request()->ajax()) {
            $model = MarriageCertificate::query()->with(['user']);
                return DataTables::of($model)
                ->addColumn('action', function ( $item) {
                    return '
                    <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('surat-menikah.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <a class="dropdown-item" href="' . route('surat-menikah.show', $item->id) . '">
                                        Cetak
                                    </a>
                                </div>
                            </div>
                    </div>';
                })
                ->toJson();
        }
        return view('pages.admin.surat-menikah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-surat-menikah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarriageCertificateRequest $request)
    {
        $data = $request->all();

        $menikah = $request->is_marry;

        if ($menikah == 'true') {
            $data['status_marry'] = 'Menikah';
        } else {
            $data['status_marry'] = 'Belum Menikah';
        }

        // $data['status_marry'] = $request->is_marry;
        $data['users_id'] = Auth::user()->id;

        MarriageCertificate::create($data);
        return redirect()->route('surat-menikah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MarriageCertificate::findOrFail($id);
        return view('pages.admin.cetak-surat-telah-menikah',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = MarriageCertificate::findOrFail($id);
        return view('pages.admin.detail-surat-menikah',[
            'item'=> $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarriageCertificateUpdateRequest $request, $id)
    {
        $data = $request->all();
        $item = MarriageCertificate::findOrFail($id);

        $item->update($data);
        return redirect()->route('surat-menikah.index');
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
