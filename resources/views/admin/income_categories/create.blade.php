@extends('admin.index')

@section('content')
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
                                    {{ __('Create income category') }}
                                </h6>
                                <div class="ml-auto">
                                    <a href="{{ url ('/income_categories/index') }}" class="btn btn-primary">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <span class="text">{{ __('Go Back') }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ url ('/income_categories/store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
                                                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-4">
                                        <button class="btn btn-primary" type="submit" name="submit">{{ __('Save') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
