<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show
<body class="hold-transition skin-blue fixed">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('layouts.partials.mainheader')

    @include('layouts.partials.sidebar')
        <div class="content-wrapper">
        @include('layouts.partials.contentheader')
            <section class="content">
                @yield('main-content')
            </section>
        </div>

        @include('layouts.partials.controlsidebar')

        @include('layouts.partials.footer')

    </div>
</div>
@section('scripts')
    @include('layouts.partials.scripts')
@show
</body>
</html>
