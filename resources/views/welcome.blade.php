@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen">
  <div class="text-center">
    <h1 class="text-4xl mb-4">Welcome to My Laravel App</h1>
    <h2 class="text-2xl mb-8">Manage Students and Courses Easily</h2>
    <button class="bg-blue-500 text-white px-4 py-2 rounded mr-4">Manage Students</button>
    <button class="bg-blue-500 text-white px-4 py-2 rounded">Manage Courses</button>
  </div>
</div>

@endsection
