<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maqquettage SoliLms : Insertion Professionnelle</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="sidebar-mini control-sidebar-slide-open" style="height: auto;">
    <div class="wrapper">
        {{-- navbar --}}
        @include('Layouts.navbar')

        {{-- sidebar --}}
        @include('Layouts.sidebar')

        {{-- start content --}}
        <div class="content-wrapper" style="min-height: 1345.6px;">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        {{-- end content --}}

        {{-- footer --}}
        @include('Layouts.footer')
    </div>

</body>

</html>
