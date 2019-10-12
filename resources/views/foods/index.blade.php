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
                            <div class="d-flex">
                                <h5 class="card-title mr-3">{{ $food->updated_at }}のご飯</h5>
                                <div class="c_right">
                                    <h5 class="card-title mb-3"><i class="fas fa-user-circle fa-lg fa-fw mr-1" style="color:#6FB4DE;"></i>{{ $food->user->name }}</h5>
                                </div>
                            </div>
                            <h5 class="card-title">
                                <i class="fas fa-tag fa-fw mr-3"></i>
                                @foreach ($food->tags as $tag)
                                    <a href="{{route('food.index', ['tag_name'=>$tag->tag_name]) }}" class="mr-2">
                                        #{{ $tag->tag_name }}
                                    </a>
                                @endforeach
                            </h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                        <td>{{ $food->category_one->category_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                        <td>{{ $food->category_two->category_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                        <td>{{ $food->category_three->category_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                        <td>{{ $food->category_four->category_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i></th>
                                        <td>{{ $food->category_five->category_name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="comment">
                                <div class="comment_bal mb-3">
                                    {{ $food->comment }}
                                </div>
                            </div>
                            @if (Auth::id() == $food->user_id)
                                <div>
                                    <a href="{{ route('food.compare', $food->id)}}" class="btn btn-success btn-sm"><i class="fas fa-arrows-alt-h fa-fw"></i>これで比較する</a>
                                    <a href="{{ route('food.show', $food->id )}}" class="btn btn-dark btn-sm">詳細</a>
                                    <a href="{{ route('food.edit', $food->id )}}" class="btn btn-primary btn-sm"><i class="far fa-edit fa-fw"></i>編集</a>
                                    <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt fa-fw"></i>削除</button>
                                    </form>
                                </div>
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
    <img class="img" src="{{ asset('/image/top.jpg') }}" alt="トップ画像">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3">
    <div class="container"  style="text-align: center;">
        <span class="text-muted">© 2019 TSUBASA ITO.</span>
    </div>
</footer>    

@endif
@endsection
<style>
    .img {
        width: 100%;
    }
    .fa-carrot {
        color: orange;
    }
    .table > tbody > tr > th,
    .table > tfoot > tr > th,
    .table > thead > tr > th {
        vertical-align: middle;
        text-align: center;
    }
    .table > tbody > tr > td{
        font-family: "Raleway", sans-serif;
        font-size: 14px;
        line-height: 1.8;
        color: #636b6f;
        vertical-align: middle;
        text-align: center;
    }
    .c_right{
        margin: 0 0 0 auto;
    }
    .comment{
        text-align: center;
    }
    .comment_bal {
        position: relative;
        display: inline-block;
        padding: 0 5px;
        text-align: center;
        color: #fff;
        background: #9ACBB7;
        border-radius: 5%;
        box-sizing: border-box;
    }
    .comment_bal:before {
        content: "";
        position: absolute;
        top: -25px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #9ACBB7;
        z-index: 0;
    }
    footer {
        background-color:#224B8B;
    }
</style>