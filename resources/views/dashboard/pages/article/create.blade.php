<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Nouvel article') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <div class="flex py-16 justify-center">
            <div class="bg-gray-800 flex flex-col w-80 xl:w-8/12 border border-gray-900 rounded-lg px-8 py-10">
              <form class="flex flex-col space-y-8 mt-10" action="/dashboard/article" method="POST">
                @csrf
                <label class="text-gray-200" for="">Title</label>
                <input type="text" name="title"
                  class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 text-gray-500">
                <label class="text-gray-200" for="">Description</label>
                <textarea name="description"
                  class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 text-gray-500" id="" cols="30"
                  rows="10"></textarea>
                <button
                  class="border border-blue-500 bg-blue-500 text-white rounded-lg py-3 font-semibold">Créer</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
