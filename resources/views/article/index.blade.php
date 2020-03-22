@extends('article.master')
@section('title','Articles')
@section('content')
    <div>
        <table width="100%">
            <tr>
                <th>Title</th>
                <th>Authors</th>
                <th>Actions</th>
            </tr>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>
                        @foreach($article->users as $author)
                            {{$author->nickname}}<br>
                        @endforeach
                    </td>
                    <td>
                        <form action="{{route('article.destroy', $article->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No articles</td>
                </tr>
            @endforelse
        </table>
        <a href="{{route('article.create')}}">Создать</a>
    </div>
@endsection
