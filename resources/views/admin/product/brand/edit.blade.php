@extends('admin.admin_master')

@section('admin_content')

<div class="container-full">

    <section class="content">
        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Brand </h3>
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

                            <form method="post" action="{{ route('wpadmin.products.brands.update', $brand->id) }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $brand->id }}">
                                <input type="hidden" name="old_image" value="{{ $brand->image }}">

                                <div class="form-group">
                                    <h5>Brand Name  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"  name="name" class="form-control" value="{{ $brand->name }}" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Brand Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="image" class="form-control" >
                                        <p><img src="{{ asset($brand->image) }}" style="width: 70px; height: 40px;"> </p>
                                    </div>
                                </div>

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
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
