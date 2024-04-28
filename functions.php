<?php
include 'variables.php';

// Function to check if a page is active and return corresponding class

function isActive($pageName) {
    // Get the current page URL
    $currentPage = basename($_SERVER['PHP_SELF']);
    
    // Check if the current page URL matches the given page name
    if ($currentPage == $pageName) {
        echo 'active';
    } else {
        echo '';
    }
}

// Function to generate header navigation items dynamically
function headerNavItems($arr){
    foreach($arr as $elem){
        echo '<li class="nav-item '; 
        isActive($elem['href']);
        echo '">
            <a class="nav-link" href=" ' .  $elem['href']  . ' "> ' .  $elem['content']  . ' </a>
        </li>';
    }
}

// Function to generate footer navigation links dynamically
function footerNav($arr){
  for ($i = 0; $i < sizeof($arr); $i++) {
    echo '<a class="';
    isActive($arr[$i]['href']);
    echo '" href="' . $arr[$i]['href'] . '">';
    echo $arr[$i]['content']; 
    echo '</a>';
}
}

// Function to generate latest posts and news dynamically
function latestPostsAndNews($arr){
    $i=0;
    while ($i<sizeof($arr)){
        echo '<div class="post_box">
        <div class="img-box">
          <img src="'. $arr[$i]['img'] .'" alt="">
        </div>
        <p>
        '. $arr[$i]['content'] .'
        </p>
      </div>' ;
      $i++;
     }

}

// Function to generate slider content dynamically
function slider($arr){
    $i=0;
    do {
      echo '<div class="'. $arr[$i]['class'] .'">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                '. $arr[$i]['h1'] .' <br>
                  <span>
                  '. $arr[$i]['span'] .'
                  </span>
                </h1>
                <p>
                '. $arr[$i]['p'] .'
                </p>
                <a href="">
                '. $arr[$i]['a_href'] .'
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="'. $arr[$i]['img'] .'" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>' ;
      $i++;
     } while($i<sizeof($arr));
    }


// Function to generate treatment section dynamically
function treatment($arr){
    foreach($arr as $elem){
        echo 
        '
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="'. $elem['img'] .'" alt="">
            </div>
            <div class="detail-box">
              <h4>
              '. $elem['h4'] .'
              </h4>
              <p>
              '. $elem['p'] .'
              </p>
              <a href="">
              '. $elem['a_href'] .'
              </a>
            </div>
          </div>
        </div>
        ' ;
     }
}

// Function to generate doctor section dynamically
function doctors($arr){
    foreach($arr as $elem){
        echo 
        '
        <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="'. $elem['img'] .'" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                '. $elem['name'] .'
                </h5>
                <h6>
                '. $elem['h6'] .'
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        ' ;
     }
}

// Function to generate testimonial section dynamically
function testimonal($arr){
    foreach($arr as $elem){
        echo 
        '
        <div class="'. $elem['class'] .'">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                  '. $elem['name'] .'
                  </h5>
                  <h6>
                  '. $elem['h6'] .'
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              '. $elem['p'] .'
              </p>
            </div>
          </div>
        ' ;
     }
}
