@extends('layouts.admin')

@section('title')
    Slider show
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Slider Show</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                    </tr>

                                        <tr>
                                            <td>{{  $slider->id}}</td>
                                            <td>
                                                <img src="/images/{{  $slider->image}}" alt="" width="100" height="50">
                                            </td>
                                            <td>{{  $slider->title}}</td>
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
