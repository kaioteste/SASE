<x-app-layout>
    
    
    <div class="flex items-center" style="height: 100vh;">


        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-[#272727] dark:border-gray-700 m-auto">
            <div class="text-center text-gray-100 text-lg mb-3">
                Adcione seus Funcionarios
            </div>
            <form action="{{route('funcionarios.store')}}" method="POST">
                @csrf

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input type="text" id="name" name="nome" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#272727] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="funcao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Função</label>
                    <input type="text"  name="funcao" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#272727] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                


                <input class="w-full text-gray-800  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-200 dark:focus:ring-blue-800 mt-5" type="submit" value="Criar">

            </form>
        </div>

    </div>
    
</x-app-layout>