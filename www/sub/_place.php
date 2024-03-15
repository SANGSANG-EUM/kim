<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="place" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'aboutus', 'abt_workplace'); ?>

<!-- 카카오 지도 설치 스크립트 -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

  <div class="container sub_contents">

    <div class="wrapper">
      <div class="sub-tit-wr">
        <h3 class="sub-tit">
          <!-- 본 페이지의 타이틀이 들어갑니다 (normal.js)-->
        </h3>
      </div>
    </div>

    <div class="sub-container">
      <div class="wrapper">
        <ul class="place-ul">
          <li class="place-li">
            <div class="place-name">
              <p>본사 - 1공장</p>
            </div>
            <div class="place-content">
              <div class="place-content-top">
                <div class="place-txt-wr">
                  <p class="place-address">경상남도 창원시 의창구 대산면 진산대로 269</p>
                  <ul class="place-info-ul">
                    <li class="place-info-li">
                      <b>Tel</b>
                      <span>055-251-0261</span>
                    </li>
                    <li class="place-info-li">
                      <b>Fax</b>
                      <span>055-251-2520</span>
                    </li>
                    <li class="place-info-li">
                      <b>E-Mail</b>
                      <span>gear@kimm.co.kr</span>
                    </li>
                  </ul>
                </div>
                <div class="place-link-wr">
                  <a href="https://kko.to/jmP9XVIW2u" target="_blank" class="place-link"><img src="/source/img/icon-view.png" alt=""><span>지도 크게보기</span></a>
                </div>
              </div>
              <div class="place-content-btm">
                <div class="place-img">
                  <img src="/source/img/place1.jpg" alt="">
                </div>
                <div class="place-map">
                  <!-- 지도 노드 -->
                  <div id="daumRoughmapContainer1709080746900" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                  <!-- 실행 스크립트 -->
                  <script charset="UTF-8">
                    new daum.roughmap.Lander({
                      "timestamp" : "1709080746900",
                      "key" : "2iaeb",
                    }).render();
                  </script>
                </div>
              </div>
            </div>
          </li>
          <li class="place-li">
            <div class="place-name">
              <p>2공장</p>
            </div>
            <div class="place-content">
              <div class="place-content-top">
                <div class="place-txt-wr">
                  <p class="place-address">경상남도 창원시 성산구 곰절길9번길 12</p>
                </div>
                <div class="place-link-wr">
                  <a href="https://kko.to/nAg_q8-67M" target="_blank" class="place-link"><img src="/source/img/icon-view.png" alt=""><span>지도 크게보기</span></a>
                </div>
              </div>
              <div class="place-content-btm">
                <div class="place-img">
                  <img src="/source/img/place2.jpg" alt="">
                </div>
                <div class="place-map">
                  <!-- 지도 노드 -->
                  <div id="daumRoughmapContainer1709080967122" class="root_daum_roughmap root_daum_roughmap_landing"></div>                  
                  <!-- 실행 스크립트 -->
                  <script charset="UTF-8">
                    new daum.roughmap.Lander({
                      "timestamp" : "1709080967122",
                      "key" : "2iaei",
                    }).render();
                  </script>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>