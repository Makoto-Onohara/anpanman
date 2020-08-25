    filename0 = ''; // 1枚目のカード
    filename1 = ''; // 2枚目のカード
    $flag = false; // 1枚目と2枚目が一致しているかどうか

    // 1回目の選択 
    $('img').click(function() {
        // 正解してfrontクラスを保有していたら選び直し
            if($flag === false){ // 1枚目のカードをめくる
                // $(this).attr({
                //     id: 'first',
                //     class: 'front'
                // });
                $(this).attr("id", "first");
                $(this).addClass('front');
                $(this).removeClass('unselected'); // unselectedクラスの削除
                $flag = true;
            } else { // 2枚目のカードをめくる
                $object = $(this);
                $object.attr("id", "second");
                $(this).removeClass('unselected');
            // 2枚目の選択が終わったら1枚目と2枚目のファイル名が一致するか判定
                $first = $('#first');
                $second = $('#second');
                // ファイル名を取得
                filename0 = $('#first').attr("src").split("/").pop(); // ファイル名を取得
                filename1 = $('#second').attr("src").split("/").pop();
                // ファイル名が一致するか判定
                if(filename0 === filename1){
                    $('#msg').text('正解です！おめでとう！');
                    // $('#first').attr({id: '', class: 'front'});
                    // $('#second').attr({id: '', class: 'front'});
                    $('#first').attr('id', '');
                    $('#second').attr('id', '');
                    $('#second').addClass('front');
                } else {
                    $('#msg').text('不正解です');
                    // 1病後に再び隠す
                    setTimeout(function(){
                        $first.addClass('unselected');
                        $first.attr('id', '');
                        $first.removeClass('front');
                        filename0 = '';
                        filename1 = '';
                        $second.addClass('unselected');
                        $second.attr('id', '');
                    }, 1000);
                }
                // もう一度1枚目から選択する
                $flag = false;
                // 全部選択されていたら終了
                if($('.front').length === 8) {
                    $('#msg').append('<p>ゲーム終了です</p>');
                }
            }
    });
