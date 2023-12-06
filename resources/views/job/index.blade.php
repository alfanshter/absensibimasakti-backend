@extends('template.main')

@section('container')
<div class="page-header">
  <h3 class="page-title"> Job Safety Analysis </h3>
  <a href="{{ route('suratijin.create') }}" class="btn btn-gradient-primary btn-icon-text btn-md">
    <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>
</div>
<br><br>
<x-notify::notify />
@notifyJs

<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      @if ($message = session()->get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="job">
          <thead>
            <tr>
              <th> Action </th>
              <th> Ref ID </th>
              <th> Job Title </th>
              <th> Team Work </th>
              <th> Work Location </th>
              <th> User Created </th>
            </tr>
          </thead>
          <tbody>
            @if (count($sibs) > 0)
            @foreach ($sibs as $sib)
            <tr data-entry-id="{{ $sib->id }}">
            <td>
                <div class="btn-group">
                  <a class="btn btn-gradient-success btn-outline-secondary btn-sm" href="{{ route('suratijin.excel',$sib->id) }}">
                    <i class="mdi mdi-printer"></i>
                  </a>
                  <a class="btn btn-gradient-info btn-outline-secondary btn-sm" href="/edit/job-safety-analysis/{{ $sib->id }}">
                    <i class="mdi mdi-pencil-box"></i>
                  </a>
                  <form action="/suratijin/delete/{{$sib->id}}" method="get">
                    @csrf
                    <button class="btn btn-gradient-danger btn-outline-secondary btn-sm " onclick="return confirm('Apakah anda menyetujui ?')">
                      <i class="mdi mdi-delete"></i>
                    </button>
                  </form>
                </div>
              </td>
              <td field-key='pekerjaan'>{{ $sib->pekerjaan }}</td>
              <td field-key='lokasi'>{{ $sib->lokasi }}</td>
              <td field-key='area'>{{ $sib->area }}</td>
              <td field-key='plant'>{{ $sib->plant }}</td>
              <td field-key='created_at'>{{ $sib->created_at }}</td>

            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="8">Tidak ada data</td>
            </tr>
            @endif

          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection

  @push('script')
  {{-- <script src="{{ asset('/js/myjs.js') }}"></script> --}}
  <script>
    $(document).ready(function() {
      $('#job').DataTable();
    });
  </script>
  @endpush