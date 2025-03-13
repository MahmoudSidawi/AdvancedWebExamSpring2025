@extends('layouts.app')

@section('title', 'Add Course')

@section('content')
<h2 class="text-2xl font-bold text-black">Course List</h2>

<form action="{{ route('courses.store') }}" method="POST" class="mt-5">
    @csrf
    <div class="mb-5">
        <label for="name" class="block text-sm font-medium text-blue-600">Course Name:</label>
        <input type="text" name="name" class="mt-1 block w-full p-2 border border-black rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('name') }}">
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
    </div>

    <div class="mb-5">
        <label for="description" class="block text-sm font-medium text-blue-600">Description</label>
        <textarea name="description" class="mt-1 block w-full p-2 border border-black rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
        @error('description') <small class="text-red-600">{{ $message }}</small> @enderror
    </div>
    
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700">Save Course</button>
</form>


<h2 class="text-2xl font-bold text-black mt-10">Available Courses</h2>
<ul class="mt-5">
    @foreach($courses as $course)
    <li class="border border-black p-2 rounded-md mb-2">
        <strong class="text-blue-600">{{ $course->name }}</strong>
        <p class="mt-1">{{ $course->description }}</p>
        <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
    </li>
    @endforeach
</ul>
@endsection
