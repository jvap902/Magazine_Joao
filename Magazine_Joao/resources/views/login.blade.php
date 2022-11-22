<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="login d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="form">
            <form name="login" action="/usuarios/login" method="POST">
                <h2>Entrar</h2>
                @csrf
                @include('components.input', [
                    'type' => 'email',
                    'class' => 'input-form',
                    'placeholder' => 'Email',
                    'value' => '',
                    'name' => 'email',
                    'disabled' => ''
                    ])
                @include('components.input', [
                    'type' => 'password',
                    'class' => 'input-form',
                    'placeholder' => 'Senha',
                    'value' => '',
                    'name' => 'password',
                    'disabled' => ''
                    ])
                @include('components.input', [
                    'type' => 'submit',
                    'class' => 'btn-submit float-end',
                    'placeholder' => '',
                    'value' => 'Entrar',
                    'name' => 'submit',
                    'disabled' => ''
                ])
            </form>
        </div>
    </div>
</div>
