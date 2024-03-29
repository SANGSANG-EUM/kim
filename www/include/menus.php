<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'product',
    'name' => 'Product',
    'link' => '/sub/product',
    'sb_2menus' => [
      [
        'id' => 'prd_roller',
        'name' => '롤러스크류',
        'link' => '/sub/product1'
      ],
      [
        'id' => 'prd_ball',
        'name' => '볼스크류',
        'link' => '/sub/product2',
      ],
      [
        'id' => 'prd_gear',
        'name' => '기어박스',
        'link' => '/sub/product3'
      ],
      [
        'id' => 'prd_rotary',
        'name' => '회전형 액츄에이터',
        'link' => '/sub/product4'
      ],
      [
        'id' => 'prd_linear',
        'name' => '선형 액츄에이터',
        'link' => '/sub/product5'
      ]
    ]
  ],
  [
    'id' => 'industry',
    'name' => 'Industry',
    'link' => '/sub/defense1',
    'sb_2menus' => [
      [
        'id' => 'ind_defense',
        'name' => '방위산업',
        'link' => '/sub/defense1'
      ],
      [
        'id' => 'ind_general',
        'name' => '일반산업',
        'link' => '/sub/general1'
      ],
      [
        'id' => 'ind_rnd',
        'name' => '연구개발',
        'link' => '/sub/rnd'
      ]
    ]
  ],
  [
    'id' => 'aboutus',
    'name' => 'About us',
    'link' => '/sub/company',
    'sb_2menus' => [
      [
        'id' => 'abt_company',
        'name' => '회사소개',
        'link' => '/sub/company'
      ],
      [
        'id' => 'abt_history',
        'name' => '연혁',
        'link' => '/sub/history'
      ],
      [
        'id' => 'abt_management',
        'name' => '지속가능경영',
        'link' => '/sub/management1'
      ],
      [
        'id' => 'abt_workplace',
        'name' => '사업장',
        'link' => '/sub/place'
      ]
    ]
  ],
  [
    'id' => 'capabilities',
    'name' => 'Capabilities',
    'link' => '/sub/field',
    'sb_2menus' => [
      [
        'id' => 'cap_field',
        'name' => '연구분야',
        'link' => '/sub/field'
      ],
      [
        'id' => 'cap_research',
        'name' => '연구실적',
        'link' => '/research_kr'
      ],
      [
        'id' => 'cap_test',
        'name' => '시험평가능력',
        'link' => '/test_kr'
      ],
      [
        'id' => 'cap_system',
        'name' => '품질경영시스템',
        'link' => '/sub/system'
      ],
      [
        'id' => 'cap_equipment',
        'name' => '주요장비',
        'link' => '/equipment_kr'
      ]
    ]
  ],
  [
    'id' => 'news',
    'name' => 'News',
    'link' => '/news_kr',
    'sb_2menus' => [
      [
        'id' => 'news_news',
        'name' => '뉴스',
        'link' => '/news_kr'
      ],
      [
        'id' => 'news_video',
        'name' => '홍보동영상',
        'link' => '/sub/video'
      ]
    ]
  ],
  [
    'id' => 'service',
    'name' => 'Service',
    'link' => '/notice_kr',
    'sb_2menus' => [
      [
        'id' => 'svc_notice',
        'name' => '공지사항',
        'link' => '/notice_kr'
      ],
      [
        'id' => 'svc_data',
        'name' => '기술자료',
        'link' => '/data_kr'
      ],
      [
        'id' => 'svc_faq',
        'name' => 'FAQ',
        'link' => '/faq_kr'
      ],
      [
        'id' => 'svc_contact',
        'name' => '문의사항',
        'link' => '/sub/contact'
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>