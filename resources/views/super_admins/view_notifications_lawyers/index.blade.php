@extends('super_admins.layouts.master')

@section('title')
    Lawyers
@endsection

@section('css')
    @include('super_admins.includes.datatable_css')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Lawyers</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @php
                        $params = explode('?', request()->getRequestUri());
                        $params = $params[1] ?? null;
                    @endphp
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">All Lawyers</h3>
                            <div class="ml-auto">


                                <a href="{{ route('super_admin.lawyers.export') }}?{{ $params ? $params : '' }}"
                                    class="btn btn-primary">
                                    Export</a>
                                <button type="button" class="btn btn-primary btn-admin" data-toggle="modal"
                                    data-target="#importModal">
                                    Import
                                </button>
                                <a href="{{ route('super_admin.lawyers.create') }}" class="btn btn-primary  ml-2">
                                    Add Lawyer</a>
                                <x-super-admin.import-modal importUrl="{{ route('super_admin.lawyers.import') }}">

                                </x-super-admin.import-modal>
                            </div>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped admin-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Featured</th>
                                        <th>Approved</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lawyers as $lawyer)
                                        <tr>
                                            <td>{{ $lawyer->name }}</td>
                                            <td>
                                                @if ($lawyer->image)
                                                    <img src="{{ url($lawyer->image) }}" width="75px" height="75px"
                                                        alt="{{ $lawyer->slug }}">
                                                    &nbsp &nbsp
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ date_format($lawyer->created_at, 'd-m-Y') }}</td>

                                            <td>{{ $lawyer->is_active ? 'Active' : 'Inactive' }} </td>
                                            <td>{{ $lawyer->is_featured ? 'Yes' : 'No' }} </td>
                                            <td>{{ $lawyer->is_approved ? 'Yes' : 'No' }} </td>

                                            <td>
                                                @if (!$lawyer->trashed())
                                                    <div class="d-flex">
                                                        @if(!$lawyer->is_approved)
                                                        <button type="button" class="btn btn-primary ml-2 btn-admin"
                                                        data-toggle="modal"
                                                        data-target="#approveModal{{ $lawyer->id }}">
                                                        <i class="fa fa-check"></i>
                                                        </button>
                                                        @endif
                                                        <a class="btn btn-primary ml-2 btn-admin"
                                                            href="{{ route('super_admin.lawyers.show', ['lawyer' => $lawyer->id]) }}"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a class="ml-2 btn btn-primary btn-admin"
                                                            href="{{ route('super_admin.lawyers.edit', ['lawyer' => $lawyer->id]) }}"><i
                                                                class="fa fa-edit"></i></a>
                                                        {{-- edit --}}

                                                        <button type="button" class="btn btn-danger ml-2 btn-admin"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $lawyer->id }}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        {{-- delete --}}
                                                    </div>
                                                    <div class="modal fade" id="deleteModal{{ $lawyer->id }}"
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
                                                                        delete this Lawyer ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.lawyers.destroy', ['lawyer' => $lawyer->id]) }}"
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
                                                    <div class="modal fade" id="approveModal{{ $lawyer->id }}"
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
                                                                    <p> Are You Sure , You want
                                                                        to
                                                                        approve this Lawyer ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.lawyers.approve', ['lawyer' => $lawyer->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Approve</button>
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
                                                        <button type="button" class="btn btn-primary ml-2 btn-admin"
                                                            data-toggle="modal"
                                                            data-target="#restoreModal{{ $lawyer->id }}">
                                                            <i class="fa fa-trash-restore"></i>
                                                        </button>
                                                        {{-- delete permanently --}}
                                                        <button type="button" class="btn btn-danger ml-2 btn-admin"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $lawyer->id }}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="deleteModal{{ $lawyer->id }}"
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
                                                                        delete this Lawyer permanently ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.lawyers.destroy_permanently', ['lawyer' => $lawyer->id]) }}"
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
                                                    <div class="modal fade" id="restoreModal{{ $lawyer->id }}"
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
                                                                        restore this Lawyer ?</p>
                                                                </div>
                                                                <form
                                                                    action="{{ route('super_admin.lawyers.restore', ['lawyer' => $lawyer->id]) }}"
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
