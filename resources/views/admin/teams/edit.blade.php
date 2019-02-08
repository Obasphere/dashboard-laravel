@extends('layouts.admin')

@section('sidebar')

    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.teams.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Team-A</span>
      </a>
    </li>
@endsection

@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Edit Dashboard for Team-A</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
       <form method="post" action="{{ route('admin.teams.update', $team->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                    <h5>All Contacts</h5>
                        <select name="all_contacts" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $contactCount }}">{{ $contactCount }}</option>
                        </select><br>
                        <h5>All Items</h5>
                        <select name="all_items" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $itemCount }}">{{ $itemCount }}</option>
                        </select><br>
                        <h5>All Invoices</h5>
                        <select name="all_invoices" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $invoiceCount }}">{{ $invoiceCount }}</option>
                        </select><br>
                        <h5>All Opportunities</h5>
                        <select name="all_opportunities" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $opportunityCount }}">{{ $opportunityCount }}</option>
                        </select><br>
                        <h5>Unpaid Invoices</h5>
                        <select name="unpaid_invoices" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $unpaid_invoiceCount }}">{{ $unpaid_invoiceCount }}</option>
                        </select><br>
                        <h5>Paid Invoices</h5>
                        <select name="paid_invoices" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $paid_invoiceCount }}">{{ $paid_invoiceCount }}</option>
                        </select><br>
                        <h5>Lost Opportunities</h5>
                        <select name="lost_opportunities" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $lost_opportunityCount }}">{{ $lost_opportunityCount }}</option>
                        </select><br>
                        <h5>Won Opportunities</h5>
                        <select name="won_opportunities" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $won_opportunityCount }}">{{ $won_opportunityCount }}</option>
                        </select><br>
                        <h5>New Opportunities</h5>
                        <select name="new_opportunities" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $new_opportunityCount }}">{{ $new_opportunityCount }}</option>
                        </select><br>
                        <h5>Undeposited Funds</h5>
                        <select name="undeposited_funds" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $undeposited_fundsCount }}">{{ $undeposited_fundsCount }}</option>
                        </select><br>
                        <h5>Deposited Payment</h5>
                        <select name="deposited_funds" class="form-control">
                            <option value="N/A">N/A</option>
                            <option value="{{ $deposited_fundsCount }}">{{ $deposited_fundsCount }}</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="save">
            </div>
       </form>
     </div>
    </section>
@endsection
