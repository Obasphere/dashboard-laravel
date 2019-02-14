@extends('layouts.client')

@section('sidebar')
    <li class="nav-item">
      <a class="nav-link" href="#">
        <!-- <i class="fas fa-fw fa-table"></i>
        <span></span> -->
      </a>
    </li>

    @foreach($teama as $team)
    <li class="nav-item">
      <a class="nav-link" href="{{ route('teama') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{ $team->name }}</span>
      </a>
    </li>
    @endforeach
    @foreach($teamb as $team)
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('teamb') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{ $team->name }}</span>
      </a>
    </li>
    @endforeach
    @foreach($teamc as $team)
    <li class="nav-item">
      <a class="nav-link" href="{{ route('teamc') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{ $team->name }}</span>
      </a>
    </li>
    @endforeach

@endsection

@section('content')
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>

@foreach($teams as $team)

<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3 @if($team->all_contacts == 'N/A')
                hidden
                @endif
                ">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Contacts</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->all_contacts }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->all_items == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Items</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->all_items }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->all_invoices == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->all_invoices }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->all_opportunities == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->all_opportunities }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->unpaid_invoices == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Unpaid Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->unpaid_invoices }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->paid_invoices == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Paid Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->paid_invoices }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->lost_opportunities == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Lost Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->lost_opportunities }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->won_opportunities == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Won Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->won_opportunities }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->new_opportunities == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">New Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->new_opportunities }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->undeposited_funds == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Undeposited Funds</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->undeposited_funds }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3 @if($team->deposited_funds == 'N/A')
                hidden
                @endif">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Deposited Payment</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $team->deposited_funds }}</span>
      </a>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
@endforeach

@endsection
