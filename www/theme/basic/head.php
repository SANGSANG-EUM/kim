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
      <img src="../source/img/logo_w.png" alt="주식회사 킴" class="hd-icon-white">
      <img src="../source/img/logo_b.png" alt="주식회사 킴" class="hd-icon-color">
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
              <img src="../source/img/icon-select_w.png" alt="언어변경" class="hd-icon-white">
              <img src="../source/img/icon-select_g.png" alt="언어변경" class="hd-icon-color">
            </button>
            <ul class="hd-lang-ul">
              <li class="hd-lang-li">
                <a href="">EN</a>
              </li>
              <li class="hd-lang-li">
                <a href="">CN</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="tnb-li">
          <a href="" class="hd-contact-btn">
            <img src="../source/img/icon-envelope.png" alt="" class="hd-icon-white">
            <img src="../source/img/icon-envelope_g.png" alt="" class="hd-icon-color">
            <span>Contact us</span>
          </a>
        </li>
        <li class="tnb-li">
          <button type="button" class="hd-sch-btn">
            <img src="../source/img/icon-search.png" alt="검색" class="hd-icon-white">
            <img src="../source/img/icon-search_b.png" alt="검색" class="hd-icon-color">
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
    <div class="wrapper">
      <ul class="head-menu-ul">
        <?php foreach ($sb_menus as $menu) { ?>
        <li class="head-menu-li">
          <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
          <ul class="head-menu-2dep-ul">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
            <li class="head-menu-2dep-li">
              <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
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
</header>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">