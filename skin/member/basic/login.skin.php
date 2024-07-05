<?php
//if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <div class="mbskin_box">
        <h1>로그인</h1>
        <div class="mb_log_cate">
            <h2><span class="sound_only">회원</span>로그인</h2>
            <a href="https://demo.sir.kr/gnuboard5/bbs/register.php" class="join">회원가입</a>
        </div>
        <form name="flogin" action="https://demo.sir.kr/gnuboard5/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="https%3A%2F%2Fdemo.sir.kr%2Fgnuboard5">
        
        <fieldset id="login_fs">
            <legend>회원로그인</legend>
            <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="mb_id" id="login_id" required="" class="frm_input required" size="20" maxlength="20" placeholder="아이디" value="youngcart5">
            <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" required="" class="frm_input required" size="20" maxlength="20" placeholder="비밀번호" value="1234">
            <button type="submit" class="btn_submit">로그인</button>
            
            <div id="login_info">
                <div class="login_if_auto chk_box">
                    <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
                    <label for="login_auto_login"><span></span> 자동로그인</label>  
                </div>
                <div class="login_if_lpl">
                    <a href="https://demo.sir.kr/gnuboard5/bbs/password_lost.php">아이디/비밀번호 찾기</a>  
                </div>
            </div>
        </fieldset> 
        </form>
<div id="sns_login" class="login-sns sns-wrap-32 sns-wrap-over">
    <h3>소셜계정으로 로그인</h3>
    <div class="sns-wrap">
                <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=naver&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-naver" title="네이버">
            <span class="ico"></span>
            <span class="txt">네이버<i> 로그인</i></span>
        </a>
                        <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=kakao&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-kakao" title="카카오">
            <span class="ico"></span>
            <span class="txt">카카오<i> 로그인</i></span>
        </a>
                        <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=facebook&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-facebook" title="페이스북">
            <span class="ico"></span>
            <span class="txt">페이스북<i> 로그인</i></span>
        </a>
                        <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=google&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-google" title="구글">
            <span class="ico"></span>
            <span class="txt">구글<i> 로그인</i></span>
        </a>
                        <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=twitter&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-twitter" title="트위터">
            <span class="ico"></span>
            <span class="txt">트위터<i> 로그인</i></span>
        </a>
                        <a href="https://demo.sir.kr/gnuboard5/plugin/social/popup.php?provider=payco&amp;url=%2Fgnuboard5%2Fbbs%2Flogin.php" class="sns-icon social_link sns-payco" title="페이코">
            <span class="ico"></span>
            <span class="txt">페이코<i> 로그인</i></span>
        </a>
        
                <script>
            jQuery(function($){
                $(".sns-wrap").on("click", "a.social_link", function(e){
                    e.preventDefault();

                    var pop_url = $(this).attr("href");
                    var newWin = window.open(
                        pop_url, 
                        "social_sing_on", 
                        "location=0,status=0,scrollbars=1,width=600,height=500"
                    );

                    if(!newWin || newWin.closed || typeof newWin.closed=='undefined')
                         alert('브라우저에서 팝업이 차단되어 있습니다. 팝업 활성화 후 다시 시도해 주세요.');

                    return false;
                });
            });
        </script>
        
    </div>
</div>    
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
        
</div>
<!-- } 로그인 끝 -->

