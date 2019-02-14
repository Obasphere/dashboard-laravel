@extends('layouts.admin')

@section('sidebar')
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.teams.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Teams</span>
      </a>
    </li>
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

<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Contacts</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $contactCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Items</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $itemCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $invoiceCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">All Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $opportunityCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Unpaid Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $unpaid_invoiceCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Paid Invoices</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $paid_invoiceCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Lost Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $lost_opportunityCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Won Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $won_opportunityCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">New Opportunities</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $new_opportunityCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Undeposited Funds</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $undeposited_fundsCount }}</span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5">Deposited Payment</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">{{ $deposited_fundsCount }}</span>
      </a>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

@endsection
