@extends('template.main')

@section('container')
<div class="page-header">
  <h3 class="page-title"> User </h3>
  <button class="btn btn-gradient-primary btn-icon-text btn-md" data-toggle="modal" data-target="#tambahnotifikasi">
    <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>


</div>
<br><br>
<x-notify::notify />
@notifyJs
<div class="modal fade" id="tambahnotifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/notifikasi" method="post">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description :</label>
            <input type="text" name="description" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">time :</label>
            <input type="datetime-local" name="time" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location :</label>
            <input type="text" name="location" class="form-control" id="recipient-name">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="user">
          <thead>
            <tr>
              <th> No </th>
              <th> description </th>
              <th> time </th>
              <th> location </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $datas)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>
                <p>{{ strlen($datas->description) > 50 ? substr($datas->description, 0, 100) . '...' : $datas->description }}</p>
              </td>
              <td>{{ $datas->time }}</td>
              <td>{{ $datas->location }}</td>
              <td>
                <button class="btn btn-gradient-info btn-rounded btn-sm" data-toggle="modal" data-target="#edit{{$datas->id}}">
                  <i class="mdi mdi-pencil-box"></i>
                </button>
                <div class="modal fade" id="edit{{$datas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit notifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/editnotifikasi" method="post">
                          <input type="hidden" name="id" value="{{$datas->id}}">
                          @csrf
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description :</label>
                            <textarea type="text" name="description" class="form-control"  id="recipient-name">{{$datas->description}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">time :</label>
                            <input type="datetime-local" name="time" value="{{$datas->time}}" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location :</label>
                            <input type="text" name="location" value="{{$datas->location}}" class="form-control" id="recipient-name">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <form action="/notifikasi/{{$datas->id}}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-gradient-danger btn-rounded btn-sm" onclick="return confirm('Apakah anda menyetujui ?')">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
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
      $('#user').DataTable();
    });
  </script>
  @endpush