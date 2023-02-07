@extends('admin.admin_master')

@section('admin_content')

<div class="container-full" style="margin: 20px 10px;">

    <section class="content">
        <div class="row">

            <!--   ------------ Add Category Page -------- -->
            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Category </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{ route('wpadmin.products.cats.update', $category->id) }}" >
                                @csrf

                                <div class="form-group">
                                    <h5>Category Name  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"  name="name" class="form-control" value="{{ $category->name }}" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Category Icon  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="icon" class="form-control"  value="{{ $category->icon }}" >
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
