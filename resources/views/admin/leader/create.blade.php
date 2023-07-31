@extends('layouts.admin')
@section('title')
  Leader Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.leader.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4>Leader create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title">
                          </div>
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"  name="name">
                          </div>
                        <div class="form-group">
                          <label>Contact</label>
                          <input type="text" class="form-control"  name="contact">
                        </div>
                        <div class="form-group">
                            <label>Acceptance</label>
                            <input type="text" class="form-control"  name="acceptance">
                          </div>
                          <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control"  name="image">
                          </div>
                          <div class="form-group">
                            <label>Biografiyasi</label>
                            <input type="text" class="form-control"  name="biografiya">
                          </div>
                          <div class="form-group">
                            <label>Majburiyatlari</label>
                            <input type="text" class="form-control"  name="majburiyatlar">
                          </div>
                          <div class="form-group">
                            <label>Faoliyati</label>
                            <input type="text" class="form-control"  name="faoliyat">
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
