@extends('layouts.admin')

@section('title')
    Contact Table
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    @if (session('seccess'))
                        <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('seccess') }}
                            </div>
                        </div>
                    @endif

                    <div class="card-header">
                        <h4>Contact Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Acceptance</th>
                                        <th>Contact</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach ( $contacts as  $contact)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $contact->title }}</td>
                                            <td>{{ $contact->acceptance }}</td>
                                            <td>{{ $contact->contact }}</td>
                                            <td>{{ $contact->created_at }}</td>
                                            <td class="d-flex ">
                                                <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-warning ">Show</a>
                                                <a href="{{ route('admin.contact.edit', $contact->id) }}"
                                                    class="btn btn-info">Update</a>
                                                <form action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger "
                                                        onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{-- {{ $categories->links() }} --}}
                           
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
