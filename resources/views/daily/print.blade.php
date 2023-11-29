<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        table {
            width: 100%;
            margin-top: 20px;
        }

        .tg {
            border-collapse: collapse;
            border-color: #ccc;
        }

        .tg td {
            background-color: #fff;
            border-color: #ccc;
            border-style: solid;
            border-width: 1px;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            word-break: normal;
        }

        .tg th {
            background-color: #f0f0f0;
            border-color: #ccc;
            border-style: solid;
            border-width: 1px;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            word-break: normal;
        }


        .tg .tg-pht7 {
            border-color: inherit;
            font-family: "Times New Roman", Times, serif !important;
            font-size: 12px;
            text-align: center;
            vertical-align: middle;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: center;
            vertical-align: middle
        }

        .tg .th-header {
            border-color: black;

        }

        .tg .tg-q9j0 {
            border-color: black;
            font-size: 14px;
            text-align: center;
            vertical-align: middle;
            padding-bottom: 10px;
            padding-top: 10px;

        }

        .tg .tg-9wq8 {
            text-align: center;
            border-color: #ffffff;
            vertical-align: middle;
            padding-bottom: 20px;
        }
    </style>

    <table class="tg">
        <thead>
            <tr>
                <th class="th-header" colspan="8">
                    <img src="{{public_path('storage/foto/header.png')}}" alt="Image" style="width: 100%;">

                </th>
            </tr>
        </thead>

        <tbody>
            <tr class="tr-header">
                <td class="tg-q9j0" colspan="8"><span style="font-weight:bold">LAPORAN AKTIVITAS HARIAN</span><br>
                    <hr style="width: 140px;"><span style="font-weight:bold">DAILY ACTIVITY</span>
                </td>
            </tr>
            <tr style="background-color: #FFFFFF;">
                <td colspan="8" style="background-color: #FFFFFF;padding-top: 20px;border-color:#fff"></td>
            </tr>
            <tr style="background-color: #FFFFFF;">
                @if($starts_at!=null && $ends_at!=null )
                <td colspan="8" style="border-left-color: #FFFFFF;border-right-color:#FFFFFF;border-bottom-color: #FFFFFF"> Date : {{$starts_at}} to {{$ends_at}}</td>
                @endif
            </tr>
            <tr>
                <th class="tg-0pky">No</th>
                <th class="tg-pht7">Date</th>
                <th class="tg-pht7">Time</th>
                <th class="tg-pht7">TL</th>
                <th class="tg-pht7">Title</th>
                <th class="tg-pht7">Pic Before</th>
                <th class="tg-pht7">Pic After</th>
                <th class="tg-pht7">Description</th>
            </tr>
            @foreach($data as $datas)
            <tr>
                <td class="tg-0pky">{{$loop->iteration}}</td>
                <td class="tg-pht7">{{ \Carbon\Carbon::parse($datas->datetime)->format('Y-m-d') }}</td>
                <td class="tg-pht7">{{ \Carbon\Carbon::parse($datas->datetime)->format('H:i:s') }}</td>
                <td class="tg-pht7">{{$datas->user->name}}</td>
                <td class="tg-pht7">{{$datas->title}}</td>
                <td class="tg-pht7">
                    @foreach($datas->pic_before as $picbefores)
                    <img style="width: 100px; height:100px;margin-top:5px" src="{{public_path('storage/'.$picbefores->photo)}}" alt="" srcset="">
                    @endforeach
                </td>
                <td class="tg-pht7">
                    @foreach($datas->pic_picbefore as $picafter)
                    <img style="width: 100px; height:100px;margin-top:5px" src="{{public_path('storage/'.$picafter->photo)}}" alt="" srcset="">
                    @endforeach
                </td>
                <td class="tg-pht7">{{$datas->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>