<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    {!! MaxRender::renderStyles(config('maxcms.core.asset')) !!}
</head>

<body style="background:#F7F7F7;">
<div class="">

    <div id="wrapper">
        <section class="login_content">

            @yield('content')

            <div class="clearfix"></div>
            <br/>

            <div>
                <h1><i class="fa fa-magic" style="font-size: 26px;"></i> Maxsoft.vn</h1>

                <p>©2015 All Rights Reserved. Maxsoft.vn</p>
            </div>
        </section>
    </div>
</div>
{!! MaxRender::renderScripts(config('maxcms.core.asset')) !!}
</body>
</html>