<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App_help;

class TrsatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $load_css = [
            App_help::load_css("template/assets/vendor/datatables.net/css/dataTables.bootstrap4.min.css"),
            App_help::load_css("template/assets/vendor/datatables.net/css/buttons.bootstrap4.min.css"),
            App_help::load_css("template/assets/vendor/datatables.net/css/select.bootstrap4.min.css"),
        ];
        $load_js = [
            App_help::load_js("template/assets/vendor/datatables.net/js/jquery.dataTables.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/dataTables.bootstrap4.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/dataTables.buttons.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/buttons.bootstrap4.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/buttons.html5.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/buttons.flash.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/buttons.print.min.js"),
            App_help::load_js("template/assets/vendor/datatables.net/js/dataTables.select.min.js"),
        ];
        return view('satuan', compact('load_css', 'load_js'));
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
