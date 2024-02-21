<?php
if (!defined('_GNUBOARD_')) {
  exit;
}
// 개별 페이지 접근 불가;

// https redirect
// if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
//   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//   header('HTTP/1.1 301 Moved Permanently'); header('Location: ' . $redirect);
// }

if ($member['mb_id'] == "iium") {
  $is_admin = "super";
}

// 파일 업로드
function img_upload($srcfile, $filename, $dir, $data_table, $idx, $f_idx) {
  global $_FILES;

  $file_info                = array();
  $file_info['origin_name'] = $filename;

  if ($filename == '') {
    return '';
  }

  //php파일도 getimagesize 에서 Image Type Flag 를 속일수 있다
  if (preg_match('/\.(gif|jpe?g|png)$/i', $filename)) {
    $size = @getimagesize($srcfile);
    if ($size[2] < 1 || $size[2] > 3) {
      return '';
    }
  }

  if (!is_dir($dir)) {
    @mkdir($dir, G5_DIR_PERMISSION);
    @chmod($dir, G5_DIR_PERMISSION);
  }

  $pattern = "/[#\&\+\-%@=\/\\:;,'\"\^`~\|\!\?\*\$#<>\(\)\[\]\{\}]/";

  $filename = preg_replace("/\s+/", "", $filename);
  $filename = preg_replace($pattern, "", $filename);

  $filename = preg_replace_callback("/[가-힣]+/", '_callback_img_upload', $filename);

  $filename = preg_replace($pattern, "", $filename);
  $prepend  = '';

  // 동일한 이름의 파일이 있으면 파일명 변경
  if (is_file($dir . '/' . $filename)) {
    for ($i = 0; $i < 20; $i++) {
      $prepend = str_replace('.', '_', microtime(true)) . '_';

      if (is_file($dir . '/' . $prepend . $filename)) {
        usleep(mt_rand(100, 10000));
        continue;
      } else {
        break;
      }
    }
  }

  $filename = $prepend . $filename;

  upload_file($srcfile, $filename, $dir);

  $file_info['file_name'] = $filename;

  $sql = "INSERT INTO {$data_table} set
            in_idx = '{$idx}'
            ,in_no = '{$f_idx}'
            ,origin_name = '{$file_info['origin_name']}'
            ,file_name = '{$file_info['file_name']}'
            ,wdate = '" . G5_TIME_YMDHIS . "' ";
  sql_query($sql);

  return $file_info['origin_name'];
}

function _callback_img_upload($matches) {
  return isset($matches[0]) ? base64_encode($matches[0]) : '';
}

// 라우팅 하기 위해 추가
class Route {
  private $config;
  private $g5;
  private $mb;
  private $member;

  function __construct($member, $g5, $config, $mb) {
    $this->member = $member;
    $this->g5     = $g5;
    $this->config = $config;
    $this->mb     = $mb;
  }

  function add($route, $file) {
    $params   = [];
    $paramKey = [];
    preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);
    if (empty($paramMatches[0])) {
      $this->simpleRoute($file, $route);

      return;
    }
    foreach ($paramMatches[0] as $key) {
      $paramKey[] = $key;
    }
    if (!empty($_REQUEST['uri'])) {
      $route  = preg_replace("/(^\/)|(\/$)/", "", $route);
      $reqUri = preg_replace("/(^\/)|(\/$)/", "", $_REQUEST['uri']);
    } else {
      $reqUri = "/";
    }
    $uri      = explode("/", $route);
    $indexNum = [];
    foreach ($uri as $index => $param) {
      if (preg_match("/{.*}/", $param)) {
        $indexNum[] = $index;
      }
    }
    $reqUri = explode("/", $reqUri);
    foreach ($indexNum as $key => $index) {
      if (empty($reqUri[$index])) {
        return;
      }
      $params[$paramKey[$key]] = $reqUri[$index];
      $reqUri[$index]          = "{.*}";
    }
    $reqUri = implode("/", $reqUri);
    $reqUri = str_replace("/", '\\/', $reqUri);
    if (preg_match("/$reqUri/", $route)) {
      $g5     = $this->g5;
      $config = $this->config;
      $mb     = $this->mb;
      $member = $this->member;
      include $file;
    }
  }

  function notFound($file) {
    $g5     = $this->g5;
    $config = $this->config;
    $mb     = $this->mb;
    $member = $this->member;
    include $file;
  }

  private function simpleRoute($file, $route) {
    if (!empty($_REQUEST['uri'])) {
      $route  = preg_replace("/(^\/)|(\/$)/", "", $route);
      $reqUri = preg_replace("/(^\/)|(\/$)/", "", $_REQUEST['uri']);
    } else {
      $reqUri = "/";
    }
    if ($reqUri == $route) {
      $params = [];
      $g5     = $this->g5;
      $config = $this->config;
      $mb     = $this->mb;
      $member = $this->member;
      include $file;
    }
  }
}

