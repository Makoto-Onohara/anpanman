
$(function(){
    $('.image_box .disabled_checkbox').click(function(){
        return false;
    });
    let count = 0;
    // 画像がクリックされたときの処理
    $('img.thumbnail').on('click',function(){
        if(!$(this).is('.checked')){
            // チェックが入っていない画像をクリックした場合
            $(this).addClass('checked');
        } else {
            // チェックが入っている画像をクリックした場合
            $(this).removeClass('checked');
        }
        count = $('.checked').length;
        $('.count').html(count + '個選択中');
        // alert(count);   
    });
 


    

});