<?php
include_once('./_common.php');
include EUM_INCLUDE_PATH.'/menus.php';

function sub_top($sb_menus, $sb_id, $pg_id){
  foreach ($sb_menus as $menu) {
    if ($menu['id'] === $sb_id) {
?>
<div class="sub-visual <?php echo $menu['id']; ?>">
  <div class="wrapper">
    <div class="sub-visual-in">
      <div class="sub-visual-txt-wr">
        <p class="sub-visual-txt">KIM CO.,LTD.</p>
        <p class="sub-visual-tit"><?php echo $menu['name']; ?></p>
      </div>
      <div class="sub-location">
        <a href="" class="sub-loca-home">
          <img src="/source/img/icon-home.png" alt="홈으로">
        </a>
        <div class="sub-location-btn-wr">
          <button type="button" class="sub-location-btn"><span><?php echo $menu['name']; ?></span><img src="/source/img/icon-subloca_arrow.png" alt=""></button>
          <ul class="sub-location-ul">
            <?php foreach ($sb_menus as $sub_menu) { ?>
            <li class="sub-location-li <?php echo $sub_menu['id'] == $sb_id ? 'act':'';?>">
              <a href="<?php echo $sub_menu['link']; ?>"><?php echo $sub_menu['name']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>
        <?php if (isset($menu['sb_2menus'])) { ?>
          <div class="sub-location-btn-wr">
            <button type="button" class="sub-location-btn">
            <span>
              <?php
                  // $pg_id와 일치하는 $menu['sb_2menus']의 name 찾기
                  $submenu_name = '';
                  foreach ($menu['sb_2menus'] as $submenu2) {
                    if ($submenu2['id'] == $pg_id) {
                      $submenu_name = $submenu2['name'];
                      break;
                    }
                  }
                  echo $submenu_name;
                ?>
            </span>
            <img src="/source/img/icon-subloca_arrow.png" alt="">
            </button>
            <ul class="sub-location-ul">
              <?php foreach ($menu['sb_2menus'] as $submenu2) { ?>
              <li class="sub-location-li <?php echo $submenu2['id'] == $pg_id ? 'act':'';?>">
                <a href="<?php echo $submenu2['link']; ?>"><?php echo $submenu2['name']; ?></a>
              </li>
              <?php } ?>
            </ul>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php
      break;
    }
  }
} 
?>
