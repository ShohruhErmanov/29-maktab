@extends('layouts.admin')
@section('title')
  Contact Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4>Contact create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title">
                          </div>
                          <div class="form-group">
                            <label>Acceptance</label>
                            <input type="text" class="form-control"  name="acceptance">
                          </div>
                        <div class="form-group">
                          <label>Contact</label>
                          <input type="text" class="form-control"  name="contact">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control"  name="facebook">
                          </div>
                          <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control"  name="instagram">
                          </div>
                          <div class="form-group">
                            <label>Telegram</label>
                            <input type="text" class="form-control"  name="telegram">
                          </div>
                          <div class="form-group">
                            <label>You Tube</label>
                            <input type="text" class="form-control"  name="youtube">
                          </div>
                          <div class="form-group">
                            <label>map</label>
                            <input type="text" class="form-control"  name="map">
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
