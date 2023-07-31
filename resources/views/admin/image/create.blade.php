@extends('layouts.admin')
@section('title')
  Image Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> Image create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" class="form-control"  name="image">
                        </div>
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
