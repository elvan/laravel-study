@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div><input name="title" type="text" value="{{ old('title') }}"></div>
        @error('title')
            <div>{{ $message }}</div>
        @enderror
        <div>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
