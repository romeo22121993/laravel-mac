@extends('admin.admin_master')

@section('title')
    Product Categories Page
@endsection

@section('admin_content')

    <div class="container-full" style="margin: 20px 10px;">

    <section class="content">
        <div class="row">

            <div class="col-8">
                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Category List <span class="badge badge-pill badge-danger"> {{ count($category) }} </span></h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category Icon </th>
                                        <th>Category Name </th>
                                        <th>Category Slug </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $category as $item )
                                        <tr>
                                            <td> <span><i class="fa {{ $item->icon }}"></i></span>  </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>
                                            <a href="{{ route('wpadmin.products.cats.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{ route('wpadmin.products.cats.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                            <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <!--   ------------ Add Category Page -------- -->
            <div class="col-4">
                <div class="box">
                     <div class="box-header with-border">
                        <h3 class="box-title">Add Category </h3>
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

                            <form method="post" action="{{ route('wpadmin.products.cats.store') }}" >
                                @csrf
                                <div class="form-group">
                                    <h5>Category Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"  name="name" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Category Icon  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="icon" class="form-control" >
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
