@extends('layouts.dashboard.dash')
@section('title', $title)
@push('css')

@endpush
@section('content')

<style>
    .control-label:after {
        content: "*";
        color: red;
    }
</style>

<div class="container-fluid">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $title }}
                    </h2>
                </div>
                <div class="body">
                    <div class="col-lg-10 col-lg-offset-2 col-md-12">
                        <label for="required_field" class="control-label"></label><i> required field</i>
                    </div>
                    <form class="form-horizontal" action="{{ route('service.store')}}" method="POST">
                        @csrf
                      
                        <div class="row{{ $errors->has('brand_name') ? ' has-error' : '' }} clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                <label for="brand_name" class="control-label">Service Name </label>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="service_type" id="service_type" class="form-control" value="{{ Request::old('service_type') ?: '' }}" placeholder="ex-Screen Damage">
                                    </div>
                                </div>
                                @if ($errors->has('service_type'))
                                <span class="help-block">{{ $errors->first('service_type') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                                <a href="{{route('service.index')}}"><button type="button" class="btn btn-primary m-t-15 waves-effect">
                                        << Back</button> </a> </div> <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush