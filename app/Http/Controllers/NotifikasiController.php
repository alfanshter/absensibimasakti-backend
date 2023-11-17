<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class NotifikasiController extends Controller
{
    function index()
    {
        $data = Notifikasi::orderBy('time', 'desc')->get();
        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }
    function index_admin()
    {
        $data = Notifikasi::all();

        return view('notifikasi.notifikasi', [
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'time' => 'required',
            'location' => 'required'
        ]);

        if ($validator->fails()) {
            $errorMessages = $validator->errors()->first();
            notify()->error($errorMessages, 'Gagal');
        }
        $data = $request->all();
        $post = Notifikasi::create($data);

        notify()->success('Successfully added');
        return redirect('/notifikasi');
    }

    function delete($id)
    {

        $data = Notifikasi::find($id);

        if ($data) {
            $data->delete();
            notify()->success('Successfully deleted');
            return redirect('/notifikasi');
        } else {
            notify()->error('Failed');
            return redirect('/notifikasi');
        }
    }
    function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'time' => 'required',
            'location' => 'required'        ]);

        if ($validator->fails()) {
            $errorMessages = $validator->errors()->first();
            notify()->error($errorMessages, 'Failed');
        }

        $data = Notifikasi::where('id', $request->id)->update([
            'description' => $request->description,
            'time' => $request->time,
            'location' => $request->location        ]);

        notify()->success('Successfully Updated');
        return redirect('/notifikasi');
    }

}
