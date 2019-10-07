@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#C0C3C6;">
    <div class="card-header">Food</div>
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
                <form action="{{ route('food.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category1</label>
                        <select class="form-control" name="categoryid_one">
                            @include('components.food_select')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category2</label>
                        <select class="form-control" name="categoryid_two">
                            @include('components.food_select')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category3</label>
                        <select class="form-control" name="categoryid_three">
                            @include('components.food_select')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category4</label>
                        <select class="form-control" name="categoryid_four">
                            @include('components.food_select')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">category5</label>
                        <select class="form-control" name="categoryid_five">
                            @include('components.food_select')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                    </div>
                
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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