@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Edit Kategori</h2>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nama Kategori</label>
            <input type="text" name="name" value="{{ $category->name }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
</div>
@endsection
