@extends('layouts.admin')
@section('title')
    Footer Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.footer.update', $footer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4> Footer Update</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label> Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $footer->title }}">
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" value="{{ $footer->location }}">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{ $footer->contact }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $footer->email }}">
                            </div>
                            <div class="form-group">
                                <label>faks</label>
                                <input type="text" class="form-control" name="faks" value="{{ $footer->faks }}">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $footer->link }}">
                            </div>

                            <div class="form-group">
                                <label>Map</label>
                                <input type="text" class="form-control" name="map" value="{{ $footer->map }}">
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
