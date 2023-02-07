@extends('admin.admin_master')

@section('title')
    SubCategories Page
@endsection

@section('admin_content')

<div class="container-full" style="margin: 20px 10px;">
    <section class="content">
        <div class="row">

            <div class="col-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">SubCategory List <span class="badge badge-pill badge-danger"> {{ count($subcategory) }} </span> </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category </th>
                                        <th>SubCategory Name</th>
                                        <th>SubCategory Slug </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subcategory as $item)
                                        @if ( !empty( $item ))
                                            <tr>
                                                <td> {{ \App\Models\ProductCategory::find($item->cat_id )->name }}
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->slug }}</td>
                                                <td width="30%">
                                                    <a href="{{ route('wpadmin.products.subcats.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                                    <a href="{{ route('wpadmin.products.subcats.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endif
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
                        <h3 class="box-title">Add SubCategory </h3>
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

                            <form method="post" action="{{ route('wpadmin.products.subcats.store') }}" >
                                @csrf
                                <div class="form-group">
                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="cat_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>SubCategory Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" >
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
