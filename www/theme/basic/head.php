<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>


<!-- 헤더 시작 { -->
<header class="header">
  <div class="head-in">
    <a href="/" class="head-logo">
      <img src="/source/img/logo_w.png" alt="주식회사 킴" class="hd-icon-white">
      <img src="/source/img/logo_b.png" alt="주식회사 킴" class="hd-icon-color">
    </a>
    <ul class="gnb-ul">
      <?php foreach ($sb_menus as $menu) { ?>
      <li class="gnb-li">
        <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
      </li>
      <?php } ?>
    </ul>
    <div class="tnb-wr">
      <ul class="tnb-ul">
        <li class="tnb-li">
          <div class="hd-lang-wr">
            <button type="button" class="hd-lang-btn">
              <span>KR</span>
              <img src="/source/img/icon-select_w.png" alt="언어변경" class="hd-icon-white">
              <img src="/source/img/icon-select_g.png" alt="언어변경" class="hd-icon-color">
            </button>
            <ul class="hd-lang-ul">
              <li class="hd-lang-li">
                <a href="javascript:alert('준비중입니다');">EN</a>
              </li>
              <li class="hd-lang-li">
                <a href="javascript:alert('준비중입니다');">CN</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="tnb-li">
          <a href="/sub/contact" class="hd-contact-btn">
            <img src="/source/img/icon-envelope.png" alt="" class="hd-icon-white">
            <img src="/source/img/icon-envelope_g.png" alt="" class="hd-icon-color">
            <img src="/source/img/icon-envelope_blue.png" alt="" class="hd-icon-hover">
            <span>Contact us</span>
          </a>
        </li>
        <li class="tnb-li">
          <button type="button" class="hd-sch-btn">
            <img src="/source/img/icon-search.png" alt="검색" class="hd-icon-white">
            <img src="/source/img/icon-search_b.png" alt="검색" class="hd-icon-color">
          </button>
        </li>
      </ul>
      <button type="button" class="hd-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
  <div class="head-menu">
    <div class="wrapper3">
      <ul class="head-menu-ul">
        <?php foreach ($sb_menus as $menu) { ?>
        <li class="head-menu-li">
          <a href="<?php //echo $menu['link'];?>" class="head-menu-tit"><?php echo $menu['name'];?></a>
          <!-- <p class="head-menu-tit"><?php //echo $menu['name'];?></p> -->
          <ul class="head-menu-2dep-ul">
            <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
            <li class="head-menu-2dep-li">
              <a href="<?php echo $menu2['link'];?>"><span><?php echo $menu2['name'];?></span></a>
            </li>
            <?php } ?>
          </ul>
        </li>

        <?php } ?>
      </ul>
      </li>
      </ul>
    </div>
  </div>
  <div class="head-sch-wr">
    <fieldset id="hd_sch">
      <div class="wrapper">
        <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
          onsubmit="return fsearchbox_submit(this);">
          <input type="hidden" name="sfl" value="wr_subject||wr_content">
          <input type="hidden" name="sop" value="and">
          <label for="sch_stx" class="sound_only">검색어 필수</label>
          <input type="text" name="stx" id="sch_stx" maxlength="20" class="head-sch-input"
            placeholder="찾으시는 검색어를 입력해 주세요.">
          <button type="submit" id="sch_submit" class="head-sch-submit"><img src="/source/img/icon-search_b.png"
              alt=""></button>
        </form>
        <script>
          function fsearchbox_submit(f) {
            var stx = f.stx.value.trim();
            if (stx.length < 2) {
              alert("검색어는 두글자 이상 입력하십시오.");
              f.stx.select();
              f.stx.focus();
              return false;
            }

            // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
            var cnt = 0;
            for (var i = 0; i < stx.length; i++) {
              if (stx.charAt(i) == ' ')
                cnt++;
            }

            if (cnt > 1) {
              alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
              f.stx.select();
              f.stx.focus();
              return false;
            }
            f.stx.value = stx;

            return true;
          }
        </script>
      </div>
    </fieldset>
  </div>
</header>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">