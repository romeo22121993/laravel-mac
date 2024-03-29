@extends('admin.admin_master')

@section('admin_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Division </h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('wpadmin.shipping.division.update', $divisions->id) }}" >
                                    @csrf
                                    <div class="form-group">
                                        <h5>Division Name  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="division_name" class="form-control" value="{{ $divisions->division_name }}" >
                                            @error('division_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
