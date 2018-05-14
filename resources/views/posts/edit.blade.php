@extends('layouts.app')
@section('title', '| Edit Post')

@section('content')
    {!! Form::model($post,['route' =>['posts.update', $post->id], 'method'=> 'PATCH']) !!}
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ Form::text('title', null, ["class" =>'form-control']) }}
                </h1>
                <h2 class="subtitle">
                    {{ Form::text('category',null,  ["class" =>'form-control']) }}
                </h2>
            </div>
        </div>
    </section>
    <div class="container" >
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
                                    <strong>Kasutaja:</strong> <small>{{Auth::user()->name}}</small> <small>31m</small>
                                <dl>
                                    <dt>Loodud: {{ date('j M, Y H:i', strtotime($post->created_at))}}</dt>
                                    <dt>Uuendatud: {{ date('j M, Y H:i', strtotime($post->updated_at))}}</dt>
                                </dl>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                </p>
                                <div class="primary-action-button is-fullwidth">
                                    {!! Html::linkRoute('posts.show', 'Tuhista', array($post->id), array('class'=>"button is-danger ")) !!}
                                    {!! Html::linkRoute('posts.update', 'Salvesta muudatused', ['class'=>"button is-primary"]) !!}
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
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
                    {{ Form::text('body', null, ["class" =>'form-control']) }}                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection