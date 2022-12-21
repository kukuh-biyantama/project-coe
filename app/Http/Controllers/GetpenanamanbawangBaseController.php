<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clusterpetani;
use GuzzleHttp\Client;
use PhpParser\Node\Expr\Cast\Double;
use phpDocumentor\Reflection\Types\Null_;
use PhpOption\None;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GetpenanamanbawangBaseController extends Controller
{
    public function verifypetani(Request $request)
    {

        $id_Petani = $request->input('idSawahpetani');
        $verifyPanen = $request->input('verify-checkbox');
        // $currentuserid = Auth::user()->id;
        $updatekspanen = DB::table('penanaman_bawangs')->where('id', $id_Petani)->update(['ks_panen' => $verifyPanen]);
        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil ditambahkan');
        // $users = DB::table('penanaman_bawangs')->get();
        // dd($users);

    }
}