class CallApi {

  private $apiKey;

  function __construct() {
    $this->apiKey = "xyZQdLZYne+3MG+siQzHpzGiqrjNQP6MfuTnwbuaNmEiIkEw2UWWcFzdBJnqtrLPxJcZMWTmghiTMwT4lxRxeA==";
  }

  public function getApi($url, $params) {
    $params['serviceKey'] = $this->apiKey;
    $queryParams          = http_build_query($params);
    $ch                   = curl_init();

    curl_setopt_array($ch, [
      CURLOPT_URL            => $url . '?' . $queryParams,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER         => false,
      CURLOPT_CUSTOMREQUEST  => 'GET',
    ]);

    return $ch;
  }
  // public function postApi($url, $body, $method) {

  // }
  public function runApi($method, $url, $params) {
    if ($method == "GET") {
      $run = $this->getApi($url, $params);

      $maxWaitTime = 30;
      $startTime   = time();

      do {
        $res  = curl_exec($run);
        $err  = curl_error($run);
        $info = curl_getinfo($run);

        // API 호출이 완료되었거나 오류가 발생하면 루프 종료
        if ($res !== false || $info['http_code'] != 0) {
          break;
        }

        sleep(1); // 1초 대기
      } while (time() - $startTime < $maxWaitTime);

      if ($err) {
        $res = $err;
      }

      // 여기서 $response로 API 호출이 완료된 결과를 얻을 수 있습니다.

      curl_close($run);

      return $res;
    }
  }
}

class Common_Model {
  public function set($db_input) {
    $set = "";
    end($db_input);
    $last_key = key($db_input);

    foreach ($db_input as $k => $v) {
      $v = str_replace('"', "'", $v);
      if ($k == $last_key) {
        $set .= $k . '= "' . $v . '"';
      } else {
        $set .= $k . '= "' . $v . '",';
      }
    }

    return $set;
  }
}

class IUD_Model extends Common_Model {
  public static function delete($table, $where) {
    $sql = "DELETE FROM {$table} {$where}";
    sql_query($sql, true);

    return $sql;
  }

  public static function insert($table, $db_input) {

    $common_model = new Common_Model();
    $set          = $common_model->set($db_input);

    $sql = "INSERT INTO {$table} SET {$set}";
    sql_query($sql, true);

    $idx = sql_insert_id();

    return $idx;
  }

  public static function update($table, $db_input, $where) {

    $common_model = new Common_Model();
    $set          = $common_model->set($db_input);

    $sql = "UPDATE {$table} SET {$set} {$where}";
    sql_query($sql, true);

  }
}

function log_write($str) {
  $log_dir = $_SERVER["DOCUMENT_ROOT"] . '/data/log';
  if (!is_dir($log_dir)) {
    mkdir($log_dir, 0777, true);
    chmod($log_dir, 0777);
  }

  $log_txt = '[' . date("Y-m-d H:i:s") . '] ';
  $log_txt .= $str;

  $file_name = date('Ymd') . ".txt";
  $log_file  = fopen($log_dir . "/" . $file_name, "a");
  fwrite($log_file, $log_txt . "\r\n");
  fclose($log_file);

  //생성 한지 7일 지난 파일 삭제
  // system("find " . $log_dir . " -name '*.txt' -type f -ctime 6 -exec rm -f {} \;");
}