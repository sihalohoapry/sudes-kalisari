<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\BusinesslicenseRequest;
use App\Http\Requests\BirthCertificateRequest;
use App\Http\Requests\DomicileLetterRequest;
use App\Http\Requests\MarriageCertificateRequest;
use App\Models\BirthCertificate;
use App\Models\Businesslicense;
use App\Models\DomicileLetter;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    public function izinUsaha(){
        if (request()->ajax()) {
            $query = Businesslicense::query()->with(['user'])->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <p class="text-bold">
                            '. $item->status .'
                            </p>
                            
                        ';
                })
                ->editColumn('photo_kk', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action','photo'])
                ->make();
        }
        return view('pages.surat-izin-usaha');
    }

    public function createIzinUsaha(){
        $data = Auth::user();
        return view('pages.create-suratusaha',[
            'user' => $data
        ]);
    }

    public function storeIzinUsaha(BusinesslicenseRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->business_name) ;
        $data['photo_ktp'] = $request->file('photo_ktp')->store('assets/surat/suratusaha','public');

        Businesslicense::create($data);
        return redirect()->route('surat-izin-usaha');
    }


    public function menikah(){
        if (request()->ajax()) {
            $query = MarriageCertificate::with(['user'])->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <p class="text-bold">
                            '. $item->status_pengajuan .'
                            </p>
                            
                        ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.surat-menikah');
    }

    public function createSuratMenikah(){
        $data = Auth::user();
        return view('pages.create-surat-menikah',[
            'data' => $data
        ]);
    }

    public function storeSuratMenikah(MarriageCertificateRequest $request)
    {
        $data = $request->all();
        $data['photo_ktp'] = $request->file('photo_ktp')->store('assets/surat/suratmenikah','public');
        
        if($request->photo_ktp_marry){
            $data['photo_ktp_marry'] = $request->file('photo_ktp_marry')->store('assets/foto-update','public');
        }else{
            unset($data['photo_ktp_marry']);
        }
        
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


    public function kelahiran(){
        if (request()->ajax()) {
            $query = BirthCertificate::query()->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <p class="text-bold">
                            '. $item->status .'
                            </p>
                            
                        ';
                })
                ->editColumn('photo_kk', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action','photo'])
                ->make();
        }
        return view('pages.surat-kelahiran');
    }
    public function createKelahiran(){
        return view('pages.create-surat-kelahiran');
    }

    public function storeSuratLahir(BirthCertificateRequest $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['slug'] = $request->name_son;
        $data['photo_ktp_father'] =  $request->file('photo_ktp_father')->store('assets/surat/suratlahir','public');
        $data['photo_ktp_mother'] =  $request->file('photo_ktp_mother')->store('assets/surat/suratlahir','public');

        BirthCertificate::create($data);
        return redirect()->route('surat-kelahiran');
    }

    public function domisili(){
        if (request()->ajax()) {
            $query = DomicileLetter::with(['user'])->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <p class="text-bold">
                            '. $item->status_letter .'
                            </p>
                            
                        ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.surat-domisili');
    }
    public function createDomisili(){
        $user = Auth::user();
        return view('pages.create-surat-domisili',[
            'user' => $user,
        ]);
    }
    public function storeSuratDomisili(DomicileLetterRequest $request)
    {
        $data = $request->all();
        $data['photo_kk'] = $request->file('photo_kk')->store('assets/surat/suratdomisili','public');
        $data['citizen'] = $request->citizen;
        $data['users_id'] = Auth::user()->id;

        DomicileLetter::create($data);
        return redirect()->route('surat-domisili');
    }

}
