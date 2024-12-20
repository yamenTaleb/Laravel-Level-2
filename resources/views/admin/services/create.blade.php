@extends('admin.master')

@section('title', __('keywords.add_service'))

@section('content')

    <div class="container-fluid">
        <div class=" my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.add_service') }}</h2>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input type="text" class="form-control p-3 rounded text-white bg-transparent" name="title" id="title" placeholder="{{ __('keywords.title') }}" required>
                                @error('title')
                                <div class="text-sm mt-1 text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <input type="text" class="form-control p-3 rounded text-white bg-transparent" name="icon" id="icon" placeholder="{{ __('keywords.icon') }}" required>
                                @error('icon')
                                    <div class="text-sm mt-1 text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <textarea class="form-control" name="description" id="description" placeholder="{{ __('keywords.description') }}" required></textarea>
                            @error('description')
                            <div class="text-sm mt-1 text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="mt-2 btn btn-primary">{{ __('keywords.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
