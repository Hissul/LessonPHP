@extends('base')

@section('title' , 'Feedback')

@section('content')
    <div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('feedback.post')}}">

            @csrf          

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="phoneHelp" placeholder="Enter phone">
                <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>    
              
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection