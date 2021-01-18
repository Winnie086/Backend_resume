<?php include_once "base.php";

/* if(empty($_SESSION['login'])){
    echo "非法入侵";
    exit();
}
 */
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- title上方小圖示 -->
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/4233378c09.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Winnie的後臺履歷</title>
 
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
  <script src="https://kit.fontawesome.com/4233378c09.js" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <link href="./css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)"><i
          class="fas fa-times"></i></a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>

  <div id="main">
    <a title="<?=$Title->find(['sh'=>1])['text'];?>" href="index.php">
      <div class="ti"
        style="background:url(&#39;img/<?=$Title->find(['sh'=>1])['img'];?>&#39;); background-size:cover;"></div>
      <!--標題-->
    </a>
    <div id="ms">
      <div id="lf" style="float:left;">
        <div id="menuput">
          <!--主選單放此-->
          <span class="t botli">後台管理選單</span>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=ad">
            <div class="mainmu">
              個人資料 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=mvim">
            <div class="mainmu">
              學經歷 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
            <div class="mainmu">
              自傳 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
            <div class="mainmu">
              圖片 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
            <div class="mainmu">
              技能表 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
            <div class="mainmu">
              圖片管理 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
            <div class="mainmu">
              頁尾版權資料管理 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
            <div class="mainmu">
              管理者帳號管理 </div>
          </a>

          <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
            <div class="mainmu">
              選單管理 </div>
          </a>




        </div>
        <div style="margin:3px; width:95%; height:20%; line-height:100px;">
          <span class="t">進站總人數 :<?=$Total->find(1)['total'];?> </span>
        </div>
      </div>
      <div class="di"
        style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
        <!--正中央-->
        <table width="100%">
          <tbody>
            <tr>
              <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a
                  href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
              </td>
              <td><button onclick="lo(&#39;api/logout.php&#39;)"
                  style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
            </tr>
          </tbody>
        </table>
        <?php
                
                
                
                $do=(isset($_GET['do']))?$_GET['do']:'title';
                $file="./backend/".$do.".php";
                if(file_exists($file)){
                    include $file;
                }else{
                    include "./backend/title.php";
                }

                
                ?>
      </div>
      <div id="alt"
        style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
      </div>
      <script>
      $(".sswww").hover(
        function() {
          $("#alt").html("" + $(this).children(".all").html() + "").css({
            "top": $(this).offset().top - 50
          })
          $("#alt").show()
        }
      )
      $(".sswww").mouseout(
        function() {
          $("#alt").hide()
        }
      )
      </script>
    </div>
    <div style="clear:both;"></div>
    <div
      style="width:100vw; left:0px; position:relative; background:#173b6c; margin-top:4px; height:123px; display:block;color:#eee">
      <span class="t" style="line-height:123px;">&copy;<?=$Bottom->find(1)['bottom'];?></span>
    </div>
  </div>


  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>