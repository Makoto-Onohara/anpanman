@extends('layout')
@section('title', '神経衰弱')
@section('content')
<div id="msg">
カードを選択してください
</div>
<ul class="image_list">
    @foreach($characters as $character)
        <li class="cardRoom"><img class="gameCardImage unselected" src="/storage/{{ $character->image_path }}" alt=""></li>
    @endforeach
</ul>
<script src="/js/anpanmangame.js"></script>
@endsection