<div class="d-flex align-items-center justify-content-center">
    <div class="login d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="form">
            <h2>Entrar</h2>
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
                'class' => 'background-laranja border-radius-6px border-none',
                'placeholder' => '',
                'value' => 'Enviar'
            ])
        </div>
    </div>
</div>
