<!DOCTYPE html>
<html lang="pt-br">
@include('base.header', ['title' => 'Magazine João'])
<body>

    @include('base.cabecalho')

    <div class="mx-auto" style="width: 100%;" id="body">
        @yield('container')
    </div>

    @include('base.footer')

</body>
</html>
