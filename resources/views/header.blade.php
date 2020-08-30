<header>
@if(isset(Auth::user()->name))
<nav class="nav">
    <div class="flex">
        <div class="title">
            <h1 class="media-font-15">アンパンマンの神経衰弱ゲーム</h1>
        </div>
        <div class="Auths">
            <ul class="nav-right flex media-font-10">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <li>{{ Auth::user()->name }}さん</li>
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <li>{{ 'ログアウト' }}</li>
                </a>
            </ul>
        </div>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </div>
        <ul class="flex-nsp media-font-10">
            <a href="{{ url('/home') }}"><li class="gamemenu media-font-10" id="noborder">カード一覧</li></a>
            <a href="{{ route('game') }}"><li class="gamemenu">アンパンマン</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">車</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">山</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">花</li></a>
            <a class="nav-link" href="/anpanman/uploadForm"><li class="gamemenu">アップロード</li></a>
        </ul>
    </nav>
@else
    <script>window.location = "/";</script>
@endif
</header>