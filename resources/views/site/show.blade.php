@extends('site.main')
@section('content')

    <div class="row">
        <div class="col-md-12">

                <div class="single-top">
                    <img src="{{asset($articles -> preview)}}" class="img-responsive" alt="">

                    <p> {!! $articles -> content !!} </p>

                </div>
                <div class="clearfix"></div>

        </div>
    </div>

@stop
