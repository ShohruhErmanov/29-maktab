@extends('layouts.admin')

@section('title')
    Leader show
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Leader Show</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Faks</th>
                                        <th>Link</th>
                                        <th>map</th>
                                    </tr>

                                        <tr>
                                            <td>{{  $footer->id}}</td>
                                            <td>{{  $footer->title}}</td>
                                            <td>{{  $footer->location}}</td>
                                            <td>{{  $footer->contact}}</td>
                                            <td>{{  $footer->email}}</td>
                                            <td>{{  $footer->faks}}</td>
                                             <td>{{  $footer->link}}</td>
                                             <td>
                                                <iframe src="{{  $footer->map}}" frameborder="0" width="100" height="100"></iframe>
                                             </td>
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
