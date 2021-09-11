@extends('frontend.template.main')
@section('content')
<!-- Create By Joker Banny -->
<h1 class="py-28 text-6xl font-extrabold pl-32 bg-gray-100">Les articles</h1>
<div class="min-h-screen bg-gray-100 flex items-center flex-wrap justify-evenly">
    @foreach ($articles as $article )
      <a href="/article/{{ $article->id}}">
        <div class=" w-80 my-7 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">
          <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=859&q=80" alt="">
          <div class="p-5">
            <h1 class="text-xl font-bold">{{ $article->title }}</h1>
            <p class="mt-2 text-lg font-semibold text-gray-600">by {{ $article->users->name }}</p>
            <p class="mt-1 text-gray-500 font-">{{ $article->description }}</p>
          </div>
        </div>
      </a>
    @endforeach
    </div>

@endsection