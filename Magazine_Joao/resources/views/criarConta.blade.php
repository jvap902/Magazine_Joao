<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="login d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="form">
            <form name="criarConta" action="/usuarios/VER" method="POST">
                <h2>Criar Conta</h2>
                @include('components.input', [
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Nome Completo',
                    'value' => ''
                    ])
                @include('components.input', [
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'CPF',
                    'value' => ''
                    ])
                @include('components.input', [
                    'type' => 'email',
                    'class' => 'input-form',
                    'placeholder' => 'Email',
                    'value' => ''
                    ])
                @include('components.input', [
                    'type' => 'password',
                    'class' => 'input-form',
                    'placeholder' => 'Senha',
                    'value' => ''
                    ])
                @include('components.input', [
                    'type' => 'submit',
                    'class' => 'btn-submit float-end',
                    'placeholder' => '',
                    'value' => 'Criar Conta'
                ])
            </form>
        </div>
    </div>
</div>
