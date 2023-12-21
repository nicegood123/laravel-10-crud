<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Laravel 10 CRUD</title>

    <!-- Site favicon -->
    @include('partials.favicon')
    <!-- Mobile Specific Metas -->
    @include('partials.metas')
    {{-- Fonts --}}
    @include('partials.fonts')
    <!-- CSS -->
    @include('partials.styles')

    @yield('styles')
</head>

<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- Right Sidebar --}}
    @include('partials.right_sidebar')
    {{-- Left Sidebar --}}
    @include('partials.left_sidebar')

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            {{-- Main content --}}
            @yield('content')

            {{-- Footer --}}
            @yield('footer')
        </div>
    </div>

    {{-- Scripts --}}
    @include('partials.scripts')



    @yield('scripts')
</body>

</html>
