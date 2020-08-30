    filename0 = ''; // 1枚目のカード
    filename1 = ''; // 2枚目のカード
    $flag = false; // 1枚目と2枚目が一致しているかどうか
    // スタートが押されたらカードを表示する
    $('button[name="start"]').click(function(){
        $('.image_list').removeClass('hidden');
    });
    // 1回目の選択 
    $('img').click(function() {
        // 正解してfrontクラスを保有していたら選び直し
        $(this).addClass('front');
        $(this).removeClass('unselected'); // unselectedクラスの削除
        if($flag === false){ // 1枚目のカードをめくる
            $(this).attr("id", "first");
            $flag = true;
        } else { // 2枚目のカードをめくる
            $(this).attr("id", "second");
        // 2枚目の選択が終わったら1枚目と2枚目のファイル名が一致するか判定
            $first = $('#first');
            $second = $('#second');
            // ファイル名を取得
            filename0 = $('#first').attr("src").split("/").pop(); // ファイル名を取得
            filename1 = $('#second').attr("src").split("/").pop();
            // ファイル名が一致するか判定
            if(filename0 === filename1){
                // 正解の場合
                $('#msg').text('正解です！おめでとう！');
                $('#first, #second').attr('id', '');
            } else {
                // 不正解の場合
                $('#msg').text('不正解です');
                // 1秒後に再び隠す
                setTimeout(function(){
                    $first.add($second).addClass('unselected');
                    $first.add($second).attr('id', '');
                    $first.add($second).removeClass('front');
                    filename0 = '';
                    filename1 = '';
                }, 1000);
            }
            // もう一度1枚目から選択する
            $flag = false;
            // 全部選択されていたら終了
            if($('.front').length === $('.gameCardImage').length) {
                $('#msg').text('ゲーム終了です。ゲームリセットを押してください。');
            }
        }
    });

    // スタートボタンを押したらカードが表示される
    $('button[type="reset"]').click(function(){
        location.reload();
    });
