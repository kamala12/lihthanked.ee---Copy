@extends('layouts.app')
@section('title', '| Show Post')

@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <h2 class="subtitle">
                    {{ $post->category }}
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="tile is-ancestor m-t-20">
            <div class="tile is-4 is-vertical is-parent">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-64x64">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Kasutaja:</strong>
                                    <small>{{Auth::user()->name}}</small>
                                    <small>31m</small>
                                <dl>
                                    <dt>Loodud: {{ date('j M, Y H:i', strtotime($post->created_at))}}</dt>
                                    <dt>Uuendatud: {{ date('j M, Y H:i', strtotime($post->updated_at))}}</dt>
                                </dl>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa
                                fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                                <div class="primary-action-button">
                                    {!! Html::linkRoute('posts.edit', 'Muuda', array($post->id), array('class'=>"button is-primary is-fullwidth")) !!}
                                </div>

                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                </div>
                            </nav>
                        </div>
                    </article>
                </div>
                <div class="tile is-child box">
                    <p class="title">Hanke andmed</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                        tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Korraldaja andmed</p>
                    <div class="author">
                        <h4>Kasutaja: {{Auth::user()->name}}</h4>
                        <h4>E-mail: {{Auth::user()->email}}</h4>

                        </p>
                    </div>
                </div>
            </div>
            <div class="tile is-parent">
                <div class="tile is-child box">
                    <p class="title">Hanke kirjeldus</p>
                    <p class="lead">{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection