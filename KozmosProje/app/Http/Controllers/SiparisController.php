<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Siparis;



class SiparisController extends Controller
{
    public function siparisList()
    {
      $siparis =Siparis::paginate(50);
      return view('siparis',compact('siparis'));
    }

  /* public function edit($SiparisNo)
    {
      $siparis=Siparis::find($SiparisNo)
        return view('siparis.edit', compact('siparis'));
    }
*/

        function dbSiparis(){
        $data=DB::table('siparis')->paginate(50);
        return view('dbsiparis',['data'=>$data]);

      }
}
