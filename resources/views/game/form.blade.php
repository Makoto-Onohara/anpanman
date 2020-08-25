@extends('layout')
@section('title', '画像アップロード')
@section('content')
    <div>

    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p><input type="file" name="image_path" class=""></p>
        @if($errors->has('image_path'))
            <div class="error">{{ $errors->first('image_path') }}</div>
        @endif
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" id="">
        </p>
        @if($errors->has('name'))
            <p class="error">{{ $errors->first('name') }}</p>
        @endif
        <p>
            <label for="genre_id">ジャンル</label>
            <select name="genre_id" id="">
                <option value="0">アンパンマン</option>
                <option value="1">車</option>
                <option value="2">山</option>
                <option value="3">花</option>
            </select>
        </p>
        <p><button type="submit" name="submit">送信</button></p>
    </form>

    <div class="test">
        <p>
        <img src="{{ asset('/storage/baikinman.jpg') }}" alt="">
        </p>
    </div>
@endsection