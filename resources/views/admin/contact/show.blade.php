@extends('admin.admin_master')

@section('title')
    Show Contact Contact
@endsection

@section('admin_content')

<div class="content-wrapper">
    @include('admin.body.banner')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show Contact</h4>

                <div class="forms-sample" >

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Contact Company</label>
                            <p  class="form-control" id="exampleInputName1" >{{ $contact->company }}</p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Contact First Name</label>
                            <p  class="form-control" id="exampleInputName1"  >{{ $contact->name }}</p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Contact Last Name</label>
                            <p  class="form-control" id="exampleInputName1" >{{ $contact->lastname }}</p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">ContactEmail</label>
                            <p class="form-control" id="exampleInputName1" >{{ $contact->email }}</p>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Sender UserName</label>
                            <p class="form-control" id="exampleInputName1" >
                                <a href="@if ( !empty( $contact->user_id ) ) {{ route('wpadmin.users.edit', $contact->user_id) }} @endif">
                                    {{ \App\Models\User::find($contact->user_id)->name ?? '' }}
                                </a>
                            </p>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Contact Message</label>
                        <div class="form-control" name="content" style="padding: 10px; height: 100px;">{{ $contact->message }}</div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
