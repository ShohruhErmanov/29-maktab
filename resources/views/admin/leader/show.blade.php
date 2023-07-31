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
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Acceptance</th>
                                        <th>Image</th>
                                        <th>Biografiyasi</th>
                                        <th>Majburiyatlari</th>
                                        <th>Faoliyati</th>
                                    </tr>

                                        <tr>
                                            <td>{{  $leader->id}}</td>
                                            <td>{{  $leader->title}}</td>
                                            <td>{{  $leader->name}}</td>
                                            <td>{{  $leader->contact}}</td>
                                            <td>{{  $leader->acceptance}}</td>
                                            <td>
                                                <img src="/images/{{  $leader->image}}" alt="" width="100" height="50">
                                            </td>
                                            <td>{{  $leader->biografiya}}</td>
                                             <td>{{  $leader->majburiyatlar}}</td>
                                             <td>{{  $leader->faoliyat}}</td>
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
