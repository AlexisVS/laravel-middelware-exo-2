<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Articles') }}
      </h2>
      <a class="h-max w-max py-1 px-3 font-semibold text-white bg-blue-700 rounded" href="/dashboard/article/create">Nouvel article</a>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">


          <div class=" mx-auto">
            <div class="bg-white shadow-md rounded my-6">
              <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                  <tr>
                    <th
                      class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                      #</th>
                    <th
                      class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                      Title</th>
                    <th
                      class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                      Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                    <tr class="hover:bg-grey-lighter">
                      <td class="py-4 px-6 border-b border-grey-light">{{ $article->id }}</td>
                      <td class="py-4 px-6 border-b border-grey-light">{{ $article->title }}</td>
                      <td class="py-4 px-6 border-b border-grey-light">
                        <a href="/dashboard/article/{{ $article->id }}"
                          class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue-500 text-white hover:bg-blue-dark">Show</a>
                        <a href="/dashboard/article/{{ $article->id }}/edit"
                          class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green-500 text-white hover:bg-green-dark">Edit</a>
                          <form class="" action="/dashboard/article/{{ $article->id }}" method="post">
                          @csrf
                          @method('DELETE')
                          <input class="text-grey-lighter w-max font-bold py-1 px-3 rounded text-xs bg-red-600 text-white" type="submit" value="X">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
