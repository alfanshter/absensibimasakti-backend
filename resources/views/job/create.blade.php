@extends('template.main')

@section('container')
<form action="/job-safety-analysis" method="POST">
    @csrf
    <div class="page-header">
        <h3 class="page-title"> Add Job Safety Analysis</h3>
        <div>
            <a href="/job-safety-analysis" class="btn btn-gradient-danger btn-icon-text btn-md">Cancel</a>
            <button type="submit" name="save" id="save" class="btn btn-gradient-primary btn-icon-text btn-md">Save</button>
        </div>
    </div>
    <div class="row">
        <!-- KLASIFIKASI PEKERJAAN -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">KLASIFIKASI PEKERJAAN</h6>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Ruang Terbatas"> Ruang Terbatas </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Kerja Listrik"> Kerja Listrik </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Ketinggian"> Ketinggian </label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Perpipaan"> Perpipaan </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Kerja Panas"> Kerja Panas </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END KLASIFIKASI PEKERJAAN -->

        <!-- INFORMASI PEKERJAAN -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">INFORMASI PEKERJAAN</h6><br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ref_id" id="ref_id" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="job_title" id="job_title" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="team_work" id="team_work" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pengawas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="team_work" id="team_work" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Plant</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="work_location" id="work_location" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Pemohon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="number" id="number" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Perusahaan Pemohon </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="number" id="number" required />
                                </div>
                            </div>
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

        <!-- PERLENGKAPAN KERJA -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">PERLENGKAPAN KERJA</h6>
                    <a href="javascript:void(0)" class="btn btn-gradient-primary btn-icon-text btn-sm mb-2" onClick="add()">
                        <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>

                    <div class="table-responsive">
                        <input type="hidden" name="kode" id="kode" value="{{ $kode }}">
                        <table class="table table-striped table-bordered" id="aar">
                            <thead>
                                <tr>
                                    <th> Action </th>
                                    <th> No </th>
                                    <th> Peralatan </th>
                                    <th> Jumlah Peralatan </th>
                                    <th> Material</th>
                                    <th> Jumlah Material</th>
                                    <th> Keterangan </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PERLENGKAPAN KERJA -->

        <!--  LINGKUNGAN KERJA YANG HARUS DI CEK -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">4. LINGKUNGAN KERJA YANG HARUS DI CEK</h6>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Terdapat material yg mudah terbakar"> Terdapat material yg mudah terbakar </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Terdapat material yg mudah menyala"> Terdapat material yg mudah menyala </label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Terdapat Jalur Pipa Gas"> Terdapat Jalur Pipa Gas </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Terdapat Jalur Kabel/Listrik"> Terdapat Jalur Kabel/Listrik </label>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END  LINGKUNGAN KERJA YANG HARUS DI CEK -->

        <!-- KESELAMATAN KERJA -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">5. KESELAMATAN KERJA</h6>
                    <a href="javascript:void(0)" class="btn btn-gradient-primary btn-icon-text btn-sm mb-2" onClick="add_keselamatan()">
                        <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>

                    <div class="table-responsive">
                        <input type="hidden" name="kode" id="kode" value="{{ $kode }}">
                        <table class="table table-striped table-bordered" id="aar">
                            <thead>
                                <tr>
                                    <th> Action </th>
                                    <th> No </th>
                                    <th> Aktivitas</th>
                                    <th> Potensi Bahaya </th>
                                    <th> Langkah Aman Pekerjaan </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END KESELAMATAN KERJA -->

        <!-- 6. APD YANG DIPERLUKAN -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">6. APD YANG DIPERLUKAN</h6>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Safety Helmet"> Safety Helmet</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Safet Glasses"> Safet Glasses </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Hand Protection"> Hand Protection </label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Safety Mask"> Safety Mask </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Safety Shoes"> Safety Shoes </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Apron"> Apron </label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Body Harness"> Body Harness </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Ear Protection"> Ear Protection </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="cb_ppe[]" id="cb_ppe[]" value="Others"> Others </label>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Apakah personel yg bekerja merasa tdk sehat</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqfp" id="cqfp" value="yes" required> Yes </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqfp" id="cqfp" value="no" required> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Kecukupan APD ?</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqpt" id="cqpt" value="yes" required> Yes </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqpt" id="cqpt" value="no" required> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Pekerja memahami prosedur keadaan darurat</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqwc" id="cqwc" value="yes" required> Yes </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqwc" id="cqwc" value="no" required> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Pekerja mengerti cara penggunaan APAR</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqwc" id="cqwc" value="yes" required> Yes </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="cqwc" id="cqwc" value="no" required> No </label>
                                    </div>
                                </div>
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
                                    <input type="text" class="form-control" name="penerima_ijin" id="penerima_ijin" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label><strong>Tanggal</strong></label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" required />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END KOMITMEN -->

                
        <!-- 9. KOMITMEN -->
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
                                    <input type="text" class="form-control" name="penerima_ijin" id="penerima_ijin" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label><strong>Tanggal</strong></label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" required />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END KOMITMEN -->

        <!-- <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background: #DA8CFF">
                                <tr>
                                    <th>Sequence Of Job Steps</th>
                                    <th>Potential Hazard & Risk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">Mempersiapkan peralatn listrik (Membawa tangga kerja)</td>
                                    <td>
                                        1. (H) Jari tangan mengenai bagian yang tajam dan tangga <br>
                                        (R) Jari tangan Luka dan bisa infeksi
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2. (H) Tangga membentur properti lain <br>
                                        (R) Properti rusak
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3. (H) Tangan mengenai orang lain <br>
                                        (R) Cidera pada orang lain
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Mematikan listrik dari pusat MCB dengan cara naik tangga</td>
                                    <td>
                                        1. (H) Orang tersetrum <br>
                                        (R) Pingsan / Fatality
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2. (H) Orang terjatuh <br>
                                        (R) Nyeri pinggang / Patah tulang / pingsan /Fatality
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3. (H) Tomobol pada pusat MCB bisa dinyalakan orang lain <br>
                                        (R) Pekerja yang memperbaiki listrik bisa tersengat dan pingsan atau
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</form>

<div class="modal fade" id="modalAar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Group User</h5>
            </div>
            <div class="modal-body">
                <form class="add_aar" id="add_aar" name="add_aar" action="javascript:void(0)" method="POST">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="kode" id="kode" value="{{ $kode }}">
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
                    <input type="hidden" name="kode" id="kode" value="{{ $kode }}">
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