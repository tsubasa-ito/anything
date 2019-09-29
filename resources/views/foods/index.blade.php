@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">タイムライン</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                @foreach ($foods as $food)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->updated_at }}のご飯</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_one->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_two->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_three->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_four->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_five->category_name }}</h5>
                        <h5 class="card-title">投稿者：{{ $food->user->name }}</h5>
                        <p class="card-text">{{ $food->comment }}</p>
                        @if (Auth::id() == $food->user_id)
                            <a href="{{ route('food.edit', $food->id )}}" class="btn btn-primary">編集</a>
                            <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm">削除</button>
                            </form>
                        @endif
                    </div>
                  </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    