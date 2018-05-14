@extends('layouts.app')
@section('title', '| Create New Post')

@section('content')
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Lisa uus lihthange
                </h1>
                <h2 class="subtitle">
                    Kategooria
                </h2>
            </div>
        </div>
    </section>
    <div class="container is-widescreen">
        {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
        <div class="flex-container">

            <form action="{{route('posts.store')}}" method="post">
                {{ csrf_field() }}
                <div class="columns">
                    <div class="column is-one-quarter-desktop is-narrow-tablet">
                        <div class="card card-widget">
                            <div class="author-widget widget-area">
                                <div class="selected-author">
                                    <img src="https://placehold.it/50x50"/>
                                    <div class="author">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="subtitle">
                                            (Kasutajanimi)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="publish-buttons-widget widget-area">
                                <div class="primary-action-button">
                                    <button class="button is-info is-fullwidth">Avalda</button>
                                </div>
                            </div>
                        </div>
                        <BR>
                        <div class="field">
                            <label class="label">Slug</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="slug" id="slug">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">authorid</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="author_id" id="title">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Status</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="status" id="title">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Type</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="type" id="title">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Kategooria</label>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <div class="select" name="category">
                                        <select name="category" placeholder="Vali">
                                            <option>Maakond</option>
                                            <option>Ehitus</option>
                                            <option>Elektroonika</option>
                                            <option>Sõidukid</option>
                                        </select>
                                    </div>
                                    <div class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="label">Hanke tahtaeg</label>
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <input id="datepickerDemo2" class="input" type="text" name="published_at"
                                       value="11-02-2018">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left has-icons-right">
                                        <input class="input is-success" type="email"
                                               placeholder="Datepicker tuleb siia">
                                        <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of .column.is-one-quarter -->
                    <div class="column is-three-quarters-desktop">
                        <div class="field">
                            <label class="label">Hanke nimetus</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="title" id="title"
                                       required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Comment count</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="comment_count"
                                       id="title">
                            </div>
                            <div class="field">
                                <label class="label">Excerpt</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input" name="excerpt" id="title">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Hanke tapne kirjeldus</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Textarea" name="body" id="body"
                                              rows="10"></textarea>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
            </form>


        </div> <!-- end of .flex-container -->


    {!! Form::close() !!}

@endsection
@section('scripts')

    {!! Html::script('js/app.js') !!}

@endsection