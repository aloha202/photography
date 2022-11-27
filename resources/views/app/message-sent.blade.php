<!DOCTYPE html>
<html lang="zxx" class="is-preload">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon  -->
    <link rel="shortcut icon" href="/html/img/ui/logo.ico" type="image/x-icon">
    <!-- swiper css -->
    <link rel="stylesheet" href="/html/css/plugins/swiper.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="/html/css/plugins/fancybox.min.css">
    <!-- orabel css -->
    <link rel="stylesheet" href="/html/css/style.css">
    <!-- page title -->
    <title>Alex & Alicia - professional photographers</title>
</head>

<body onLoad="setTimeout('delayedRedirect()', 5000)">

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

    <script src="/html/js/redirect.js"></script>


</body>

</html>
