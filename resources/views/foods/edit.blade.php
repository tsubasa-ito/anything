@extends('layouts.app')
@section('content')
    
<div class="container"  style="background-color:#C0C3C6;">
    <div class="card-header">{{ $food->updated_at }}の希望ごはん編集</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
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
                <form action="{{ route('food.update', $food->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>category1</label>
                        <select class="form-control" name="categoryid_one">
                            @include('components.old_food_select_one')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category2</label>
                        <select class="form-control" name="categoryid_two">
                            @include('components.old_food_select_two')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category3</label>
                        <select class="form-control" name="categoryid_three">
                            @include('components.old_food_select_three')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category4</label>
                        <select class="form-control" name="categoryid_four">
                            @include('components.old_food_select_four')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category5</label>
                        <select class="form-control" name="categoryid_five">
                            @include('components.old_food_select_five')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3">{{ old('comment') ?: $food->comment }}</textarea>
                    </div>
                
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                
                    <button type="submit" class="btn btn-primary">決定</button>
                </form>
            </div>
          </div>
    </div>
</div>
@endsection
<style>
</style>