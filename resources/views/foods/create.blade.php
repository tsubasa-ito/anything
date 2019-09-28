@extends('layouts.app')

@section('content')
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
                  <label>いつ</label>
                  <input type="date" class="form-control" placeholder="日付" name="date">
                  <small class="form-text text-muted">日付を入れてください。</small>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">category</label>
                    <select class="form-control" name="category_id">
                    <option selected="">選択する</option>
                    <option value="1">book</option>
                    <option value="2">cafe</option>
                    <option value="3">travel</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="content" id="comment" rows="3"></textarea>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
</div>

@endsection
