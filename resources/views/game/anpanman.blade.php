@extends('layout')
@section('title', '神経衰弱')
@section('content')
<div>
<h2 id="msg">Cardを選択してください</h2>
</div>
<ul class="image_list hidden">
    @foreach($characters as $character)
        <li class="cardRoom"><img class="gameCardImage unselected" src="/storage/{{ $character->image_path }}" alt=""></li>
    @endforeach
</ul>
<button name="start">スタート！</button>

<button type="reset">ゲームリセット</button>
<script src="/js/anpanmangame.js"></script>
@endsection