@extends('admin.admin_master')

@section('title')
    Brands Page
@endsection

@section('admin_content')

    <div class="container-full" style=" margin: 20px 12px;">

        <section class="content">
            <div class="row">

                <div class="col-8">
                    <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Brand List <span class="badge badge-pill badge-danger"> {{ $brands->total() }} </span></h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Brand Slug</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $brands as $item )
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td><img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"> </td>
                                        <td>
                                            <a href="{{ route('wpadmin.products.brands.edit', $item->id) }}" class="btn btn-info" title="Edit Data">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{ route('wpadmin.products.brands.delete', $item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        </div>
                    </div>

                    </div>

                </div>

                <!--   ------------ Add Brand Page -------- -->
                <div class="col-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Brand </h3>
                        </div>

                        <div class="box-body">
                            <div class="table-responsive">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post" action="{{ route('wpadmin.products.brands.add') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Brand Name  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="name" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Brand Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>

    </div>

@endsection
