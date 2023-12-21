<!DOCTYPE html>
<html lang="en">

<body>
    @include('components.header')
    @include('components.navbar')
    <div class="container-fluid" style="padding: 0;">
        @yield('content')
    </div>
   


</body>
@include('components.footer')
</html>
