<select name="{{ $name }}" class="input-form" id="{{ $id }}">
    <option value="" disabled selected> Selecione a opção desejada </option>
    @foreach ($coisas as $coisa)
        @if ($coisa->id == $selected)
            <option value="{{ $coisa->id }}" selected="selected">{{ $coisa->nome }}</option>
        @else
            <option value="{{ $coisa->id }}">{{ $coisa->nome }}</option>
        @endif
    @endforeach
</select>
