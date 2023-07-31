@extends('layouts.admin')
@section('title')
    Leader Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.leader.update', $leader->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4> Leader update</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $leader->title }}">
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $leader->name }}">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{ $leader->contact }}">
                            </div>

                            <div class="form-group">
                                <label>Acceptance</label>
                                <input type="text" class="form-control" name="acceptance" value="{{ $leader->acceptance }}">
                            </div>


                            <div class="form-group">
                                <label> Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label> Biografiyasi</label>
                                <input type="text" class="form-control" name="biografiya" value="{{ $leader->biografiya }}">
                            </div>
                            <div class="form-group">
                                <label> Majburiyatlari</label>
                                <input type="text" class="form-control" name="majburiyatlar" value="{{ $leader->majburiyatlar }}">
                            </div>
                            <div class="form-group">
                                <label> Faoliyati</label>
                                <input type="text" class="form-control" name="faoliyat" value="{{ $leader->faoliyat }}">
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
