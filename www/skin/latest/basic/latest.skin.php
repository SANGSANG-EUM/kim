<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>

<div class="main-board-slider">
  <div class="main-board-ctr-wr">
    <ul class="main-board-slide-ctr-ul">
      <li class="main-board-slide-ctr-li">
        <button type="button" class="main-board-slide-btn slide-circle-btn prev"><img src="./source/img/icon-bdsl_arrow_prev.png"
            alt="이전 슬라이드"></button>
      </li>
      <li class="main-board-slide-ctr-li">
        <button type="button" class="main-board-slide-btn slide-circle-btn next"><img src="./source/img/icon-bdsl_arrow_next.png"
            alt="다음 슬라이드"></button>
      </li>
      <li class="main-board-slide-ctr-li">
        <a href="/news_kr" class="main-board-slide-btn slide-circle-btn more"><img src="./source/img/icon-bbsl_more.png" alt="더보기"></a>
      </li>
    </ul>
  </div>
  <div class="swiper-wrapper">
  <?php for ($i=0; $i<$list_count; $i++) {  ?>
    <div class="main-board-slide swiper-slide">
      <a href="<?php echo '/'.$list[$i]['bo_table'].'/'.$list[$i]['wr_id']?>" class="main-board-slide-link">
        <div class="main-board-slide-in">
          <div class="main-board-slide-top">
            <p class="main-board-slide-cate">
              <?php 
              if ($list[$i]['bo_table'] == 'news_kr') {echo 'NEWS';}
              else if ($list[$i]['bo_table'] == 'research_kr') {echo 'R&D History';} 
              ?>
            </p>
            <p class="main-board-slide-tit textcut line1"><?php echo $list[$i]['subject']?></p>
          </div>
          <div class="main-board-slide-cnt textcut line3">
          <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 200, '..'); ?>
          </div>
        </div>
        <p class="main-prd-more">
          <span>VIEW MORE</span>
          <img src="./source/img/icon-more.png" alt="">
        </p>
      </a>
    </div>
  <?php }  ?>
  <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="main-board-slide-empty">게시물이 없습니다.</div>
  <?php }  ?>
  </div>
</div>
