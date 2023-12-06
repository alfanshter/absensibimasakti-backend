@extends('template.main')

@section('container')
{!! Form::open(['method' => 'POST', 'route' => ['suratijin.store']]) !!}
<div class="page-header">
    <h3 class="page-title"> Add Job Safety Analysis</h3>
    <div>
        <a href="/job-safety-analysis" class="btn btn-gradient-danger btn-icon-text btn-md">Cancel</a>
        {!! Form::submit('SAVE', ['class' => 'btn btn-gradient-primary btn-icon-text btn-md']) !!}
    </div>
</div>
<div class="row">

    <!-- KLASIFIKASI PEKERJAAN -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">1. KLASIFIKASI PEKERJAAN</h6>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('ruangterbatas', '1', false, ['class' => 'form-check-input']) !!} Ruang Terbatas
                            </label>
                            <p class="help-block"></p>
                            @if($errors->has('shortcode'))
                            <p class="help-block">
                                {{ $errors->first('shortcode') }}
                            </p>
                            @endif
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('kerjalistrik', '1', false) !!}Kerja Listrik</label>
                            <p class="help-block"></p>
                            @if($errors->has('shortcode'))
                            <p class="help-block">
                                {{ $errors->first('shortcode') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">

                                {!! Form::checkbox('ketinggian', '1', false) !!}Ketinggian</label>
                            <p class="help-block"></p>
                            @if($errors->has('shortcode'))
                            <p class="help-block">
                                {{ $errors->first('shortcode') }}
                            </p>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">

                                {!! Form::checkbox('perpipaan', '1', false) !!}Perpipaan</label>
                            <p class="help-block"></p>
                            @if($errors->has('shortcode'))
                            <p class="help-block">
                                {{ $errors->first('shortcode') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">

                                {!! Form::checkbox('kerjapanas', '1', false) !!} Kerja Panas</label>
                            <p class="help-block"></p>
                            @if($errors->has('shortcode'))
                            <p class="help-block">
                                {{ $errors->first('shortcode') }}
                            </p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END KLASIFIKASI PEKERJAAN -->

    <!-- 2. INFORMASI PEKERJAAN -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">2. INFORMASI PEKERJAAN</h6><br>

                <div class="row">
                    <div class="col-md-6 form-group">

                        Pekerjaan
                        {!! Form::text('pekerjaan', old('pekerjaan'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('pekerjaan'))
                        <p class="help-block">
                            {{ $errors->first('pekerjaan') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Lokasi
                        {!! Form::text('lokasi', old('lokasi'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('lokasi'))
                        <p class="help-block">
                            {{ $errors->first('lokasi') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Area
                        {!! Form::text('area', old('area'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('area'))
                        <p class="help-block">
                            {{ $errors->first('area') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Plant
                        {!! Form::text('plant', old('plant'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('plant'))
                        <p class="help-block">
                            {{ $errors->first('plant') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Nama Pemohon
                        {!! Form::text('namapemohon', old('namapemohon'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('namapemohon'))
                        <p class="help-block">
                            {{ $errors->first('namapemohon') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Perusahaan Pemohon
                        {!! Form::text('perusahaanpemohon', old('perusahaanpemohon'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('perusahaanpemohon'))
                        <p class="help-block">
                            {{ $errors->first('perusahaanpemohon') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Pengawas
                        {!! Form::text('pengawas', old('pengawas'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('pengawas'))
                        <p class="help-block">
                            {{ $errors->first('pengawas') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Teknisi
                        {!! Form::text('teknisi', old('teknisi'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('teknisi'))
                        <p class="help-block">
                            {{ $errors->first('teknisi') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Helper
                        {!! Form::text('helper', old('helper'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('helper'))
                        <p class="help-block">
                            {{ $errors->first('helper') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        Welder
                        {!! Form::text('welder', old('welder'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                        <p class="help-block"></p>
                        @if($errors->has('welder'))
                        <p class="help-block">
                            {{ $errors->first('welder') }}
                        </p>
                        @endif
                    </div>
                </div>

                <h6 class="card-title">DAFTAR PEKERJA</h6><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teknisi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ref_id" id="ref_id" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Helper</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="job_title" id="job_title" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Welder</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="team_work" id="team_work" required />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END INFORMASI PEKERJAAN -->

    <!-- 3. PERLENGKAPAN KERJA -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">3. PERLENGKAPAN KERJA</h6>
                <a href="javascript:addrow_anggota();" class="btn btn-gradient-primary btn-icon-text btn-sm mb-2">
                    <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Peralatan </th>
                                <th> Jumlah Peralatan </th>
                                <th> Material</th>
                                <th> Jumlah Material</th>
                                <th> Keterangan </th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody id="listperlengkapan">
                            <tr id="rperlengkapan1">
                                <td>
                                    {!! Form::text('peralatan1', old('peralatan1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('peralatan1'))
                                    <p class="help-block">
                                        {{ $errors->first('peralatan1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::text('jumlah1', old('jumlah1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('jumlah1'))
                                    <p class="help-block">
                                        {{ $errors->first('jumlah1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::text('material1', old('material1'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('material1'))
                                    <p class="help-block">
                                        {{ $errors->first('material1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::text('jumlaha1', old('jumlaha1'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('jumlaha1'))
                                    <p class="help-block">
                                        {{ $errors->first('jumlaha1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::text('keterangan1', old('keterangan1'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('keterangan1'))
                                    <p class="help-block">
                                        {{ $errors->first('keterangan1') }}
                                    </p>
                                    @endif
                                </td>
                                <td> <button type="button" class="btn btn-danger" onclick="javascript:delrow_anggota('rperlengkapan1');">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PERLENGKAPAN KERJA -->

    <!-- 4.  LINGKUNGAN KERJA YANG HARUS DI CEK -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">4. LINGKUNGAN KERJA YANG HARUS DI CEK</h6>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('mat1', '1', false) !!} Terdapat material yg mudah terbakar</label>
                            <p class="help-block"></p>
                            @if($errors->has('mat1'))
                            <p class="help-block">
                                {{ $errors->first('mat1') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('mat2', '1', false) !!}Terdapat Jalur Kabel/Listrik</label>
                            <p class="help-block"></p>
                            @if($errors->has('mat2'))
                            <p class="help-block">
                                {{ $errors->first('mat2') }}
                            </p>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('mat3', '1', false) !!} Terdapat material yg mudah menyala</label>
                            <p class="help-block"></p>
                            @if($errors->has('mat3'))
                            <p class="help-block">
                                {{ $errors->first('mat3') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                {!! Form::checkbox('mat4', '1', false) !!} Terdapat Jalur Pipa Gas</label>
                            <p class="help-block"></p>
                            @if($errors->has('mat4'))
                            <p class="help-block">
                                {{ $errors->first('mat4') }}
                            </p>
                            @endif
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- 5. PERLENGKAPAN KERJA -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">5 . KESELAMATAN KERJA</h6>
                <a href="javascript:addrow_keselamatan();" class="btn btn-gradient-primary btn-icon-text btn-sm mb-2">
                    <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Aktivitas </th>
                                <th> Potensi Bahaya</th>
                                <th> Langkah Aman Pekerjaan</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody id="listkeselamatan">
                            <tr id="rkeselamatan1">
                                <td>
                                    {!! Form::text('no1', '1', ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('no1'))
                                    <p class="help-block">
                                        {{ $errors->first('no1') }}
                                    </p>
                                    @endif
                                </td>
                                <td>

                                    {!! Form::text('aktivitas1', old('aktivitas1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('aktivitas1'))
                                    <p class="help-block">
                                        {{ $errors->first('aktivitas1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>

                                    {!! Form::text('potensi1', old('potensi1'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('potensi1'))
                                    <p class="help-block">
                                        {{ $errors->first('potensi1') }}
                                    </p>
                                    @endif
                                </td>

                                <td>
                                    {!! Form::text('langkah1', old('langkah1'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('langkah1'))
                                    <p class="help-block">
                                        {{ $errors->first('langkah1') }}
                                    </p>
                                    @endif
                                </td>


                                <td> <button type="button" class="btn btn-danger" onclick="javascript:delrow_keselamatan('rkeselamatan1');">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PERLENGKAPAN KERJA -->

    <!-- 6. APD YANG DIPERLUKAN -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">6. APD YANG DIPERLUKAN</h6>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">

                            {!! Form::checkbox('apd1', '1', false) !!} Safety Helmet</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd1'))
                            <p class="help-block">
                                {{ $errors->first('apd1') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">

                            {!! Form::checkbox('apd2', '1', false) !!}Safety Mask</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd2'))
                            <p class="help-block">
                                {{ $errors->first('apd2') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">
                            {!! Form::checkbox('apd3', '1', false) !!}Body Harness</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd3'))
                            <p class="help-block">
                                {{ $errors->first('apd3') }}
                            </p>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            {!! Form::checkbox('apd4', '1', false) !!} Safet Glasses</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd4'))
                            <p class="help-block">
                                {{ $errors->first('apd4') }}
                            </p>
                            @endif
                        </div>

                        <div class="form-check">
                            {!! Form::checkbox('apd5', '1', false) !!} Safety Shoes</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd5'))
                            <p class="help-block">
                                {{ $errors->first('apd5') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">
                            {!! Form::checkbox('apd6', '1', false) !!} Ear Protection</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd6'))
                            <p class="help-block">
                                {{ $errors->first('apd6') }}
                            </p>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-check">

                            {!! Form::checkbox('apd7', '1', false) !!} Hand Protection</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd7'))
                            <p class="help-block">
                                {{ $errors->first('apd7') }}
                            </p>
                            @endif
                        </div>

                        <div class="form-check">
                            {!! Form::checkbox('apd8', '1', false) !!} Apron</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd8'))
                            <p class="help-block">
                                {{ $errors->first('apd8') }}
                            </p>
                            @endif
                        </div>
                        <div class="form-check">

                            {!! Form::checkbox('apd9', '1', false) !!} Others</label>
                            <p class="help-block"></p>
                            @if($errors->has('apd9'))
                            <p class="help-block">
                                {{ $errors->first('apd9') }}
                            </p>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END  APD YANG DIPERLUKAN -->

    <!-- 7. CHECK PERSONAL YANG TERLIBAT -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">7. CHECK PERSONAL YANG TERLIBAT</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">

                            <label for="coding" style="width:60%;">Apakah personel yg bekerja merasa tdk sehat</label>{!! Form::select('check1', ['Y' => 'Yes', 'N' => 'No']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('check1'))
                            <p class="help-block">
                                {{ $errors->first('check1') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">

                            <label for="coding" style="width:60%;">Kecukupan APD</label>{!! Form::select('check2', ['Y' => 'Yes', 'N' => 'No']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('check2'))
                            <p class="help-block">
                                {{ $errors->first('check2') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="coding" style="width:60%;">Pekerja memahami prosedur keadaan darurat</label>{!! Form::select('check3', ['Y' => 'Yes', 'N' => 'No']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('check3'))
                            <p class="help-block">
                                {{ $errors->first('check3') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="coding" style="width:60%;">Pekerja mengerti cara penggunaan APAR</label>{!! Form::select('check4', ['Y' => 'Yes', 'N' => 'No']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('check4'))
                            <p class="help-block">
                                {{ $errors->first('check4') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END  7. CHECK PERSONAL YANG TERLIBAT -->

    <!-- 8. KOMITMEN -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">8. KOMITMEN</h6><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Saya telah memahami dan akan mematuhi scope & area kerja serta aspek safety seperti tersebut di atas</label><br>
                            <label> <strong>Penerima Ijin</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('penerima_komitmen', old('penerima_komitmen'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('penerima_komitmen'))
                                <p class="help-block">
                                    {{ $errors->first('penerima_komitmen') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Tanggal</strong></label>
                            <div class="col-sm-9">
                                {!! Form::date('tgl_komitmen', old('tgl_komitmen'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('tgl_komitmen'))
                                <p class="help-block">
                                    {{ $errors->first('tgl_komitmen') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END KOMITMEN -->

    <!-- 9. Pekerjaan dihentikan -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">9. Pekerjaan dihentikan (sebutkan alasan)</h6><br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> <strong>Alasan</strong></label>
                            <div class="col-sm-9">
                                {!! Form::textarea('alasan_dihentikan', old('alasan_dihentikan'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('alasan_dihentikan'))
                                <p class="help-block">
                                    {{ $errors->first('alasan_dihentikan') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Tanggal</strong></label>
                            <div class="col-sm-9">
                                {!! Form::date('tgl_dihentikan', old('tgl_dihentikan'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('tgl_dihentikan'))
                                <p class="help-block">
                                    {{ $errors->first('tgl_dihentikan') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Pekerjaan dihentikan -->


    <!-- 10. Serah Terima -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">10. Serah Terima</h6><br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> <strong>Penerima Ijin</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('penerima_st', old('penerima_st'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('penerima_st'))
                                <p class="help-block">
                                    {{ $errors->first('penerima_st') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Tanggal</strong></label>
                            <div class="col-sm-9">
                                {!! Form::date('tgl_penerima_st', old('tgl_penerima_st'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('tgl_penerima_st'))
                                <p class="help-block">
                                    {{ $errors->first('tgl_penerima_st') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label> <strong>Penerima Ijin</strong></label>
                            <div class="col-sm-9">
                                {!! Form::text('pemberi_st', old('pemberi_st'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('pemberi_st'))
                                <p class="help-block">
                                    {{ $errors->first('pemberi_st') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Tanggal</strong></label>
                            <div class="col-sm-9">
                                {!! Form::date('tgl_pemberi_st', old('tgl_pemberi_st'), ['class' => 'form-control', 'placeholder' => '' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('tgl_pemberi_st'))
                                <p class="help-block">
                                    {{ $errors->first('tgl_pemberi_st') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Pekerjaan dihentikan -->

</div>
<!-- END  LINGKUNGAN KERJA YANG HARUS DI CEK -->



{!! Form::close() !!}


<div class="modal fade" id="modalAar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Group User</h5>
            </div>
            <div class="modal-body">
                <form class="add_aar" id="add_aar" name="add_aar" action="javascript:void(0)" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="exampleInputName1">Peralatan</label>
                        <input type="date" class="form-control" id="peralatan" name="peralatan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Jumlah Peralatan</label>
                        <textarea class="form-control" id="jumlah_peralatan" name="jumlah_peralatan" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Material</label>
                        <textarea class="form-control" id="material" name="material" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Jumlah Material</label>
                        <textarea class="form-control" id="jumlah_material" name="jumlah_material" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close">Close</button>
                <button type="submit" id="save-aar" name="" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_keselamatan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Keselamatan Kerja</h5>
            </div>
            <div class="modal-body">
                <form class="add_aar" id="add_aar" name="add_aar" action="javascript:void(0)" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="exampleInputName1">Aktivitas</label>
                        <input type="date" class="form-control" id="aktivitas" name="aktivitas" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Potensi Bahaya</label>
                        <textarea class="form-control" id="jumlah_peralatan" name="jumlah_peralatan" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Material</label>
                        <textarea class="form-control" id="material" name="material" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Jumlah Material</label>
                        <textarea class="form-control" id="jumlah_material" name="jumlah_material" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close">Close</button>
                <button type="submit" id="save-aar" name="" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>




@endsection

@push('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            var table = $('#aar').DataTable({
                // processing: true,
                serverSide: true,
                ajax: "{{ route('create-job') }}",
                columns: [{
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'sequence_of_job_step',
                        name: 'sequence_of_job_step'
                    },
                    {
                        data: 'potential_hazard',
                        name: 'potential_hazard'
                    },
                    {
                        data: 'reduce_potential',
                        name: 'reduce_potential'
                    },
                    {
                        data: 'pic',
                        name: 'pic'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                ]
            });
        });
    });

    var irow_agg = 1;

    function addrow_anggota() {
        irow_agg = irow_agg + 1;
        if (irow_agg < 10) {

            $('#listperlengkapan').append('<tr id="rperlengkapan'+irow_agg+'"><td><input type="text" class="form-control" name="peralatan' + irow_agg + '"></td><td><input type="text" class="form-control" name="jumlah' + irow_agg + '"></td><td><input type="text" class="form-control" name="material' + irow_agg + '"></td><td><input type="text" class="form-control" name="jumlaha' + irow_agg + '"></td></td><td><input type="text" class="form-control" name="keterangan' + irow_agg + '"></td><td> <button type="button" class="btn btn-danger" onclick="javascript:delrow_anggota(\'rperlengkapan' + irow_agg + '\');">Delete</button></td></td></tr>');
        }
    }

    function delrow_anggota(var1) {
        $("#" + var1).remove();
        irow_agg = irow_agg - 1;
    }

    var irow_kes = 1;

    function addrow_keselamatan() {
        irow_kes = irow_kes + 1;
        if (irow_kes < 10) {
            $('#listkeselamatan').append('<tr id="rkeselamatan'+irow_kes+'"><td><input type="text" class="form-control" name="no' + irow_kes + '"></td><td><input type="text" class="form-control" name="aktivitas' + irow_kes + '"></td><td><input type="text" class="form-control" name="potensi' + irow_kes + '"></td><td><input type="text" class="form-control" name="langkah' + irow_kes + '"></td><td> <button type="button" class="btn btn-danger" onclick="javascript:delrow_keselamatan(\'rkeselamatan' + irow_kes + '\');">Delete</button></td></td></tr>');
        }

    }
	
    function delrow_keselamatan(var1){
			$("#"+var1).remove();
            irow_kes = irow_kes - 1;
		}
		


    function add() {
        $('#add_aar').trigger("reset");
        $('#exampleModalLabel').html("Tambah Perlengkapan Kerja");
        $('#modalAar').modal('show');
        $('#id').val('');
    }

    function add_keselamatan() {
        $('#add_keselamatan').trigger("reset");
        $('#exampleModalLabel').html("Tambah Perlengkapan Kerja");
        $('#modal_keselamatan').modal('show');
        $('#id').val('');
    }

    $("#close").click(function() {
        $("#modalAar").modal('hide');
    });


    function editFunc(id) {
        $.ajax({
            type: "POST",
            url: "{{ url('edit-aar') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                $('#exampleModalLabel').html("Edit AAR");
                $('#modalAar').modal('show');
                $('#id').val(res.id);
                $('#date').val(res.date);
                $('#sequence_of_job_step').val(res.sequence_of_job_step);
                $('#potential_hazard').val(res.potential_hazard);
                $('#reduce_potential').val(res.reduce_potential);
                $('#pic').val(res.pic);
            }
        });
    }

    function deleteFunc(id) {
        if (confirm("Delete AAR?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('delete-aar') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#aar').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }

    $('#add_aar').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ url('add-aar')}}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modalAar").modal('hide');
                var oTable = $('#aar').dataTable();
                oTable.fnDraw(false);
                $("#save-aar").html('Submit');
                $("#save-aar").attr("disabled", false);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
</script>
@endpush