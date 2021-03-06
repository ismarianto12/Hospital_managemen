<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tmobat as Obat;
use App\Model\Trsatuan;

use Validator;
use DataTables;
use App_help;

class ObatController extends Controller
{

    function __construct()
    {
        $this->middleware('level:admin|operator');
    }

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
        return view('tmobat', compact('load_css', 'load_js'));
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
    public function show()
    {
        $data = Obat::with('trsatuan')->get();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                $button = '<button type="button" name="edit" to="' . Url('tmpasien/edit', $data->id) . '" class="edit btn btn-primary btn-sm">Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
                return $button;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
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
