@extends('admin.layout.app', ['activePage' => 'dashboard', 'title' => 'Dashboard', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">All places</h4>
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th colspan="3">Name</th>
                                    <th colspan="6">Address</th>
                                    <th colspan="3">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($places as $place)
                                    <tr>
                                        <td colspan="3">{{ $place->name }}</td>
                                        <td colspan="6">{{ $place->address }}</td>
                                        <td colspan="3">
                                            <p>Sửa</p>
                                            <p>Xóa</p>                                     
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $places->links('admin.pages.components.helper.paginate') !!}
@endsection