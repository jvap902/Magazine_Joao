<div class="d-flex align-items-center justify-content-center telaLogin">
    <div class="login d-flex align-items-center justify-content-center borda-laranja borda-form">
        <div class="form">
            <form name="criarConta" action="/usuarios/store" method="POST">
                <h2>Criar Conta</h2>
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
                @include('components.input', [
                    'id' => 'nome',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'Nome Completo',
                    'value' => '',
                    'name' => 'nome',
                    'disabled' => ''
                ])
                @include('components.input', [
                    'id' => 'cpf',
                    'type' => 'text',
                    'class' => 'input-form',
                    'placeholder' => 'CPF',
                    'value' => '',
                    'name' => 'CPF',
                    'disabled' => ''
                ])
                @include('components.input', [
                    'id' => 'email',
                    'type' => 'email',
                    'class' => 'input-form',
                    'placeholder' => 'Email',
                    'value' => '',
                    'name' => 'email',
                    'disabled' => ''
                ])
                @include('components.input', [
                    'id' => 'password',
                    'type' => 'password',
                    'class' => 'input-form',
                    'placeholder' => 'Senha',
                    'value' => '',
                    'name' => 'password',
                    'disabled' => ''

                ])
                @include('components.input', [
                    'id' => 'submit',
                    'type' => 'submit',
                    'class' => 'btn-submit float-end',
                    'placeholder' => '',
                    'value' => 'Criar Conta',
                    'name' => 'submit',
                    'disabled' => ''
                ])
            </form>
        </div>
    </div>
</div>
