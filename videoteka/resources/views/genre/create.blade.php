@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

            <div class="card">
                <div class="card-header">{{ __('Genres').": ". __('Add') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('genre.store')}}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="name_en" class="col-sm-2 col-form-label">{{ __('Name EN') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_en" id="name_en">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name_sr" class="col-sm-2 col-form-label">{{ __('Name SR') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_sr" id="name_sr">
                            </div>
                        </div>

                        <div class="mb-3 row float-end">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                                <a href="{{route('genre.store')}}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection