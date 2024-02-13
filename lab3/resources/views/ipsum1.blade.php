@extends('welcome')
@section('content')
    <div>
        <h2>Form</h2>
    </div>
    <div>
        <form action="{{ route('ipsum2') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="name"/>
            <input type="email" name="email" placeholder="email"/>
            <input type="number" name="age" placeholder="age"/>
            <input type="tel" name="phone" placeholder="phone"/>
            <input type="submit"/>
        </form>
        @if($errors-> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop
