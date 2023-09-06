@extends('template.main')

@section('container')
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Dashboard
  </h3>
</div>
<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body" style="background: linear-gradient(90deg, #1E39CB 0%, #047EDF 99%);
border: 6px solid #FFFFFF;
border-radius: 5px;">
        <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3"> Group <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5">{{ $grup }}</h2>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body" style="background: linear-gradient(90deg, #203CD3 0%, #0D0754 100%);
border: 6px solid #FFFFFF;
border-radius: 5px;
">
        <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3"> Users <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5">{{ $user }}</h2>
      </div>
    </div>
  </div>
</div>
@endsection