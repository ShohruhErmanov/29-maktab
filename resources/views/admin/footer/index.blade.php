@extends('layouts.admin')

@section('title')
    Footer Table
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
                        <h4>Footer Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.footer.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                         <th>Time</th>
                                        <th>Actions``</th>
                                    </tr>
                                    @foreach ($footers as $footer)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $footer->title }}</td>
                                            <td>{{ $footer->location }}</td>
                                            <td>{{ $footer->contact }}</td>
                                            <td>{{ $footer->email }}</td>
                                            <td>{{ $footer->created_at }}</td>
                                            <td class="d-flex ">
                                                <a href="{{ route('admin.footer.show', $footer->id) }}" class="btn btn-warning ">Show</a>
                                                <a href="{{ route('admin.footer.edit', $footer->id) }}" class="btn btn-info">Update</a>
                                                 <form action="{{ route('admin.footer.destroy', $footer->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger " onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
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
                            {{-- <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
