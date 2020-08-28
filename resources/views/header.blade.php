<header>
@if(isset(Auth::user()->name))
    <nav class="nav">
        <ul class=nav-right>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <li>名前：{{ Auth::user()->name }}</li>
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <li>{{ 'ログアウト' }}</li>
            </a>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
        <br>
        <h1>アンパンマンの神経衰弱ゲーム</h1>
        <ul>
            <a href="{{ url('/') }}"><li class="gamemenu" id="noborder">トップページ(カード一覧）</li></a>
            <a href="{{ route('game') }}"><li class="gamemenu">アンパンマン</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">車</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">山</li></a>
            <a class="nav-link" href="#"><li class="gamemenu">花</li></a>
            <a class="nav-link" href="/anpanman/uploadForm"><li class="gamemenu">画像のアップロード</li></a>
        </ul>
    </nav>
@else
    <script>window.location = "/";</script>
@endif
</header>