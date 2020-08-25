@extends('layout')
@section('content')
    @if(session('err_msg'))
    <p>{{ session('err_msg') }}</p>
    @endif
    <p class="count">ここに数字を表示</p>
    <form action="" method="post">
    @csrf
    <div class="image_card">
        <ul class="image_list">
            @foreach($characters as $character)
            <li>
                <div class="image_box">
                    <img src="storage/{{ $character['image_path'] }}" alt="" class="thumbnail">
                    <input type="checkbox" class="disabled_checkbox" value="{{ $character['image_path'] }}"checked/>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    </form>
    

@endsection