@php use Illuminate\Support\Facades\Session; @endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('website.core.tags.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('website.core.includes.navbar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>


    @include('website.core.includes.footer')
</div>
<!-- ./wrapper -->

@include('website.core.tags.scripts')

@if(Session::has('error'))
    @include('dashboard.core.alerts.error', ['message' => Session::get('error')])
@elseif(Session::has('success'))
    @include('dashboard.core.alerts.success', ['message' => Session::get('success')])
@endif
@foreach($errors->all() as $message)
    @include('dashboard.core.alerts.error', compact('message'))
@endforeach

</body>
</html>
