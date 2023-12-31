@extends('template.main')

@section('container')
<div class="page-header">
  <h3 class="page-title"> Daily </h3>
</div>
<br><br>
<x-notify::notify />
@notifyJs

<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      
    
    <form action="{{url('print_daily')}}" id="form2" method="post">
        @csrf
        <input type="hidden" name="starts_at" value="{{$starts_at}}">
        <input type="hidden" name="ends_at" value="{{$ends_at}}">
        <input type="hidden" name="id_user" value="{{$id_user}}">
      </form>


    <form class="" method="GET" action="{{url('daily/filter')}}">
        <div class="row">
          <div class="form-group row">
            <div class="col-sm-3">
              <div class="form-group">
                <select class="form-control form-control-lg" aria-label="Default select example" name="user_id" id="user_id">
                  <option value="">Pilih Grup</option>
                  @foreach ($user as $datas)
                  <option value="{{ $datas->id }}">{{ $datas->name }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-lg" required id="starts_at" name="starts_at" placeholder="Start At" onfocus="(this.type='date')">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-lg" required id="ends_at" placeholder="End At" name="ends_at" onfocus="(this.type='date')">
            </div>
            <div class="col-sm-2 col-form-label">
              <button type="submit" class="btn btn-sm btn-gradient-primary ">Search</button>
            </div>
            <div class="col-sm-2  col-form-label">
              <div class="dropdown">
                <button class="btn btn-sm btn-gradient-primary  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  Export
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                  <li><button type="submit" class="dropdown-item active" form="form2">Pdf</button></li>
                  <li><button type="submit" class="dropdown-item" form="form3">Excel</button></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="user">
          <thead>
            <tr>
              <th> No </th>
              <th> TL </th>
              <th> Date </th>
              <th> Time </th>
              <th> Title </th>
              <th> Pic Before </th>
              <th> Pic After </th>
              <th> Description </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $datas)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$datas->user->name}}</td>
              <td>
                <p>{{ \Carbon\Carbon::parse($datas->datetime)->format('Y-m-d') }}</p>
              </td>
              <td>{{ \Carbon\Carbon::parse($datas->datetime)->format('H:i:s') }}</td>
              <td>{{ $datas->title }}</td>
              <td>
                @foreach($datas->pic_before as $picbefores)
                <img src="{{ asset('storage/' . $picbefores->photo) }}" alt="" srcset="">
                @endforeach
              </td>
              <td>
                @foreach($datas->pic_picbefore as $picafter)
                <img src="{{ asset('storage/' . $picafter->photo) }}" alt="" srcset="">
                @endforeach
              </td>
              <td>{{ $datas->description }}</td>
              <td>
                <button class="btn btn-gradient-info btn-rounded btn-sm" data-toggle="modal" data-target="#edit{{$datas->id}}">
                  <i class="mdi mdi-pencil-box"></i>
                </button>
                <div class="modal fade" id="edit{{$datas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit daily</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/editdaily" method="post">
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

                <form action="/daily/{{$datas->id}}" method="post">
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