@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Channel settings</div>
                    {{Form::open(['url' => ['/channel/update', $channel->slug],'files' => true, 'method' => 'put'])}}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Channel name') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ? old('name') : $channel->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-md-4 col-form-label text-md-left">{{ __('Unique URL') }}</label>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-text">{{config('app.url')}}/channel</div>
                                    <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') ? old('slug') : $channel->slug }}" required autofocus>
                                </div>
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('Description') }}</label>
                                <div class="col-md-12">
                                    <textarea id="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>{{ old('description') ? old('description') : $channel->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>
                                <button class="btn btn-secondary btn-lg btn-block" type="submit">Update</button>
                    {{ Form::close() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
