@extends('welcome')


@section('content')





    <!-- admin-theme-form.blade.php -->

<form action="{{ route('themes.store') }}" method="POST">
    @csrf
    <label for="name">Theme Name:</label>
    <input type="text" id="name" name="name">
    
    <label for="layouts">Select Layout:</label>
    <select name="layouts[]" multiple>
        <option value="layout1">Layout 1</option>
        <option value="layout2">Layout 2</option>
        <!-- Add more layout options as needed -->
    </select>
    
    <button type="submit">Add Theme</button>
</form>


@endsection

