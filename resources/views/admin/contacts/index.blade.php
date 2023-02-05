@extends('admin.admin_master')

@section('title')
    Contacts Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contacts Page  ( {{ $contacts->count() }} )</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Contact Company') }}</th>
                                        <th>{{ __('Contact First Name') }}</th>
                                        <th>{{ __('Contact Email') }}</th>
                                        <th>{{ __('Submit Sender') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $contacts as $contact )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $contact->company }}</td>
                                            <td> {{ $contact->name }}</td>
                                            <td> {{ $contact->email }} </td>
                                            <td> {{ \App\Models\User::find($contact->user_id)->name ?? '' }} </td>
                                            <td>{{ $contact->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('wpadmin.contacts.show',  $contact->id) }}" class="btn btn-info">Show</a>
                                                <a href="{{ route('wpadmin.contacts.delete', $contact->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $contacts->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
