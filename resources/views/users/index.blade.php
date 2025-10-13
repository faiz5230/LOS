@extends('layouts.master')

{{-- Dinamis title dan breadcrumb berdasarkan data yang diteruskan ke view --}}
@section('title')
    @lang('translation.' . $resource)
@endsection

@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            @lang('translation.' . $resource)
        @endslot
        @slot('title')
            @lang('translation.' . $resource)
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">@lang('translation.' . $resource)</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row g-4 pb-3">
                        <div class="col-sm-auto">
                            <div>
                                @if (request()->routeIs($route . '.index'))
                                    
                                        <a class="btn btn-success" href="{{ route($route . '.create') }}"> <i
                                                data-feather="file-plus"></i> Create
                                            @lang('translation.' . $resource)</a>
                                    
                                    {{-- <a class="btn btn-primary" href="{{ route($route . '.formDownload') }}"> <i
                                            data-feather="download"></i> Download
                                        @lang('translation.' . $resource)</a> --}}
                                @endif
                            </div>
                        </div>

                       

                    </div>

                    <div class="row g-1 pb-3 d-flex align-items-center">
                        <div class="col-sm-auto form-label"> Show:</div>
                        <div class="col-sm-auto">

                            <form action="{{ url()->current() }}" method="get">

                                
                                
                               
                                    <select class="form-control" name="rows" onchange="this.form.submit()">
                                        <option value="10" {{ $rows == 10 ? 'selected' : '' }}>10</option>
                                        <option value="20" {{ $rows == 20 ? 'selected' : '' }}>20</option>
                                        <option value="50" {{ $rows == 50 ? 'selected' : '' }}>50</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    <input type="hidden" name="search_id" value="{{ request('search_id') }}">
                                    <input type="hidden" name="search_vendor" value="{{ request('search_vendor') }}">
                                    <input type="hidden" name="search_category" value="{{ request('search_category') }}">
                                    <input type="hidden" name="search_sub_category"
                                        value="{{ request('search_sub_category') }}">
                                    <input type="hidden" name="search_scope_of_work"
                                        value="{{ request('search_scope_of_work') }}">
                                    <input type="hidden" name="search_memo" value="{{ request('search_memo') }}">
                                    <input type="hidden" name="search_status" value="{{ request('search_status') }}">
                               
                               

                            </form>

                        </div>
                        <div class="col-sm-auto form-label">entries</div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">


                                <form action="{{ url()->current() }}" method="get" class="form-inline">
                                    <div class="search-box ms-2">

                                        <input type="text" class="form-control" name="search"
                                            value="{{ request('search') }}" placeholder="Search...">

                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                    <input type="hidden" name="rows" value="{{ request('rows') }}">
                                </form>
                            </div>
                        </div>

                    </div>



                  
                    <div class="live-preview">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif


                        {{-- Dinamis tabel berdasarkan data yang diteruskan ke view --}}
                        <table class="table table-bordered table-hover align-middle table-wrap mb-0">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                    <tr>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>

                                           
                                            <a href="{{ route($route . '.show', $item->id) }}" class="btn btn-info"
                                                data-toggle="tooltip" data-placement="top"
                                                title="View #{{ $item->name }}"><i class="ri-eye-line"></i></a>
                                           
                                                <a href="{{ route($route . '.edit', $item->id) }}"
                                                    class="btn btn-warning" data-toggle="tooltip" data-placement="top"
                                                    title="Edit #{{ $item->name }}"><i class="ri-pencil-line"></i></a>

                                                <!-- Tombol Delete -->
                                                <form action="{{ route($route . '.destroy', $item->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Delete #{{ $item->name }}"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </form>
                                          
                                       
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{-- Paginate links for the collection --}}
                        <div class="row g-4 pb-3">
                            <div class="col-sm-auto">
                            Showing {{ $collection->firstItem() }} to {{ $collection->lastItem() }} of
                            {{ $collection->total() }} entries
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                {!! $collection->links() !!}
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
   
@endsection
