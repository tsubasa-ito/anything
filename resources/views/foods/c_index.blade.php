@extends('layouts.app')
@section('content')
<div class="container" style="background-color:#C0C3C6;">
    <div class="row">
        <div class="col-md-6">
            <div class="my_card">
                <div class="card-header">あなたのご飯希望</div>
                <div class="card border-info">
                    <div class="card-body">
                        <h5 class="card-title">投稿者：{{ $my_food->user->name }}</h5>
                        <h5 class="card-title">{{ $my_food->updated_at }}のご飯</h5>
                        <h5 class="card-title">カテゴリー：{{ $my_food->category_one->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $my_food->category_two->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $my_food->category_three->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $my_food->category_four->category_name }}</h5>
                        <h5 class="card-title">カテゴリー：{{ $my_food->category_five->category_name }}</h5>
                        <p class="card-text">{{ $my_food->comment }}</p>
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
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">投稿者：{{ $food->user->name }}</h5>
                                    <h5 class="card-title">{{ $food->updated_at }}のご飯</h5>
                                    <h5 class="card-title">カテゴリー：{{ $food->category_one->category_name }}</h5>
                                    <h5 class="card-title">カテゴリー：{{ $food->category_two->category_name }}</h5>
                                    <h5 class="card-title">カテゴリー：{{ $food->category_three->category_name }}</h5>
                                    <h5 class="card-title">カテゴリー：{{ $food->category_four->category_name }}</h5>
                                    <h5 class="card-title">カテゴリー：{{ $food->category_five->category_name }}</h5>
                                    <p class="card-text">{{ $food->comment }}</p>
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
        /* SP版 */
        @media screen and (max-width: 1024px) {
            .container { padding-top: 70px; }
        }
        /* PC版 */
        @media screen and (min-width: 1024px) {
            .container { 
                padding-top: 70px;
            }

            .my_card.s_fixed{
                position: fixed;
                min-width: 512px;
            }
        }
    </style>    
@endsection        