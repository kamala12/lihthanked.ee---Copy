
@include('_includes.head')
@include('_includes.main')

@section('title', '| Welcome')
<div class="container is-widescreen">
    <br>
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                        <p class="title">Reklaam1...</p>
                        <p class="subtitle">Top tile</p>
                    </article>
                    <article class="tile is-child notification is-warning">
                        <p class="title">Reklaam2...</p>
                        <p class="subtitle">Bottom tile</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                        <p class="title">Suvaline hange</p>
                        <p class="subtitle">Koos pildiga</p>
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/640x480.png">
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-danger">
                    <p class="title">Eriline hange</p>
                    <p class="subtitle">Või siis lõppev hange</p>
                    <div class="content">
                        <!-- Content -->
                    </div>
                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child notification is-success">
                <div class="content">
                    <p class="title">Otsing</p>
                    <p class="subtitle">Või kategooriate tulba</p>
                    <div class="content">
                        <!-- Content -->
                    </div>
                </div>
            </article>
        </div>
    </div>
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
                        <strong>John Smith</strong>
                        <small>@johnsmith</small>
                        <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa
                        fringilla egestas. Nullam condimentum luctus turpis.
                    </p>
                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-reply"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fas fa-heart"></i></span>
                        </a>
                    </div>
                </nav>
            </div>
        </article>
    </div>
</div>


@include('_includes.footer')