<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="carrinho d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="dadosCarrinho">
            <form name="criarCategoria" action="VER" method="POST" enctype="multipart/form-data">
                <div name="dadosUsuario">
                    <h2>Criar Produto</h2>
                    @include('components.input', [
                    'id' => 'id',
                    'type' => 'hidden',
                    'class' => 'input-form',
                    'placeholder' => '',
                    'value' => '',
                    'name' => 'id',
                    'disabled' => ''
                    ])
                    @include('components.input', [
                    'id' => 'nome',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Nome do Produto',
                    'value' => '',
                    'name' => 'nome',
                    'disabled' => ''
                    ])
                    @include('components.input', [
                    'id' => 'marca',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Marca do Produto',
                    'value' => '',
                    'name' => 'marca',
                    'disabled' => ''
                    ])
                    @include('components.select', [
                    'id' => 'categoria',
                    'class' => 'input-form',
                    'placeholder' => 'Categoria',
                    'coisas' => $categorias,
                    'name' => 'categoria',
                    'disabled' => '',
                    'selected' => ''
                    ])
                    @include('components.input', [
                    'id' => 'preco',
                    'type' => 'number',
                    'class' => 'input-form',
                    'placeholder' => 'Preço do Produto',
                    'value' => '',
                    'name' => 'preco',
                    'disabled' => ''
                    ])
                    @include('components.textarea', [
                    'id' => 'descricao',
                    'name' => 'descricao',
                    'class' => 'input-form',
                    'placeholder' => 'Descrição do produto',
                    'disabled' => '',
                    'value' => ''
                    ])
                    <label for="imagem" class="input-form label-file">
                        Selecionar imagem do produto
                    </label>
                    @include('components.input', [
                        'id' => 'imagem',
                        'type' => 'file',
                        'class' => 'type-file',
                        'placeholder' => '',
                        'value' => '',
                        'name' => 'imagem',
                        'disabled' => ''
                    ])
                    @include('components.input', [
                    'id' => 'quantidade',
                    'type' => 'number',
                    'class' => 'input-form',
                    'placeholder' => 'Quantidade em Estoque',
                    'value' => '',
                    'name' => 'quantidade',
                    'disabled' => ''
                    ])

                </div>
                <div name="acoes">
                    <button type="button" class="btn-submit">Cancelar</button>
                    <button type="submit" class="btn-submit floatRight">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>