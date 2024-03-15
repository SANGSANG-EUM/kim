<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="container">
    <div class="main">

      <!-- 메인비주얼 { -->
      <div class="mainsec mainsec1">
        <div class="wrapper2">
          <ul class="main-vs-slide-ctr-ul">
            <li class="main-vs-slide-ctr-li">
              <button type="button" class="main-vs-slide-btn">01</button>
              <div class="main-vs-slide-time-wr">
                <div class="main-vs-slide-time-in"></div>
              </div>
            </li>
            <li class="main-vs-slide-ctr-li">
              <button type="button" class="main-vs-slide-btn">02</button>
              <div class="main-vs-slide-time-wr">
                <div class="main-vs-slide-time-in"></div>
              </div>
            </li>
            <li class="main-vs-slide-ctr-li">
              <button type="button" class="main-vs-slide-btn">03</button>
              <div class="main-vs-slide-time-wr">
                <div class="main-vs-slide-time-in"></div>
              </div>
            </li>
          </ul>
          <div class="main-vs-scroll">
            <p class="main-vs-scroll-txt">Scroll Down</p>
            <p class="main-vs-scroll-icon"><img src="./source/img/icon-mouse.png" alt=""></p>
          </div>
        </div>
        <div class="main-vs-slider">
          <div class="swiper-wrapper">
            <div class="main-vs-slide swiper-slide" style="background-image: url('./source/img/mainvisual1.jpg');">
              <div class="wrapper2">
                <div class="main-vs-slide-in">
                  <h3 class="main-vs-slide-tit">
                    <span class="type1">토탈솔루션</span>
                    <span class="type2">Total Solution</span>
                  </h3>
                  <p class="main-vs-slide-txt">
                    설계에서부터 제작, 품질보증까지 고객의 요구도에 맞춘 고품질의 제품으로 <b>최상의 솔루션을 제공</b>합니다.
                  </p>
                </div>
              </div>
            </div>
            <div class="main-vs-slide swiper-slide" style="background-image: url('./source/img/mainvisual2.jpg');">
              <div class="wrapper2">
                <div class="main-vs-slide-in">
                  <h3 class="main-vs-slide-tit">
                    <span class="type1">주식회사 킴</span>
                    <span class="type2">KIM Co., Ltd.</span>
                  </h3>
                  <p class="main-vs-slide-txt">
                    1990년 창립 이래 연구개발 및 혁신활동을 통해 기계산업의 핵심 기반인 초정밀 구동장치를 <br> <b>세계적인 수준으로 도약 및 발전</b>시켜 왔습니다.
                </div>
              </div>
            </div>
            <div class="main-vs-slide swiper-slide" style="background-image: url('./source/img/mainvisual3.jpg');">
              <div class="wrapper2">
                <div class="main-vs-slide-in">
                  <h3 class="main-vs-slide-tit">
                    <span class="type1">볼/롤러스크류</span>
                    <span class="type2">Ball / Roller screw</span>
                  </h3>
                  <p class="main-vs-slide-txt">
                    주식회사 킴은 사용환경에 적합한 <b>고정밀 볼 및 롤러스크류 솔루션</b>을 고객에게 제공합니다.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="main-vs-slide swiper-slide" style="background-image: url('./source/img/mainvisual4.jpg');">
            <div class="wrapper2">
              <div class="main-vs-slide-in">
                <h3 class="main-vs-slide-tit">
                  <span class="type1">회전식 액츄에이터</span>
                  <span class="type2">Rotary Actuator</span>
                </h3>
                <p class="main-vs-slide-txt">
                  주식회사 킴은 사용환경에 적합한 <b>고정밀 볼 및 롤러스크류 솔루션</b>을 고객에게 제공합니다.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- } 메인비주얼 -->

      <!-- 메인프로덕트 { -->
      <div class="mainsec mainsec2">
        <div class="wrapper2">
          <h4 class="mainsec-tit">Main Product</h4>
          <ul class="main-prd-ul">
            <li class="main-prd-li">
              <a href="/sub/product1" class="main-prd-li-link">
                <div class="main-prd-bg">
                  <img src="./source/img/img-mainprd2.jpg" alt="">
                </div>
                <div class="main-prd-box">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Roller screw</p>
                    <p class="main-prd-txt ko">롤러스크류</p>
                  </div>
                </div>
                <div class="main-prd-box hover">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Roller screw</p>
                    <p class="main-prd-txt ko">롤러스크류</p>
                  </div>
                  <ul class="main-prd-info-ul">
                    <li class="main-prd-info-li">
                    유도무기
                    </li>
                    <li class="main-prd-info-li">
                    지상장비
                    </li>
                    <li class="main-prd-info-li">
                    로봇
                    </li>
                    <li class="main-prd-info-li">
                    해양
                    </li>
                  </ul>
                  <p class="main-prd-more">
                    <span>VIEW MORE</span>
                    <img src="./source/img/icon-more.png" alt="">
                  </p>
                </div>
              </a>
            </li>
            <li class="main-prd-li">
              <a href="/sub/product2" class="main-prd-li-link">
                <div class="main-prd-bg">
                  <img src="./source/img/img-mainprd1.jpg" alt="">
                </div>
                <div class="main-prd-box">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Ball screw</p>
                    <p class="main-prd-txt ko">볼스크류</p>
                  </div>
                </div>
                <div class="main-prd-box hover">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Ball screw</p>
                    <p class="main-prd-txt ko">볼스크류</p>
                  </div>
                  <ul class="main-prd-info-ul">
                    <li class="main-prd-info-li">
                    유도무기
                    </li>
                    <li class="main-prd-info-li">
                    감시정찰
                    </li>
                    <li class="main-prd-info-li">
                    로봇
                    </li>
                    <li class="main-prd-info-li">
                    의료
                    </li>
                  </ul>
                  <p class="main-prd-more">
                    <span>VIEW MORE</span>
                    <img src="./source/img/icon-more.png" alt="">
                  </p>
                </div>
              </a>
            </li>
            <li class="main-prd-li">
              <a href="/sub/product3" class="main-prd-li-link">
                <div class="main-prd-bg">
                  <img src="./source/img/img-mainprd5.jpg" alt="">
                </div>
                <div class="main-prd-box">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Gearbox</p>
                    <p class="main-prd-txt ko">기어박스</p>
                  </div>
                </div>
                <div class="main-prd-box hover">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Gearbox</p>
                    <p class="main-prd-txt ko">기어박스</p>
                  </div>
                  <ul class="main-prd-info-ul">
                    <li class="main-prd-info-li">
                    자동장전용 기어조립체
                    </li>
                    <li class="main-prd-info-li">
                    포탑 선회 및 고저구동장치
                    </li>
                    <li class="main-prd-info-li">
                    연구개발 Test bench 초고속기어박스
                    </li>
                    <li class="main-prd-info-li">
                    칠러/압축용 터보 기어
                    </li>
                  </ul>
                  <p class="main-prd-more">
                    <span>VIEW MORE</span>
                    <img src="./source/img/icon-more.png" alt="">
                  </p>
                </div>
              </a>
            </li>
            <li class="main-prd-li">
              <a href="/sub/product4" class="main-prd-li-link">
                <div class="main-prd-bg">
                  <img src="./source/img/img-mainprd3.jpg" alt="">
                </div>
                <div class="main-prd-box">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Rotary Actuator</p>
                    <p class="main-prd-txt ko">회전형 액츄에이터</p>
                  </div>
                </div>
                <div class="main-prd-box hover">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Rotary Actuator</p>
                    <p class="main-prd-txt ko">회전형 액츄에이터</p>
                  </div>
                  <ul class="main-prd-info-ul">
                    <li class="main-prd-info-li">
                    GIMBAL
                    </li>
                    <li class="main-prd-info-li">
                    무인 수상, 잠수정
                    </li>
                    <li class="main-prd-info-li">
                    VTOL
                    </li>
                    <li class="main-prd-info-li">
                    UAV
                    </li>
                    <li class="main-prd-info-li">
                    UGV, 로봇
                    </li>
                  </ul>
                  <p class="main-prd-more">
                    <span>VIEW MORE</span>
                    <img src="./source/img/icon-more.png" alt="">
                  </p>
                </div>
              </a>
            </li>
            <li class="main-prd-li">
              <a href="/sub/product5" class="main-prd-li-link">
                <div class="main-prd-bg">
                  <img src="./source/img/img-mainprd4.jpg" alt="">
                </div>
                <div class="main-prd-box">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Linear Actuator</p>
                    <p class="main-prd-txt ko">선형 엑츄에이터</p>
                  </div>
                </div>
                <div class="main-prd-box hover">
                  <div class="main-prd-name">
                    <p class="main-prd-txt en">Linear Actuator</p>
                    <p class="main-prd-txt ko">선형 엑츄에이터</p>
                  </div>
                  <ul class="main-prd-info-ul">
                    <li class="main-prd-info-li">
                    항공 개폐장치
                    </li>
                    <li class="main-prd-info-li">
                    포탑구동
                    </li>
                    <li class="main-prd-info-li">
                    VTOL
                    </li>
                    <li class="main-prd-info-li">
                    시추선
                    </li>
                    <li class="main-prd-info-li">
                    건설기계
                    </li>
                  </ul>
                  <p class="main-prd-more">
                    <span>VIEW MORE</span>
                    <img src="./source/img/icon-more.png" alt="">
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- } 메인프로덕트 -->

      <!-- 인더스트리 { -->
      <div class="mainsec mainsec3">
        <div class="wrapper2">
          <h4 class="mainsec-tit">Industry</h4>
          <ul class="main-ids-ul">
            <li class="main-ids-li">
              <div class="main-ids-bg">
                <img src="./source/img/img-mainids1.jpg" alt="">
              </div>
              <a href="/sub/defense1" class="main-ids-li-link">
                <div class="main-ids-cnt">
                  <p class="main-ids-txt1">KIM Industry 01 - Defense Industry</p>
                  <p class="main-ids-tit">방위산업</p>
                  <p class="main-ids-txt2">(주)킴은 방위산업에 포함되는 고품질의 제품 및 서비스를 제공하고 있습니다.</p>
                </div>
                <p class="main-prd-more">
                  <span>VIEW MORE</span>
                  <img src="./source/img/icon-more.png" alt="">
                </p>
              </a>
            </li>
            <li class="main-ids-li">
              <div class="main-ids-bg">
                <img src="./source/img/img-mainids2.jpg" alt="">
              </div>
              <a href="/sub/general1" class="main-ids-li-link">
                <div class="main-ids-cnt">
                  <p class="main-ids-txt1">KIM Industry 02 - General Industry</p>
                  <p class="main-ids-tit">일반산업</p>
                  <p class="main-ids-txt2">(주)킴은 일반산업에 포함되는 고품질의 제품 및 서비스를 제공하고 있습니다.</p>
                </div>
                <p class="main-prd-more">
                  <span>VIEW MORE</span>
                  <img src="./source/img/icon-more.png" alt="">
                </p>
              </a>
            </li>
            <li class="main-ids-li">
              <div class="main-ids-bg">
                <img src="./source/img/img-mainids3.jpg" alt="">
              </div>
              <a href="/sub/rnd" class="main-ids-li-link">
                <div class="main-ids-cnt">
                  <p class="main-ids-txt1">KIM Industry 03 - R&D</p>
                  <p class="main-ids-tit">연구개발</p>
                  <p class="main-ids-txt2">(주)킴은 연구개발에 포함되는 고품질의 제품 및 서비스를 제공하고 있습니다.</p>
                </div>
                <p class="main-prd-more">
                  <span>VIEW MORE</span>
                  <img src="./source/img/icon-more.png" alt="">
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- } 인더스트리 -->

      <!-- 히스토리&뉴스 { -->
      <div class="mainsec mainsec4">
        <div class="wrapper2">
          <h4 class="mainsec-tit center">R&D History & NEWS</h4>
        </div>
        <?php echo latest_all("basic", "research_kr,news_kr", 10, 20); ?>
      </div>
      <!-- } 히스토리&뉴스 -->

      <!-- 메인 하단 버튼 { -->
      <div class="mainsec mainsec5">
        <div class="wrapper2">
          <div class="main-link-wr">
            <a href="/sub/video" class="main-link">
              <div class="main-link-tit-wr">
                <p class="main-link-tit ko">홍보동영상</p>
                <p class="main-link-tit en">Company Video</p>
              </div>
              <div class="main-link-icon">
                <img src="./source/img/icon-mainbtn1.png" alt="" style="width: 43px;">
                <img src="./source/img/icon-mainbtn1_hover.png" alt="" style="width: 43px;">
              </div>
            </a>
            <a href="/notice_kr" class="main-link">
              <div class="main-link-tit-wr">
                <p class="main-link-tit ko">공지사항</p>
                <p class="main-link-tit en">Notice</p>
              </div>
              <div class="main-link-icon">
                <img src="./source/img/icon-mainbtn2.png" alt="" style="width: 27px;">
                <img src="./source/img/icon-mainbtn2_hover.png" alt="" style="width: 27px;">
              </div>
            </a>
            <a href="/data_kr" class="main-link">
              <div class="main-link-tit-wr">
                <p class="main-link-tit ko">기술자료</p>
                <p class="main-link-tit en">Technical files</p>
              </div>
              <div class="main-link-icon">
                <img src="./source/img/icon-mainbtn3.png" alt="" style="width: 48px;">
                <img src="./source/img/icon-mainbtn3_hover.png" alt="" style="width: 48px;">
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- } 메인 하단 버튼 -->
    </div>

  </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');