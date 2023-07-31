@extends('layouts.admin')

@section('title')
    Contact show
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Contact Show</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Acceptance</th>
                                        <th>Contact</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Telegram</th>
                                        <th>You Tube</th>
                                        <th>Map</th>
                                    </tr>

                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->title }}</td>
                                        <td>{{ $contact->acceptance }}</td>
                                        <td>{{ $contact->contact }}</td>
                                        <td>{{ $contact->facebook }}</td>
                                        <td>{{ $contact->instagram }}</td>
                                        <td>{{ $contact->telegram }}</td>
                                        <td>{{ $contact->youtube }}</td>
                                        <td>{{ $contact->map }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
