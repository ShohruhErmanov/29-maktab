@extends('layouts.admin')
@section('title')
    Leader Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4> Contact update</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $contact->title }}">
                            </div>

                            <div class="form-group">
                                <label>Acceptance</label>
                                <input type="text" class="form-control" name="acceptance" value="{{ $contact->acceptance }}">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{ $contact->contact }}">
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="facebook" value="{{ $contact->facebook }}">
                            </div>


                            <div class="form-group">
                                <label> Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="{{ $contact->instagram }}">
                            </div>
                            <div class="form-group">
                                <label> Telegram</label>
                                <input type="text" class="form-control" name="telegram" value="{{ $contact->telegram }}">
                            </div>
                            <div class="form-group">
                                <label> You Tube</label>
                                <input type="text" class="form-control" name="youtube" value="{{ $contact->youtube }}">
                            </div>
                            <div class="form-group">
                                <label> Map</label>
                                <input type="text" class="form-control" name="map" value="{{ $contact->map }}">
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
