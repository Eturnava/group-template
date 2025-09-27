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
