<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomicileLetterRequest;
use App\Models\DomicileLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class SuratDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = DomicileLetter::query()->with(['user']);

            return DataTables::of($query)
            ->addColumn('action', function ($item) {
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
                                    <a class="dropdown-item" href="' . route('surat-domisili.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <a class="dropdown-item" href="' . route('surat-domisili.show', $item->id) . '">
                                        Cetak
                                    </a>
                                </div>
                            </div>
                    </div>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.admin.surat-domisili');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomicileLetterRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;

        DomicileLetter::create($data);
        return redirect()->route('surat-domisili');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DomicileLetter::findOrFail($id);
        return view('pages.admin.cetak-surat-domisili',[
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
        $data = DomicileLetter::findOrFail($id);
        return view('pages.admin.detail-surat-domisili',[
            'item'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DomicileLetterRequest $request, $id)
    {
        $data = DomicileLetter::findOrFail($id);
        $item = $request->all();

        $data->update($item);
        return redirect()->route('surat-domisili.index');
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
