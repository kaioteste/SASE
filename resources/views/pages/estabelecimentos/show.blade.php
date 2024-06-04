<x-app-layout>
    <h1>
        {{ $estabelecimento->name }}
    </h1>

    <a href="{{ route('estabelecimentos.edit', ['estabelecimento' => $estabelecimento->id ])}}">
        <button>
            Editar
        </button>
    </a>
    <a href="{{ route('enderecos.create', ['estabelecimento' => $estabelecimento->id ])}}">
        <button>
            Adicionar endereço
        </button>
    </a>

</x-app-layout>
