<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Http\Requests\CharacterRequest;



use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    /**
     * 画像アップロード画面の表示
     * 
     * @return view
     */
    public function uploadForm(){
        return view('game.form');
    }
    /**
     * 画像のアップロード
     * 
     * @return view
     */
    public function upload(CharacterRequest $request){
        $uploaded_image = $request->file('image_path');
        if($request->hasFile('image_path') && $uploaded_image->isValid()){
            $name = $request->name;
            $genre_id = $request->genre_id;
            $image_path = $uploaded_image->getClientOriginalName();
            \DB::beginTransaction();
            try{
                Character::create([
                    'name' => $name,
                    'image_path' => $image_path,
                    'genre_id' => $genre_id,
                    ]);

                    \DB::commit();
                $uploaded_image->storeAs('public' ,$image_path);
            } catch(\Throwable $e) {
                \DB::rollback();
                abort(500);
            }
            \Session::flash('err_msg', '画像を登録しました');
            return redirect()->route('top'); // routeで名前をつけているので、blogsでアクセスできる
        } else {
            // エラーがあればフォームに戻る
            return redirect()->route('uploadForm');
        }
        return 'アップロード成功しました';

    }

    /**
     * 画像の一覧を取得
     * 
     * @return view
     */
    public function showCharacter() {
        $characters = Character::all();

        // dd($characters);
        return view('show',
        [
            'characters' => $characters
        ]);
    }

    /**
     * ブログ登録
     * @return view
     */
    public function exeStore(CharacterRequest $request)
    {

        \DB::beginTransaction();
        $inputs = $request->all();
        try{
            Character::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '画像を登録しました');
        // return redirect(route('show')); // routeで名前をつけているので、blogsでアクセスできる
    }
}
