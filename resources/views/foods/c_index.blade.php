@extends('layouts.app')
@section('content')
<div class="container" style="background-color:#C0C3C6;">
    <div class="row">
        <div class="col-md-6">
            <div class="my_card mb-3">
                <div class="card border-info">
                <div class="card-header">あなたのご飯希望</div>
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <h5 class="card-title mr-3">{{ $my_food->updated_at }}のご飯</h5>
                            <div class="c_right">
                                <h5 class="card-title mb-3"><i class="fas fa-user-circle fa-lg fa-fw mr-1"></i>{{ $my_food->user->name }}</h5>
                            </div>
                        </div>
                        @foreach ($my_food->tags as $tag)
                            <a href="{{route('food.index', ['tag_name'=>$tag->tag_name]) }}">
                                #{{ $tag->tag_name }}
                            </a>
                        @endforeach

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                    <td>{{ $my_food->category_one->category_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                    <td>{{ $my_food->category_two->category_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                    <td>{{ $my_food->category_three->category_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i><i class="fas fa-carrot fa-fw"></i></th>
                                    <td>{{ $my_food->category_four->category_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="t-left col-xs-6"><i class="fas fa-carrot fa-fw"></i></th>
                                    <td>{{ $my_food->category_five->category_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="comment">
                            <div class="comment_bal mb-3">
                                {{ $my_food->comment }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="copmapre_card">
                <div class="card-header max-line">比較するものを選んでください</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($foods as $food)
                        @if (Auth::id() !== $food->user_id)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <h5 class="card-title mr-3">{{ $food->updated_at }}のご飯</h5>
                                        <div class="c_right">
                                            <h5 class="card-title mb-3"><i class="fas fa-user-circle fa-lg fa-fw mr-1"></i>{{ $food->user->name }}</h5>
                                        </div>                
                                    </div>
                                    <i class="fas fa-tag fa-fw mr-3"></i>
                                    @foreach ($food->tags as $tag)
                                        <a href="{{route('food.index', ['tag_name'=>$tag->tag_name]) }}" class="mr-2">
                                            #{{ $tag->tag_name }}
                                        </a>
                                    @endforeach        
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
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        var _window = $(window),
            _header = $('.my_card'),
            heroBottom;
         
        _window.on('scroll',function(){     
            heroBottom = $('.max-line').height();
            if(_window.scrollTop() > heroBottom){
                _header.addClass('s_fixed');   
            }
            else{
                _header.removeClass('s_fixed');   
            }
        });
         
        _window.trigger('scroll');
    </script>
    <style>
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
    .fa-user-circle{
        color:#6FB4DE;
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
    </style>    
@endsection        