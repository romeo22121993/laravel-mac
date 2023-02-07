@extends('admin.admin_master')

@section('admin_content')

<div class="container-full">


    <section class="content">
        <div class="row">
            <!--   ------------ Add SubCategory Page -------- -->

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit SubCategory </h3>
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

                            <form method="post" action="{{ route('wpadmin.products.subcats.update') }}" >
                                @csrf

                                <input type="hidden" name="id" value="{{ $subcategory->id }}">

                                <div class="form-group">
                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="cat_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $subcategory->cat_id ? 'selected': ''}} >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>SubCategory  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" >
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
