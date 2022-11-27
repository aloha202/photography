@extends('layouts.empty')


@section('content')


    <div id="success">
        <div class="icon icon-order-success svg">
            <svg width="72px" height="72px">
                <g fill="none" stroke="#C57642" stroke-width="2">
                    <circle cx="36" cy="36" r="35"
                            style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393"
                          style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
            </svg>
        </div>
        <h4>Something went wrong.</h4>
        <small>{{ $message }}.</small>
    </div>



@endsection
