<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(EUM_INCLUDE_PATH.'/sub_top.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<div id="qa_view" class="sub qa">
  <?php sub_top($sb_menus, 'cs', 'qa'); ?>

  <!-- sub contents { -->
  <div class="container board_contents">
    <div class="wrapper">

      <!-- 게시물 읽기 시작 { -->
      <article id="bo_v" style="width:<?php echo $width; ?>">
        <header>
          <div id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            <span class="bo_v_tit"><?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력 ?></span>
          </div>

          <div class="profile_info">
            <div class="profile_info_ct">
              <ul class="i-col-0 profile_info_ct_ul">
                <li>
                  <span class="sound_only">작성자</span>
                  <strong>
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <?php echo $view['name'] ?>
                  </strong>
                </li>
                <li>
                  <span class="sound_only">조회</span>
                  <strong>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <?php echo number_format($view['wr_hit']) ?>회
                  </strong>
                </li>
                <li>
                  <span class="sound_only">작성일</span>
                  <strong class="if_date">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <?php echo date("Y.m.d", strtotime($view['wr_datetime'])) ?>
                  </strong>
                </li>
              </ul>
            </div>
          </div>
        </header>
        

        <div id="bo_v_source">
          <!-- 첨부파일 시작 { -->
          <?php
          $cnt = 0;
          if ($view['file']['count']) {
            for ($i=0; $i<count($view['file']); $i++) {
              if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'])
                $cnt++;
            }
          }
          ?>
          <?php if($cnt) { ?>
          <div id="bo_v_file" class="bo_v_source_ct">
            <ul>
              <?php
              // 가변 파일
              for ($i=0; $i<count($view['file']); $i++) {
                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source']) {
              ?>
              <li>
                <i class="fa fa-file-o" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                  <strong><?php echo $view['file'][$i]['source'] ?></strong>
                  <span class="bo_v_file_size"><?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)</span>
                </a>
              </li>
              <?php
                }
              }
              ?>
            </ul>
          </div>
          <?php } ?>
          <!-- } 첨부파일 끝 -->

          <!-- 관련링크 시작 { -->
          <?php if(isset($view['link']) && array_filter($view['link'])) { ?>
          <div id="bo_v_link" class="bo_v_source_ct">
            <ul>
              <?php
              // 링크
              $cnt = 0;
              for ($i=1; $i<=count($view['link']); $i++) {
                if ($view['link'][$i]) {
                  $cnt++;
                  $link = cut_str($view['link'][$i], 70);
              ?>
              <li>
                <i class="fa fa-link" aria-hidden="true"></i>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <strong><?php echo $link ?></strong>
                </a>
              </li>
              <?php
                }
              }
              ?>
            </ul>
          </div>
          <?php } ?>
          <!-- } 관련링크 끝 -->
        </div>

        <section id="bo_v_atc">
          <h2 id="bo_v_atc_title">본문</h2>
          <!-- 본문 내용 시작 { -->
          <div id="bo_v_con">
            작성자 : <?php echo $view['wr_name'];?><br>
            이메일 : <?php echo $view['wr_email'];?><br>
            전화번호 : <?php echo $view['wr_homepage'];?><br><br>
            <?php echo get_view_thumbnail($view['content']); ?>
          </div>
          <!-- } 본문 내용 끝 -->
        </section>

        <!-- 게시물 관리 버튼 시작 { -->
        <div id="bo_v_bot">
          <?php ob_start(); ?>

          <ul class="btn_bo_user bo_v_com">
            <?php if ($update_href) { ?>
            <li>
              <a href="<?php echo $update_href ?>" class="bo_btn2">수정</a>
            </li>
            <?php } ?>
            <?php if ($delete_href) { ?>
            <li>
              <a href="<?php echo $delete_href ?>" class="bo_btn3" onclick="del(this.href); return false;">삭제</a>
            </li>
            <?php } ?>
          </ul>
          <?php
          $link_buttons = ob_get_contents();
          ob_end_flush();
          ?>
        </div>
        <!-- } 게시물 관리 버튼 끝 -->
        
        <!-- 게시글 이동 버튼 { -->
        <div id="bo_v_oth">
          <a href="<?php echo $list_href ?>" class="bo_v_back_btn">LIST</a>

          <?php if ($prev_href || $next_href) { ?>
          <ul class="i-col-0 bo_v_nb">
            <?php if ($prev_href) { ?>
            <li class="btn_prv">
              <a href="<?php echo $prev_href ?>" class="bo_v_nb_btn bo_v_nb_prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>이전글
              </a>
            </li>
            <?php } ?>
            <?php if ($next_href) { ?>
            <li class="btn_next">
              <a href="<?php echo $next_href ?>" class="bo_v_nb_btn bo_v_nb_next">
                다음글<i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
        <!-- } 게시글 이동 버튼 -->
      </article>
      <!-- } 게시판 읽기 끝 -->

    </div>
  </div>
  <!-- } sub contents -->
</div>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
  $("a.view_file_download").click(function() {
    if(!g5_is_member) {
      alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
      return false;
    }

    var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

    if(confirm(msg)) {
      var href = $(this).attr("href")+"&js=on";
      $(this).attr("href", href);

      return true;
    } else {
      return false;
    }
  });
});
<?php } ?>

function board_move(href)
{
  window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
  $("a.view_image").click(function() {
    window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
    return false;
  });

  // 추천, 비추천
  $("#good_button, #nogood_button").click(function() {
    var $tx;
    if(this.id == "good_button")
      $tx = $("#bo_v_act_good");
    else
      $tx = $("#bo_v_act_nogood");

    excute_good(this.href, $(this), $tx);
    return false;
  });

  // 이미지 리사이즈
  $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
  $.post(
    href,
    { js: "on" },
    function(data) {
      if(data.error) {
        alert(data.error);
        return false;
      }

      if(data.count) {
        $el.find("strong").text(number_format(String(data.count)));
        if($tx.attr("id").search("nogood") > -1) {
          $tx.text("이 글을 비추천하셨습니다.");
          $tx.fadeIn(200).delay(2500).fadeOut(200);
        } else {
          $tx.text("이 글을 추천하셨습니다.");
          $tx.fadeIn(200).delay(2500).fadeOut(200);
        }
      }
    }, "json"
  );
}
</script>