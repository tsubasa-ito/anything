@extends('layouts.app')
@section('content')
{{-- user page --}}
@if (Auth::check())
<div class="container" style="background-color:#C0C3C6;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="card-header">タイムライン</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($foods as $food)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->updated_at }}のご飯</h5>
                            <h5 class="card-title">
                                @foreach ($food->tags as $tag)
                                    <a href="{{route('food.index', ['tag_name'=>$tag->tag_name]) }}">
                                        #{{ $tag->tag_name }}
                                    </a>
                                @endforeach
                            </h5>
                            <h5 class="card-title">投稿者：{{ $food->user->name }}</h5>
                            <h5 class="card-title">カテゴリー：{{ $food->category_one->category_name }}</h5>
                            <h5 class="card-title">カテゴリー：{{ $food->category_two->category_name }}</h5>
                            <h5 class="card-title">カテゴリー：{{ $food->category_three->category_name }}</h5>
                            <h5 class="card-title">カテゴリー：{{ $food->category_four->category_name }}</h5>
                            <h5 class="card-title">カテゴリー：{{ $food->category_five->category_name }}</h5>
                            <p class="card-text">{{ $food->comment }}</p>
                            @if (Auth::id() == $food->user_id)
                                <a href="{{ route('food.compare', $food->id)}}" class="btn btn-success btn-sm">これで比較する</a>
                                <a href="{{ route('food.show', $food->id )}}" class="btn btn-dark btn-sm">詳細</a>
                                <a href="{{ route('food.edit', $food->id )}}" class="btn btn-primary btn-sm">編集</a>
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
@else
{{-- guest page --}}
<div class="container">
        <img class="png" src="{{ asset('/image/top.jpg') }}" alt="トップ画像">
</div>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<p>damy</p>
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">ここには固定フッタのコンテンツを配置。</span>
    </div>
</footer>    

@endif
@endsection
<style>
    .png {
        width: 100%;
        /* text-align: center;
        background-size: cover;
        background-repeat: no-repeat; */
    }
</style>