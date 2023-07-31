@extends('layouts.admin')
@section('title')
  Gallery Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.gallery.update', $gallery ->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Gallery update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Image</label>
                          <input type="file" class="form-control" name="image">
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
