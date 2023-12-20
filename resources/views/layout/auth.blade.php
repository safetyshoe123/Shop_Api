<!DOCTYPE html>
<html lang="en">

<body>
    @include('components.auth_components.header')
    @include('components.auth_components.navbar')
    <div class="container-fluid" style="padding: 0;">
        @yield('content')
    </div>

</body>
</html>
