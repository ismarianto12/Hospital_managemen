<?php

// author by ismarianto

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App_help;
use DataTables;
use App\Model\Tmpasien as Pasien;

class TmpasienController extends Controller
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

        return view('tmpasien', compact('load_css', 'load_js'));
    }

    function show()
    {
        $data = Pasien::get();
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


    public function create()
    {
    }
    public function store()
    {
    }

    public function edit(Request $request)
    {
    }
    public function update(Request $request)
    {
    }


    public function destroy(Request $request, $id)
    {
    }
}
