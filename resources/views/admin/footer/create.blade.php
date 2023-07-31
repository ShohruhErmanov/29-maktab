@extends('layouts.admin')
@section('title')
    Footer Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.footer.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4> Footer create</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label> Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>faks</label>
                                <input type="text" class="form-control" name="faks">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control" name="link">
                            </div>

                            <div class="form-group">
                                <label>Map</label>
                                <input type="text" class="form-control" name="map">
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
