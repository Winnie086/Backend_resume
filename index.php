<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Winnie's Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- title上方小圖示 -->
  <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/4233378c09.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >

  <!--CSS File -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->

    <div class="pos-f-t mobile-nav-toggle">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">

          <nav class="nav-menu">
            <ul>
              <li class="active"><a href="index.php"><i class="bx bx-home"></i><span>Home</span></a></li>
              <li><a href="#about"><i class="fas fa-address-book"></i> <span>About</span></a></li>
              <li><a href="#experience"><i class="bx bx-user"></i> <span>Experience</span></a></li>
              <li><a href="#skills"> <i class="fas fa-award"></i><span>Skills</span></a></li>
              <li><a href="#portfolio"> <i class="fas fa-spinner"></i><span>Portfolio</span></a></li>
            </ul>
          </nav>

        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark p-0">
        <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
    

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <h1><a href="index.php">Wu Yi-Ning</a></h1>
      </div>

     
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i><span>Home</span></a></li>
          <li><a href="#about"><i class="far fa-address-card"></i> <span>About</span></a></li>
          <li><a href="#experience"><i class="bx bx-user"></i> <span>Experience</span></a></li>
          <li><a href="#skills"> <i class="fas fa-award"></i><span>Skills</span></a></li>
          <li><a href="#portfolio"> <i class="fas fa-spinner"></i><span>Portfolio</span></a></li>
        </ul>
      </nav>

    </div>
  </header>



  <main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="hero-container row">
        <div class="col-sm-4 col-md-12">
          <h1>Wu Yi-Ning</h1>
          <p>On my way to be<br>

            <svg id="logo" width="660" height="110" viewBox="0 0 660 110" fill="none"
              xmlns="http://www.w3.org/2000/svg">

              <path
                d="M34.336 4.632C45.28 4.632 54.736 6.696 62.704 10.824C70.768 14.856 76.912 20.664 81.136 28.248C85.456 35.832 87.616 44.76 87.616 55.032C87.616 65.304 85.456 74.232 81.136 81.816C76.912 89.304 70.768 95.064 62.704 99.096C54.736 103.032 45.28 105 34.336 105H3.08801V4.632H34.336ZM34.336 94.2C47.296 94.2 57.184 90.792 64 83.976C70.816 77.064 74.224 67.416 74.224 55.032C74.224 42.552 70.768 32.808 63.856 25.8C57.04 18.792 47.2 15.288 34.336 15.288H16.192V94.2H34.336Z"
                stroke="white" stroke-width="3" />

              <path
                d="M118.005 15.288V48.84H154.581V59.64H118.005V94.2H158.901V105H104.901V4.488H158.901V15.288H118.005Z"
                stroke="white" stroke-width="3" />

              <path
                d="M210.553 106.008C203.929 106.008 197.977 104.856 192.697 102.552C187.513 100.152 183.433 96.888 180.457 92.76C177.481 88.536 175.945 83.688 175.849 78.216H189.817C190.297 82.92 192.217 86.904 195.577 90.168C199.033 93.336 204.025 94.92 210.553 94.92C216.793 94.92 221.689 93.384 225.241 90.312C228.889 87.144 230.713 83.112 230.713 78.216C230.713 74.376 229.657 71.256 227.545 68.856C225.433 66.456 222.793 64.632 219.625 63.384C216.457 62.136 212.185 60.792 206.809 59.352C200.185 57.624 194.857 55.896 190.825 54.168C186.889 52.44 183.481 49.752 180.601 46.104C177.817 42.36 176.425 37.368 176.425 31.128C176.425 25.656 177.817 20.808 180.601 16.584C183.385 12.36 187.273 9.09599 192.265 6.792C197.353 4.488 203.161 3.336 209.689 3.336C219.097 3.336 226.777 5.688 232.729 10.392C238.777 15.096 242.185 21.336 242.953 29.112H228.553C228.073 25.272 226.057 21.912 222.505 19.032C218.953 16.056 214.249 14.568 208.393 14.568C202.921 14.568 198.457 16.008 195.001 18.888C191.545 21.672 189.817 25.608 189.817 30.696C189.817 34.344 190.825 37.32 192.841 39.624C194.953 41.928 197.497 43.704 200.473 44.952C203.545 46.104 207.817 47.448 213.289 48.984C219.913 50.808 225.241 52.632 229.273 54.456C233.305 56.184 236.761 58.92 239.641 62.664C242.521 66.312 243.961 71.304 243.961 77.64C243.961 82.536 242.665 87.144 240.073 91.464C237.481 95.784 233.641 99.288 228.553 101.976C223.465 104.664 217.465 106.008 210.553 106.008Z"
                stroke="white" stroke-width="3" />

              <path d="M276.348 4.632V105H263.244V4.632H276.348Z" stroke="white" stroke-width="3" />

              <path
                d="M374.714 33.72C371.93 27.864 367.898 23.352 362.618 20.184C357.338 16.92 351.194 15.288 344.186 15.288C337.178 15.288 330.842 16.92 325.178 20.184C319.61 23.352 315.194 27.96 311.93 34.008C308.762 39.96 307.178 46.872 307.178 54.744C307.178 62.616 308.762 69.528 311.93 75.48C315.194 81.432 319.61 86.04 325.178 89.304C330.842 92.472 337.178 94.056 344.186 94.056C353.978 94.056 362.042 91.128 368.378 85.272C374.714 79.416 378.41 71.496 379.466 61.512H339.434V50.856H393.434V60.936C392.666 69.192 390.074 76.776 385.658 83.688C381.242 90.504 375.434 95.928 368.234 99.96C361.034 103.896 353.018 105.864 344.186 105.864C334.874 105.864 326.378 103.704 318.698 99.384C311.018 94.968 304.922 88.872 300.41 81.096C295.994 73.32 293.786 64.536 293.786 54.744C293.786 44.952 295.994 36.168 300.41 28.392C304.922 20.52 311.018 14.424 318.698 10.104C326.378 5.688 334.874 3.48 344.186 3.48C354.842 3.48 364.25 6.12 372.41 11.4C380.666 16.68 386.666 24.12 390.41 33.72H374.714Z"
                stroke="white" stroke-width="3" />

              <path d="M489.672 105H476.568L423.864 25.08V105H410.76V4.488H423.864L476.568 84.264V4.488H489.672V105Z"
                stroke="white" stroke-width="3" />

              <path d="M525.114 15.288V48.84H561.69V59.64H525.114V94.2H566.01V105H512.01V4.488H566.01V15.288H525.114Z"
                stroke="white" stroke-width="3" />

              <path
                d="M638.686 105L614.782 63.96H598.942V105H585.838V4.632H618.238C625.822 4.632 632.206 5.928 637.39 8.52C642.67 11.112 646.606 14.616 649.198 19.032C651.79 23.448 653.086 28.488 653.086 34.152C653.086 41.064 651.07 47.16 647.038 52.44C643.102 57.72 637.15 61.224 629.182 62.952L654.382 105H638.686ZM598.942 53.448H618.238C625.342 53.448 630.67 51.72 634.222 48.264C637.774 44.712 639.55 40.008 639.55 34.152C639.55 28.2 637.774 23.592 634.222 20.328C630.766 17.064 625.438 15.432 618.238 15.432H598.942V53.448Z"
                stroke="white" stroke-width="3" />

            </svg>
        </div>

        <script>
          const logo = document.querySelectorAll('#logo path')
          console.log(logo);
          for (let i = 0; i < logo.length; i++) {
            console.log(`Letter ${i} is ${logo[i].getTotalLength}`);
          }
        </script>

      </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About || 關於我</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="flip-down">

          <?php
          $title=$Title->find(['sh'=>1]);
          ?>
          <img src="./img/<?=$Title->find(['sh'=>1])['img'];?>" title="<?=$Title->find(['sh'=>1])['text'];?>" alt="<?=$Title->find(['sh'=>1])['text'];?>" class="img-fluid" width="200" height="150">
            <!-- <img src="image/profile-img.jpg" class="img-fluid" alt="profile-img" width="200"> -->

          </div>

          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <p>
              我是吳翊寧，畢業於國立高雄科大的應用德語系。在泰山職訓中心學習網頁設計，目標為轉職成UI介面設計師！
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>生日：</strong>1997/01/08</li>
                  <li><i class="icofont-rounded-right"></i> <strong>故鄉：</strong>新竹</li>
                  <li><i class="icofont-rounded-right"></i> <strong>年齡：</strong>23</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>畢業學校：</strong><br>國立高雄科技大學</li>
                  <li><i class="icofont-rounded-right"></i> <strong>科系：</strong><br>應用德語系</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email：</strong>0433034@nkust.edu.tw</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Experience Section ======= -->
    <section id="experience" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Experience || 學經歷</h2>
        </div>


        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">

            <h4 class="resume-title">經歷</h4>
            <div class=" timeline px-4 py-4">
              <div class="resume-item">
                <h5>2020/09-2021/03</h5>
                <h5>泰山職訓局-PHP資料庫網頁設計</h5>
                <ul>
                  <li>HTML5、CSS</li>
                  <li>JavaScript、jQuery</li>
                  <li>PHP資料庫</li>
                </ul>
              </div>

              <div class="resume-item .timeline::after">
                <h5>2019/08-2020/05</h5>
                <h5>產品助理-特耐第國際有限公司</h5>
                <p>職務內容</p>
                <ul>
                  <li>產品資訊查詢、彙整、產出</li>
                  <li>成品品質確認</li>
                  <li>每月新品上線作業</li>
                  <li>樣品管理、記錄</li>
                  <li>產品目錄製作</li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h4 class="resume-title">學歷</h4>
            <div class="timeline_02 px-4 py-4">
              <div class="resume-item">
                <h5>2015-2019</h5>
                <h5>應用德語系-國立高科大</h5>
                <ul>
                  <li>通過德語檢定B1(聽說讀寫)</li>
                  <li>2017年獲得系上遴選至德國波昂留學一學期</li>
                  <li>曾獨自旅行至英國、荷蘭，解決交通訂房等問題</li>
                  <li>通過證書Microsoft Office Specialist Master(Word,Excel,PPT,Access資料庫)</li>
                </ul>

                <div class="resume-item .timeline_02::after">
                  <h5>2013-2015</h5>
                  <h5>應用英語系-新竹市私立曙光女中</h5>
                  <ul>
                    <li>通過英文檢定中級(聽說讀寫)</li>
                    <li>聯合盃作文初賽-佳作</li>
                  </ul>
                </div>


              </div>
            </div>
          </div>

        </div>
    </section>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Skills || 技能專長</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            HTML : 75%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:75%"></div>
            </div>
            <br>
            CSS : 75%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:75%"></div>
            </div>
            <br>
            JavaScript : 70%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width: 70%"></div>
            </div>
            <br>
            TOEIC : 620<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width: 63%"></div>
            </div>
            <br>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            PHP : 70%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:70%"></div>
            </div>
            <br>
            Photoshop : 80%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:80%"></div>
            </div>
            <br>
            AI : 80%<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:80%"></div>
            </div>
            <br>
            德檢B1(聽說讀寫-通過)<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                style="width:100%"></div>
            </div>
            <br>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio || 作品集</h2>
        </div>


        <div class="accordion accordion-flush" id="accordionFlushExample">

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                PHP
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">


        <div class="accordion" id="accordionExample" data-aos="fade-up">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  PHP
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">

                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
  
  
                
              </div>
            </div>
          </div>
  
  
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  JS
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
  
  
              </div>
            </div>
          </div>
  
  
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  PS
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
  
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://picsum.photos/200/150/?random=1" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                      </div>
                      <div class="card-footer">
                        <div class="card-body">
                          <a href="#" class="card-link">link</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
  
  
  
              </div>
            </div>
          </div>
        </div>


      </div>


    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="container">
      
      <div class="github_icon">
        <a href="https://github.com/Winnie086?tab=repositories"><i class="fab fa-github fa-2x"></i></a>
        <a href="login.php" title="Login"><i class="fas fa-sign-in-alt fa-2x"></i><span></span></a>
      </div>
      
      <div class="copyright">
        &copy;<?=$Bottom->find(1)['bottom'];?>
      </div>

    </div>



  </footer>



  <!-- data-aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>

</body>

</html>