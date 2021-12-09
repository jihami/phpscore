<?php
include('./db.php');

$name = '';
$kor = 0;
$eng = 0;
$mat = 0;

$name = $_POST['name'];
$kor = $_POST['kor'];
$eng = $_POST['eng'];
$mat = $_POST['mat'];

if($name != ''){
  $sql = "INSERT INTO score ( name, kor, eng, mat ) values ( '" . $name . "', " . $kor . ", " . $eng . ", " . $mat . " ); ";

  $result = $mysqli->query($sql);
  if(!$result){
    die("쿼리 에러");
  }
}
header('Location: list.php'); //서버에서 저 주소로 넘어감 이전에 출력이 없어야함
exit;
// 자바스크립트로도 페이지 리다이렉트 가능 <script>location.href="list.php"</script>
?>