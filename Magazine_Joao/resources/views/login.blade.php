<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="login d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="form">
            @if(session("erro")) <p>{{session("erro")}}</p>@endif
            <form name="login" action="/usuarios/login" method="POST">
                <h2>Entrar</h2>
                @csrf
                @include('components.input', [
                    'id' => 'email',
                    'type' => 'email',
                    'class' => 'input-form',
                    'placeholder' => 'Email',
                    'value' => '',
                    'name' => 'email',
                    'disabled' => '',
                    'step' => ''
                    ])
                @include('components.input', [
                    'id' => 'password',
                    'type' => 'password',
                    'class' => 'input-form',
                    'placeholder' => 'Senha',
                    'value' => '',
                    'name' => 'password',
                    'disabled' => '',
                    'step' => ''
                    ])
                @include('components.input', [
                    'id' => 'submit',
                    'type' => 'submit',
                    'class' => 'btn-submit float-end',
                    'placeholder' => '',
                    'value' => 'Entrar',
                    'name' => 'submit',
                    'disabled' => '',
                    'step' => ''
                ])
            </form>
        </div>
    </div>
</div>
