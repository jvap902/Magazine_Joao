<!DOCTYPE html>
<html lang="pt-br">
@include('base.header', ['title' => 'Magazine João'])
<body>

    @include('cabecalho')
    @include('barra')
    @include('modalMenu')
    @include('modalUsuario')
    @include('categorias.create')
    @include('base.footer')

</body>
</html>