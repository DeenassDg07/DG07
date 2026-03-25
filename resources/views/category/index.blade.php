@extends('layout')
@section('content')
<div class="container">

    @foreach($categories as $category)
        <div class="category">
            <div>
                <h1>{{$category->title}}</h1>
                <form action="{{route('categories.updateForm', $category)}}">
                    <button type="submit">
                        Редактировать
                    </button>
                </form>
            </div>

            @foreach($category->posts()->get() as $post)
                <div>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title}}</a>
                </div>

            @endforeach
        </div>
    @endforeach
</div>
@endsection
