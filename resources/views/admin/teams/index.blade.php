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
      <li class="breadcrumb-item"><h1>Team-A</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
        <p>
            <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">Add New Dashboard for Team-A</a>
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>All Contacts</th>
                <th>All Items</th>
                <th>All Invoices</th>
                <th>All Opportunities</th>
                <th>Unpaid Invoices</th>
                <th>Paid Invoices</th>
                <th>Lost Opportunities</th>
                <th>Won Opportunities</th>
                <th>New Opportunities</th>
                <th>Undeposited Funds</th>
                <th>Deposited Payment</th>
                <th>Action</th>
            </tr>

            @foreach($teams as $t)
                <tr>
                    <td>{{ $t->all_contacts }}</td>
                    <td>{{ $t->all_items }}</td>
                    <td>{{ $t->all_invoices }}</td>
                    <td>{{ $t->all_opportunities }}</td>
                    <td>{{ $t->unpaid_invoices }}</td>
                    <td>{{ $t->paid_invoices }}</td>
                    <td>{{ $t->lost_opportunities }}</td>
                    <td>{{ $t->won_opportunities }}</td>
                    <td>{{ $t->new_opportunities }}</td>
                    <td>{{ $t->undeposited_funds }}</td>
                    <td>{{ $t->deposited_funds }}</td>
                    <td>
                        <a href="{{ route('admin.teams.edit', $t->id) }}" class="btn-sm btn-info">Edit</a>|<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn-sm btn-danger">Delete</a>
                        <form action="{{ route('admin.teams.destroy', $t->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
     </div>
    </section>


@endsection
