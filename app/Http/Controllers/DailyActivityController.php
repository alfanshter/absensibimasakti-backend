<?php

namespace App\Http\Controllers;

use App\Models\DailyActivity;
use App\Models\DailyOnProgress;
use App\Models\DailyPicAfater;
use App\Models\DailyPicBefore;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class DailyActivityController extends Controller
{
    function index()
    {
        $data = DailyActivity::with('pic_before')
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
        $cekdaily = DailyActivity::where('id_user', $request->id_user)
            ->whereRaw('DATE(datetime) = ?', [date('Y-m-d', time())])
            ->first();


        if ($cekdaily != null) {

            if ($request->jenis_daily == "before") {
                $response = [
                    'message' => 'hari ini sudah',
                    'sukses' => 2,
                    'data' => null
                ];
    
                return response()->json($response, Response::HTTP_CREATED);
            }

            if ($cekdaily['description'] !=null) {
                $response = [
                    'message' => 'udah uplaod',
                    'sukses' => 2,
                    'data' => null
                ];
    
                return response()->json($response, Response::HTTP_CREATED);
            }

            
          
        }else {
            if ($request->jenis_daily == "progress") {
                $response = [
                    'message' => 'tidak ada foto awal',
                    'sukses' => 3,
                    'data' => null
                ];
    
                return response()->json($response, Response::HTTP_CREATED);
            }

            if ($request->jenis_daily == "done") {
                $response = [
                    'message' => 'tidak ada foto awal',
                    'sukses' => 3,
                    'data' => null
                ];
    
                return response()->json($response, Response::HTTP_CREATED);
            }
        }



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
                $post_onprogress['id_photo'] = $cekdaily['id'];
                DailyOnProgress::create($post_onprogress);
            }
        }

        if ($request->jenis_daily == "done") {
            $post = DailyActivity::where('id_user', $request->id_user)->whereRaw('DATE(datetime) = ?', [date('Y-m-d', time())])->update([
                'description' => $request->description
            ]);

            foreach ($data_post_daily_pic_afaters as $photo_after) {
                $post_after['photo'] = $photo_after['photo'];
                $post_after['id_photo'] = $cekdaily['id'];
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
    
    function edit(Request $request) {
        $edit = DailyActivity::where('id',$request->id)->update([
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
}
