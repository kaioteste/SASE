<x-app-layout>
    <h1 class="text-white">
        Criar Produto
    </h1>
    <h2 class="text-white">
        @if (session()->has('message'))
        <h1>{{session()->get('message')}}</h1>
        @endif
    </h2>

    <form action="{{route('servicos.store')}}" method="POST">
        @csrf
        
        <div class="mb-6 grid grid-cols-4 gap-4">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="nome" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="preço" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                <input type="number" id="preço" name="preco" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="tempo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempo</label>
                <input type="number" id="tempo" name="tempo" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <input class="hover:bg-[#CDD7E2] text-white bg-[#96ACC2] m-5 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2" class="text-white " type="submit" value="Criar">
        </div>
        
    </form>


</x-app-layout>