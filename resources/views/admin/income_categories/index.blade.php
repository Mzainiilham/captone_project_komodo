@extends('admin.index')

@section('content')
<div class="content-body">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor mx-3"> <strong>Income</strong> </h4>
                </div>

                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Income</li>
                        </ol>
                    </div>
                </div>

                    <div class="container">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        {{ __('Income categories') }}
                                    </h6>
                                    <div class="ml-auto">
                                        <a href="{{ url ('/income_categories/create') }}" class="btn btn-primary">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                            <span class="text">{{ __('New') }}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th class="text-center" style="width: 30px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($income_categories as $income_category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="{{ url ('a/income_categories/show', $income_category) }}">{{ $income_category->name }}</a></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ url ('/income_categories/edit', $income_category) }}" class="btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form onclick="return confirm('are you sure !')" action="{{ route('admin.income_categories.destroy', $income_category) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="12">No income categories found.</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="12">
                                                    <div class="float-right">
                                                        {!! $income_categories->appends(request()->all())->links() !!}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
