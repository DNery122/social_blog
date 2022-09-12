@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/user_show.css') }}">
    {{-- {{$user}} --}}
    <div class="contenido">
        <div class="user-cont">
            <p>
                <img src="{{ asset('img/perfil/perfil.jpg') }}" alt="">
            </p>
            <p>
                <label>Nombre:</label>
                <input type="text" value="{{ $user->name }}">
            </p>
            <p>
                <label>Correo:</label>
                <input type="email" value="{{ $user->email }}">
            </p>
        </div>
        <div class="post-cont">
            MIS POSTS
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eum, accusantium ducimus reprehenderit inventore dolorum iusto nihil ipsum repellat ab vitae debitis possimus, corrupti similique deleniti quibusdam ullam veniam ipsam? Repellendus alias quo neque sequi necessitatibus officia placeat. Harum, optio quam eligendi perspiciatis magni consequuntur nesciunt. Tenetur neque facere voluptas, unde saepe molestiae, dolorum ad quos quaerat id a amet accusantium delectus nisi veritatis perspiciatis accusamus itaque eos praesentium blanditiis soluta dolor obcaecati iste! Sequi ab assumenda rerum ipsa dolores accusantium similique non impedit laborum neque ipsum hic deserunt sit velit, nesciunt architecto repudiandae iste nam ad commodi. Quasi, nobis.</p>
        </div>
    </div>
@endsection
