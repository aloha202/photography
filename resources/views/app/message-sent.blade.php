@extends('layouts.redirect')


@section('content')


    @if($result)
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
        <h4>Thank you for contacting us.</h4>
        <small>We will get back to you in no time.</small>
    </div>

    @else

    <div style="color: #e9431c">Errors sending message</div>
    <div id="success">
    <h4>Something went wrong.</h4>
    <a class="animated-link" href="/">Go Back</small>
    </div>

    @endif



@endsection
