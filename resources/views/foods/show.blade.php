@extends('layouts.app')
@section('content')
    
<div class="container"  style="background-color:#C0C3C6;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-header">{{ $food->updated_at }}の希望ごはん</div>
            <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                <div class="card mb-3">
                    <div class="card-body">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                        <h5 class="card-title">{{ $food->updated_at }}のご飯</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_one->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_two->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_three->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_four->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $food->category_five->category_name }}</h5>
                        <h5 class="card-title">投稿者：{{ $food->user->name }}</h5>
                        <p class="card-text">{{ $food->comment }}</p>
                        <a href="{{ route('food.compare', $food->id)}}" class="btn btn-success btn-sm">これで比較する</a>
                        <a href="{{ route('food.edit', $food->id )}}" class="btn btn-primary btn-sm">編集</a>
                        <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">削除</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    /* SP */
    @media screen and (max-width: 1024px) {
        .container { padding-top: 70px; }
    }
    /* PC */
    @media screen and (min-width: 1024px) {
        .container { 
            padding-top: 70px;
        }
    }

</style>