<?php
require 'components.php';
require 'data.php';

render_head("Lugx Gaming - Home");
render_header("home");
?>

<div class="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="caption header-text">
          <h6>Welcome to lugx</h6>
          <h2>BEST GAMING SITE EVER!</h2>
          <p>LUGX Gaming is free Bootstrap 5 HTML CSS website template...</p>
          <div class="search-input">
            <form id="search" action="#">
              <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"/>
              <button role="button">Search Now</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-2">
        <div class="right-image">
          <img src="assets/images/banner-image.jpg" alt="">
          <span class="price">$22</span>
          <span class="offer">-40%</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Features section stays static -->
<div class="features">
  ...
</div>

<!-- Trending Games -->
<div class="section trending">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"><div class="section-heading"><h6>Trending</h6><h2>Trending Games</h2></div></div>
      <div class="col-lg-6"><div class="main-button"><a href="shop.php">View All</a></div></div>
      <?php foreach ($trending_games as $game): ?>
      <div class="col-lg-3 col-md-6">
        <div class="item">
          <div class="thumb">
            <a href="product-details.php"><img src="<?= $game['image'] ?>" alt=""></a>
            <span class="price">
              <?php if (!empty($game['price_old'])): ?><em>$<?= $game['price_old'] ?></em><?php endif; ?>
              $<?= $game['price'] ?>
            </span>
          </div>
          <div class="down-content">
            <span class="category"><?= $game['category'] ?></span>
            <h4><?= $game['title'] ?></h4>
            <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Most Played -->
<div class="section most-played">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"><div class="section-heading"><h6>TOP GAMES</h6><h2>Most Played</h2></div></div>
      <div class="col-lg-6"><div class="main-button"><a href="shop.php">View All</a></div></div>
      <?php foreach ($most_played as $game): ?>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="item">
          <div class="thumb">
            <a href="product-details.php"><img src="<?= $game['image'] ?>" alt=""></a>
          </div>
          <div class="down-content">
            <span class="category"><?= $game['category'] ?></span>
            <h4><?= $game['title'] ?></h4>
            <a href="product-details.php">Explore</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php include 'data.php'; ?>

<!-- Categories Section -->
<div class="section categories">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-heading">
          <h6>Categories</h6>
          <h2>Top Categories</h2>
        </div>
      </div>
      <?php foreach ($categories as $cat): ?>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4><?php echo $cat['title']; ?></h4>
            <div class="thumb">
              <a href="<?php echo $cat['link']; ?>">
                <img src="<?php echo $cat['image']; ?>" alt="">
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- CTA Section -->
<div class="section cta">
  <div class="container">
    <div class="row">
      <!-- Shop -->
      <div class="col-lg-5">
        <div class="shop">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6><?php echo $cta['shop']['title']; ?></h6>
                <h2><?php echo $cta['shop']['subtitle']; ?></h2>
              </div>
              <p><?php echo $cta['shop']['text']; ?></p>
              <div class="main-button">
                <a href="<?php echo $cta['shop']['buttonLink']; ?>">
                  <?php echo $cta['shop']['buttonText']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Subscribe -->
      <div class="col-lg-5 offset-lg-2 align-self-end">
        <div class="subscribe">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6><?php echo $cta['subscribe']['title']; ?></h6>
                <h2><?php echo $cta['subscribe']['subtitle']; ?></h2>
              </div>
              <div class="search-input">
                <form id="subscribe" action="#">
                  <input type="email" class="form-control" placeholder="Your email...">
                  <button type="submit"><?php echo $cta['subscribe']['buttonText']; ?></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php render_footer(); ?>
