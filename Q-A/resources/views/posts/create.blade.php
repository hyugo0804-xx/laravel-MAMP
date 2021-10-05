@extends('layouts.app')

@section('content')
<div class="card-header">Borad</div>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="card">
                        <div class="card-body"> 
                            @if ($errors->any())
                            <div class="alert alert-danger" >
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                                <form action="{{ route('posts.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">title</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">category</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                            <option selected="">選択する</option>
                                            <option value="1">book</option>
                                            <option value="2">cafe</option>
                                            <option value="3">travel</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" id="comment" rows="5" name="content"></textarea>
                                    </div>

                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                    <button type="submit" class="btn btn-primary">投稿する</button>
                                </form>
                        </div>
                    </div>
                  
@endsection
