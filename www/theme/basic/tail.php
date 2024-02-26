<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 푸터 시작 { -->
<footer class="footer">
  <div class="wrapper foot-wr">
    <a href="/" class="foot-logo">
      <img src="../source/img/logo_w.png" alt="주식회사 킴">
    </a>
    <div class="foot-in">
      <div class="foot-top">
        <div class="foot-link-wr">
          <a href="" class="foot-link">회사소개</a>
          <a href="" class="foot-link">개인정보처리방침</a>
          <a href="" class="foot-link">공지사항</a>
          <a href="" class="foot-link">오시는 길</a>
        </div>
        <button type="button" class="btn-top">
          <img src="../source/img/icon-top.png" alt="페이지 최상단으로 이동">
          <span>TOP</span>
        </button>
      </div>
      <div class="foot-cnt-wr">
        <div class="foot-cnt">
          <p class="foot-address">경상남도 창원시 의창구 대산면 진산대로 269 주식회사 킴</p>
          <ul class="foot-info-ul">
            <li class="foot-info-li">
              대표이사 : <span>홍길동</span>
            </li>
            <li class="foot-info-li">
              Tel : <span>055-251-0261</span>
            </li>
            <li class="foot-info-li">
              Fax : <span>055-251-2520</span>
            </li>
            <li class="foot-info-li">
              E-mail : <span>gear@kimm.co.kr</span>
            </li>
          </ul>
        </div>
        <p class="foot-copyright">Copyright 2015 KIM Co., Ltd. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");