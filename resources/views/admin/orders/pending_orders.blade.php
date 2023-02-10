@extends('admin.admin_master')

@section('title')
    Pending Orders
@endsection

@section('admin_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pending Orders List</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date </th>
                                            <th>Invoice </th>
                                            <th>Amount </th>
                                            <th>Price </th>
                                            <th>Payment </th>
                                            <th>Status </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $item)
                                            <tr>
                                                <td> {{ $item->order_date }}  </td>
                                                <td> {{ $item->invoice_no }}  </td>
                                                <td> {{ $item->amount }}  </td>
                                                <td> ${{ $item->total_price }}  </td>
                                                <td> {{ $item->payment_method }}  </td>
                                                <td> <span class="badge badge-pill badge-primary">{{ $item->status }} </span>  </td>

                                                <td width="25%">
                                                    <a href="{{ route('wpadmin.orders.details', $item->id) }}" class="btn btn-info" title="Edit Data">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
