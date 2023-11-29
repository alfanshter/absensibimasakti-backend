<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\UserGroup;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\Exports\ReportExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;


class AttendenceController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $report = DB::table('reports')
                ->join('users', 'users.id', '=', 'reports.id_user')
                ->join('groupusers', 'groupusers.id', '=', 'users.grup_id')
                ->orderBy('date', 'desc')
                ->select('reports.*', 'users.name', 'groupusers.nama_grup')->paginate(10);
            $overtime = Report::sum('overtime');

            $id_user = null;
            $starts_at = null;
            $ends_at = null;

            $data = [
                'attendence' => $report,
                'grup' => User::all(),
                'id_user' => $id_user,
                'overtime' => $overtime,
                'starts_at' => $starts_at,
                'ends_at' => $ends_at
            ];

            return view('attendence.index', $data);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function filter(Request $request)
    {
        $starts_at = $request->input('starts_at');
        $ends_at = $request->input('ends_at');
        $id_user = $request->input('user_id');
        if ($id_user != "") {
            $report = Report::with('user:id,name,email')
                ->where('id_user', $id_user)
                ->whereBetween('date', [$starts_at, $ends_at])
                ->paginate(10);

            $overtime = Report::where('id_user', $id_user)
                ->whereBetween('date', [$starts_at, $ends_at])
                ->sum('overtime');
        } else {

            $report = Report::with('user:id,name,email')
                ->whereBetween('date', [$starts_at, $ends_at])
                ->paginate(10);

            $overtime = Report::whereBetween('date', [$starts_at, $ends_at])
                ->sum('overtime');
        }

        return view('attendence.index', [
            'attendence' => $report,
            'grup' => User::all(),
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
            'id_user' => $id_user,
            'overtime' => $overtime,

        ]);
    }



    public function checkin(Request $request)
    {

        //cek absen apakah ada 
        $cekabsen = Report::where('id_user', $request->id_user)->where('date', date('Y-m-d', time()))->first();
        if ($cekabsen != null) {
            $response = [
                'message' => 'success',
                'sukses' => 0,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_CREATED);
        }

        $validator = Validator::make($request->all(), [
            'id_user' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = $request->all();

        if ($request->file('picture_in')) {
            //compress foto 
            $foto = $request->file('picture_in');
            $fotoName = time() . '.' . $foto->extension();

            // open an image file
            $img = Image::make($foto->path());

            // prevent possible upsizing
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // finally we save the image as a new file
            $destinationPath = public_path('/storage/foto/' . $fotoName);
            $data['picture_in'] = 'foto/' . $fotoName;
            $img->save($destinationPath);


            // $data['picture_in'] = $request->file('picture_in')->store('foto', 'public');
        }

        date_default_timezone_set('Asia/Jakarta');
        $hari = date('Y-m-d', time());

        $data['date'] = date('Y-m-d', time());
        $data['check_in'] = date('Y-m-d H:i:s', time());
        $user = Report::create($data);

        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function checkout(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_user' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //cek absen apakah ada 
        $cekabsen = Report::where('id_user', $request->id_user)->where('date', date('Y-m-d', time()))
            ->first();
        if ($cekabsen != null) {
            if ($cekabsen->check_out != null) {
                //sudah absen
                $response = [
                    'message' => 'success',
                    'sukses' => 2,
                    'data' => null
                ];

                return response()->json($response, Response::HTTP_CREATED);
            } else {

                $data = $request->all();

                if ($request->overtime) {
                    if ($request->overtime == 'kosong') {
                        unset($data['overtime']);
                    } else {
                        $data['overtime'] = (int)$request->overtime;
                    }
                }
                if ($request->file('picture_out')) {
                    //compress foto 
                    $foto = $request->file('picture_out');
                    $fotoName = time() . '.' . $foto->extension();

                    // open an image file
                    $img = Image::make($foto->path());

                    // prevent possible upsizing
                    $img->resize(null, 200, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // finally we save the image as a new file
                    $destinationPath = public_path('/storage/foto/' . $fotoName);
                    $data['picture_out'] = 'foto/' . $fotoName;
                    $img->save($destinationPath);

                    // $data['picture_out'] = $request->file('picture_out')->store('foto', 'public');
                }

                date_default_timezone_set('Asia/Jakarta');
                $hari = date('Y-m-d', time());

                // $data['check_out'] = date(now());
                $data['check_out'] = date('Y-m-d H:i:s', time());
                $user = Report::where('id', $cekabsen->id)->update($data);

                $response = [
                    'message' => 'success',
                    'sukses' => 1,
                    'data' => $data
                ];

                return response()->json($response, Response::HTTP_CREATED);
            }
        } else {
            //belum absen masuk
            $response = [
                'message' => 'success',
                'sukses' => 0,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function attendenceApi(Request $request)
    {
        $data = Report::where('id_user', $request->input('id_user'))->get();
        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function print_attendence(Request $request)
    {
        $name = 'attendence' . date('Ymd') . '.pdf';
        $overtime = 0;
        if ($request->starts_at != null && $request->ends_at != null && $request->grup_id != null) {

            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->sum('overtime');

            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'overtime' => $overtime,
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else if ($request->starts_at != null && $request->ends_at != null) {

            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->sum('overtime');


            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'overtime' => $overtime
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else {


            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->sum('overtime');

            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => null,
                'ends_at' => null,
                'overtime' => $overtime

            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        }
    }

    public function export(Request $request)
    {
        $name = 'attendence' . date('Ymd') . '.xlsx';
        return (new ReportExport($request->grup_id, $request->starts_at, $request->ends_at))->download($name);
    }
}
