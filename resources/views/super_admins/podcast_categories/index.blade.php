@extends('super_admins.layouts.master')

@section('title')
    Podcast Categories
@endsection

@section('css')
    @include('super_admins.includes.datatable_css')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row align-items-center mb-4 pt-4 pt-lg-0">

                <div class="col-md-7 mb-3 mb-lg-0">
                    <h2 class="main-content-title fw-bold mb-0">Podcast Categories</h2>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Podcast Categories</li>
                    </ol>
                </div>

                <div class="col-md-5">
                    <div class="d-flex justify-content-start justify-content-md-end">
                        @if (auth()->user()->hasPermission('podcast_category.add'))
                            <a href="{{ route('super_admin.podcast_categories.create') }}" class="btn btn-primary  ml-2">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i><span class="ml-2">Add</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped admin-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($podcast_categories as $podcast_category)
                                        <tr>
                                            <td>{{ $podcast_category->name }}</td>
                                            <td>
                                                @if ($podcast_category->image)
                                                    <img src="{{ url($podcast_category->image) }}" width="75px"
                                                        height="75px" alt="{{ $podcast_category->slug }}">
                                                    &nbsp &nbsp
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ date_format($podcast_category->created_at, 'd-m-Y') }}</td>

                                            <td>{{ $podcast_category->is_active ? 'Active' : 'Inactive' }} </td>
                                            <td>
                                                @if (!$podcast_category->trashed())
                                                    <div class="d-flex">
                                                        @if (auth()->user()->hasPermission('podcast_category.show'))
                                                            <a class="btn btn-primary"
                                                                href="{{ route('super_admin.podcast_categories.show', ['podcast_category' => $podcast_category->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="View Detail"><i class="fa fa-eye"></i></a>
                                                        @endif
                                                        @if (auth()->user()->hasPermission('podcast_category.edit'))
                                                            <a class="ml-2 btn btn-secondary"
                                                                href="{{ route('super_admin.podcast_categories.edit', ['podcast_category' => $podcast_category->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit Detail"><i class="fa fa-edit"></i></a>
                                                            {{-- edit --}}
                                                        @endif
                                                        @if (auth()->user()->hasPermission('podcast_category.delete'))
                                                            <button type="button" class="btn btn-danger ml-2"
                                                                data-toggle="modal"
                                                                data-target="#deleteModal{{ $podcast_category->id }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        @endif
                                                        {{-- delete --}}
                                                    </div>
                                                    <div class="modal fade" id="deleteModal{{ $podcast_category->id }}"
                                                        style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Warning</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>This action is irreversible. Are You Sure , You want
                                                                        to
                                                                        delete this Podcast Category ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.podcast_categories.destroy', ['podcast_category' => $podcast_category->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                @else
                                                    <div class="d-flex">
                                                        {{-- restore --}}
                                                        <button type="button" class="btn btn-primary ml-2"
                                                            data-toggle="modal"
                                                            data-target="#restoreModal{{ $podcast_category->id }}">
                                                            <i class="fa fa-trash-restore"></i>
                                                        </button>
                                                        {{-- delete permanently --}}
                                                        @if (auth()->user()->hasPermission('podcast_category.delete'))
                                                            <button type="button" class="btn btn-danger ml-2"
                                                                data-toggle="modal"
                                                                data-target="#deleteModal{{ $podcast_category->id }}">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        @endif
                                                    </div>
                                                    <div class="modal fade" id="deleteModal{{ $podcast_category->id }}"
                                                        style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Warning</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>This action is irreversible. Are You Sure , You want
                                                                        to
                                                                        delete this Podcast Category permanently ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.podcast_categories.destroy_permanently', ['podcast_category' => $podcast_category->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <div class="modal fade" id="restoreModal{{ $podcast_category->id }}"
                                                        style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Warning</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are You Sure , You want
                                                                        to
                                                                        restore this Podcast Category ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.podcast_categories.restore', ['podcast_category' => $podcast_category->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Restore</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('super_admins.includes.datatable_scripts')
@endsection
