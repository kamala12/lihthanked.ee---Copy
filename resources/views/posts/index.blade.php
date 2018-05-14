@extends('layouts.app')
@section('title', '| Show Post')

@section('content')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Hetkel käimasolevad hanked
                </h1>
                <h2 class="subtitle">
                    Kategooria
                </h2>
            </div>
        </div>
    </section>
<div class="container is-widescreen m-t-20 m-b-20">
    @foreach($posts as $post)
    <div class="box">
        <article class="media">
            <div class="media-left">
                <figure class="image is-128x128">
                    <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                </figure>
            </div>
            <div class="media-content">
                <div class="content">
                    <h3 class="title is-4">{{ $post->title }}</h3>
                    <p>
                        <strong>{{Auth::user()->name}}</strong>
                        <small>Loodud: {{ date('j M, Y H:i', strtotime($post->created_at))}}</small>
                        <br>
                        {{ substr($post->body,0, 100)}}{{ strlen($post->body) > 100? "...":""}}
                    </p>
                    <a href="{{ route('posts.show', $post->id)}}" class="button is-primary is-pulled-right">Vaata</a>
                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a class="level-item">
                            <span class="icon is-small"><i class="fa-reply"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-heart"></i></span>
                        </a>
                    </div>
                </nav>
            </div>
        </article>
    </div>
        @endforeach
</div>
@endsection

@include('_includes.footer')