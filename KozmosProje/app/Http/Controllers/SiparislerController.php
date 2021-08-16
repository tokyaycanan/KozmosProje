<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siparis;
class SiparislerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $siparis =Siparis::paginate(50);
      return view('siparis', compact('siparis'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($SiparisNo)
    {
          $siparis=Siparis::find($SiparisNo);

          return view('edit', compact('siparis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($SiparisNo)
    {
        $siparis=Siparis::find($SiparisNo);
        $siparis->delete();
        return redirect()-> route('siparisler.index')->withSuccess('Siparis Kaydı Silinmistir.');
    }
}
