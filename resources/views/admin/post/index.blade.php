@extends('layouts.admin')

@section('title')
    Mews Table
@endsection

@section('css')
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
                      <h4>New Table</h4>
                      <div class="card-header-form">
                        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create</a>
                    </div>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">

                                </div>

                            </div>
                            <div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                          <thead>
                            <tr role="row"><th class="text-center sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="
                                #
                              : activate to sort column ascending" style="width: 24.4375px;">
                                Id
                              </th>
                              <th class="sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column descending" style="width: 147.281px;" aria-sort="ascending">Title</th>
                              <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 78.5469px;">Text</th>
                              <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 209.547px;">Image</th>

                              <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.609px;">Time</th>
                              <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 73.625px;">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($posts as $post)



                          <tr role="row" class="odd">
                              <td class="">
                                {{ $loop->iteration }}
                              </td>
                              <td class="sorting_1">{{ $post->title }}</td>
                              <td class="align-middle">
                                {{ $post->text }}
                              </td>
                              <td>
                                <img src="/images/{{ $post->image }}" alt="" width="100"
                                height="50">
                              </td>
                              <td>{{ $post->created_at }}</td>
                              <td>
                                <a href="#!" class="btn btn-warning ">Show</a>
                                <a href="{{ route('admin.post.edit', $post->id) }}"
                                    class="btn btn-info">Update</a>
                                <form action="{{ route('admin.post.destroy', $post->id) }}"
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
                <div class="row">
                    <div class="col-sm-12 col-md-5">

                    </div>
                    {{-- <div class="col-sm-12 col-md-7"> --}}
                        {{ $posts->links() }}

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/page/datatables.js"></script>
@endsection



