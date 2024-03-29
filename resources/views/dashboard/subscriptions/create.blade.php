@extends('dashboard.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.css">
@endsection

@section('content')
    <!--content wrapper -->
    <div class="content-wrapper">
        <!--content header -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h1 class="content-header-title">{{trans('dashboard.subscriptions.Subscriptions')}}</h1>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="{{route('dashboard.home')}}">{{trans('dashboard.main.home')}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard.subscriptions.index')}}">{{trans('dashboard.subscriptions.Subscriptions')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ trans('dashboard.subscriptions.Add Subscription') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.partials._alert')
        @include('dashboard.partials._all_errors')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <!-- form start -->
                            <form class="form-horizontal" method="post" action="{{ route('dashboard.subscriptions.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @foreach(config('app.languages') as $key => $language)
                                    <div class="form-body">
                                        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label class="col-md-2"
                                                   for="name">{{ trans('dashboard.main.Name In '.$language)}}</label>
                                            <div class="col-md-10">
                                                <div><input type="text" id="name" class="form-control"
                                                            placeholder="{{trans("dashboard.category.Name")}}"
                                                            name="{{$key}}[name]" value="{{ old("$key.name") }}"/>
                                                    @include('dashboard.partials._errors', ['input' => 'name'])
                                                    <div class="form-control-position">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach(config('app.languages') as $key => $language)
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">{{ trans('dashboard.main.Description In ' . $language) }}</label>
                                            <div class="col-md-10">
                                                <input id="{{$key}}.description" type="hidden" name="{{$key}}[description]"
                                                       value="">
                                                <trix-editor input="{{$key}}.description"></trix-editor>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="form-body">
                                    <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-md-2"
                                               for="name">{{ trans('dashboard.subscriptions.products')}}</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                @foreach($products as $product)
                                                    <div class="col col-md-3">
                                                        <input class="form-check-input" type="checkbox" name="products[]"
                                                               value="{{ $product->id }}" id="{{ $product->id }}">
                                                        <label class="form-check-label" for="{{  $product->id }}">
                                                            {{ $product->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row {{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label class="col-md-2" for="price">{{trans('dashboard.product.price')}}</label>
                                    <div class="col-md-10">
                                        <div class="position-relative has-icon-left">
                                            <input type="number" id="price" class="form-control"
                                                   name="price"/>
                                            @include('dashboard.partials._errors', ['input' => 'price'])
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label class="col-md-2"
                                           for="name">{{trans('dashboard.subscriptions.Image')}}</label>
                                    <div class="col-md-10">
                                        <div class="position-relative has-icon-left">
                                            <input type="file" id="image" class="form-control image"
                                                   name="image"/>
                                            @include('dashboard.partials._errors', ['input' => 'image'])
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row {{ $errors->has('durations_in_day') ? ' has-error' : '' }}">
                                    <label class="col-md-2"
                                           for="durations_in_day">{{trans('dashboard.subscriptions.duration in days')}}</label>
                                    <div class="col-md-10">
                                        <div class="position-relative has-icon-left">
                                            <input type="number" id="durations_in_day" class="form-control"
                                                   name="duration_in_day"/>
                                            @include('dashboard.partials._errors', ['input' => 'durations_in_day'])
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary">
                                        {{trans('dashboard.subscriptions.Add Subscription')}}
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.js"></script>
    <script src="{{ asset('dashboard_files/app-assets/js/scripts/forms/select/form-selectize.min.js') }}"></script>
@endsection
