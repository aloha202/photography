@extends('layouts.empty')


@section('content')


    <div id="success">
        <div class="icon icon-order-success svg">
            <img src="/html/img/wrong.svg" width="50" height="50" />
        </div>
        <h4>Something went wrong.</h4>
        <small>{{ $message }}.</small>
    </div>



@endsection
