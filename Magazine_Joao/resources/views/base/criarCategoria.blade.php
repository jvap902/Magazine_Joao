<!DOCTYPE html>
<html lang="pt-br">
@include('base.header', ['title' => 'Magazine João'])
<body onscroll="onScroll()">

    @include('cabecalho')
    @include('barra')
    @include('modalMenu')
    @include('modalUsuario')
    @include('criarCategoria')
    @include('base.footer')

</body>
</html>