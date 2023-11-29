<?php

namespace App\Http\Controllers;

use App\Models\DailyActivity;
use App\Models\DailyOnProgress;
use App\Models\DailyPicAfater;
use App\Models\DailyPicBefore;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class DailyActivityController extends Controller
{
    function index(Request $request)
    {
        $data = DailyActivity::where('id_user', $request->input('id_user'))
            ->with('user')
            ->with('pic_before')
            ->with('pic_onprogress')
            ->with('pic_picbefore')
            ->orderBy('datetime', 'desc')
            ->get();

        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    function store(Request $request)
    {

        $data = [];

        $data_post_pic_before = [];
        $data_post_daily_on_progress = [];
        $data_post_daily_pic_afaters = [];
        // Proses setiap foto yang diunggah


        if ($request->file('pic_before')) {
            foreach ($request->file('pic_before') as $photo) {
                // Simpan foto ke direktori yang diinginkan
                //compress foto 
                $fotoName = time() . '_' . Str::random(6) . '.' . $photo->extension();

                // open an image file
                $img = Image::make($photo->path());

                // prevent possible upsizing
                $img->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // finally we save the image as a new file
                $destinationPath = public_path('/storage/foto/' . $fotoName);
                $data_post_pic_before[] = ['photo' => 'foto/' . $fotoName];
                $img->save($destinationPath);
            }
        }


        if ($request->file('pic_onprogress')) {
            foreach ($request->file('pic_onprogress') as $photo) {
                // Simpan foto ke direktori yang diinginkan
                //compress foto 
                $fotoName = time() . '_' . Str::random(6) . '.' . $photo->extension();

                // open an image file
                $img = Image::make($photo->path());

                // prevent possible upsizing
                $img->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // finally we save the image as a new file
                $destinationPath = public_path('/storage/foto/' . $fotoName);
                $data_post_daily_on_progress[] = ['photo' => 'foto/' . $fotoName];
                $img->save($destinationPath);
            }
        }

        if ($request->file('pic_after')) {
            foreach ($request->file('pic_after') as $photo) {
                // Simpan foto ke direktori yang diinginkan
                //compress foto 
                $fotoName = time() . '_' . Str::random(6) . '.' . $photo->extension();

                // open an image file
                $img = Image::make($photo->path());

                // prevent possible upsizing
                $img->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // finally we save the image as a new file
                $destinationPath = public_path('/storage/foto/' . $fotoName);
                $data_post_daily_pic_afaters[] = ['photo' => 'foto/' . $fotoName];
                $img->save($destinationPath);
            }
        }



        $currentTime = Carbon::now();
        if ($request->jenis_daily == "before") {

            // Membuat objek waktu dari string tanggal dan jam
            $customDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime);
            $data['datetime'] = $customDateTime;

            $data['id_user'] = $request->id_user;
            $data['title'] = $request->title;

            $post = DailyActivity::create($data);

            foreach ($data_post_pic_before as $photo_before) {
                $post_before_pic['photo'] = $photo_before['photo'];
                $post_before_pic['id_photo'] = $post->id;
                DailyPicBefore::create($post_before_pic);
            }
        }

        if ($request->jenis_daily == "progress") {
            $data['id_user'] = $request->id_user;
            $data['title'] = $request->title;

            foreach ($data_post_daily_on_progress as $photo_onprogress) {
                $post_onprogress['photo'] = $photo_onprogress['photo'];
                $post_onprogress['id_photo'] = $request->id_photo;
                DailyOnProgress::create($post_onprogress);
            }
        }

        if ($request->jenis_daily == "done") {

            $postdaily = DailyActivity::where('id_user', $request->id_user)->where('id', $request->id)->update([
                'description' => $request->description
            ]);



            foreach ($data_post_daily_pic_afaters as $photo_after) {
                $post_after['photo'] = $photo_after['photo'];
                $post_after['id_photo'] = $request->id;
                DailyPicAfater::create($post_after);
            }
        }



        $response = [
            'message' => 'berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);

        notify()->success('Successfully added');
        return redirect('/notifikasi');
    }

    function edit(Request $request)
    {
        $edit = DailyActivity::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $edit
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    function work_onprogress(Request $request)
    {
        $data = DailyActivity::where('id_user', $request->input('id_user'))->where('description', null)->get();
        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    function index_admin()
    {
        $data = DailyActivity::with('user')
            ->with('pic_before')->with(
                'pic_picbefore'
            )->orderBy('created_at', 'desc')->get();
        $starts_at = null;
        $ends_at = null;
        $id_user = null;
        $user = User::all();
        return view('daily.daily', [
            'data' => $data,
            'user' => $user,
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
            'id_user' => $id_user

        ]);
    }

    public function filter(Request $request)
    {
        $starts_at = $request->input('starts_at');
        $ends_at = $request->input('ends_at');
        $id_user = $request->input('user_id');
        if ($id_user != "") {
            $data = DailyActivity::with('user')
                ->where('id_user', $id_user)
                ->whereBetween('datetime', [$starts_at, $ends_at])
                ->paginate(10);
        } else {

            $data = DailyActivity::with('user')
                ->whereBetween('datetime', [$starts_at, $ends_at])
                ->paginate(10);
        }

        return view('daily.daily', [
            'data' => $data,
            'user' => User::all(),
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
            'id_user' => $id_user,

        ]);
    }


    public function print_daily(Request $request)
    {

        if ($request->starts_at != null && $request->ends_at != null && $request->grup_id != null) {


            $report = DailyActivity::with('user')
                ->whereBetween('datetime', [$request->starts_at, $request->ends_at])
                ->orderBy('datetime', 'desc')
                ->get();

            $pdf = Pdf::loadview('daily.print', [
                'data' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else if ($request->starts_at != null && $request->ends_at != null) {

            $report = DailyActivity::with('user')
                ->where('id_user', $request->id_user)
                ->whereBetween('datetime', [$request->starts_at, $request->ends_at])
                ->orderBy('datetime', 'desc')
                ->get();

            $pdf = Pdf::loadview('daily.print', [
                'data' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else {

            $report = DailyActivity::with('user')
                ->where('id_user', $request->id_user)
                ->orderBy('datetime', 'desc')
                ->get();

                $pdf = Pdf::loadview('daily.print', [
                    'data' => $report,
                    'starts_at' => $request->starts_at,
                    'ends_at' => $request->ends_at,
                ]);
                $pdf->setPaper('A4', 'potrait');
                // return $pdf->download($name);
                return $pdf->stream();
        }
    }
}
