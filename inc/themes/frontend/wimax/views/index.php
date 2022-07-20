<?php include "top.php" ?>
<?php include "header.php" ?>
<style>
  .heading {

    align-self: flex-end;
    margin-top: 20px;
    padding: 70px 5px;
    width: 100%;
    text-align: center;


  }

  .media img {

    width: 100%;
    height: 15vw;
    object-fit: contain;
  }



  .card-header {
    border-radius: 20px !important;
    background-color: #37c30d;
  }

  .carditem {
    border-radius: 20px;
    padding: 16px;
    text-align: center;
    border: none;
    box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
  }

  .carditem:hover {

    cursor: pointer;
    box-shadow: none;
  }

  .media {

    padding: 20px;
  }

  .col {
    float: left;
    width: 25%;
    padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding */
  .rowcards {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .rowcards:after {
    content: "";
    display: table;
    clear: both;
  }

  .card-body {

    overflow-wrap: break-word;

  }

  /* Responsive columns */
  @media screen and (max-width: 900px) {
    .col {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }

  /* Style the counter cards */
</style>
<section class="hero-barishal welcome_area" id="recent">

  <div class="container h-50">
    <div class="heading">

      <h3>Latest Finds</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($latest as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="home">

  <div class="container h-50">
    <div class="heading">

      <h3>Home</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($items as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>

<section class="hero-barishal welcome_area" id="beauty">

  <div class="container h-50">
    <div class="heading">

      <h3>Beauty</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($beauty as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="tech">

  <div class="container h-50">
    <div class="heading">

      <h3>Tech</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($tech as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="tools">
  <div class="container h-50">
    <div class="heading">

      <h3>Tools and Gadgets</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($tools as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>

<section class="hero-barishal welcome_area" id="pets">

  <div class="container h-50">
    <div class="heading">

      <h3>Pets</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($pets as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="kids">
  <div class="container h-50">
    <div class="heading">

      <h3>Kids/Baby</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($kids as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="outdoors">
  <div class="container h-50">
    <div class="heading">

      <h3>Sports/Outdoors</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($outdoors as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="kitchen">

  <div class="container h-50">
    <div class="heading">

      <h3>Kitchen</h3>
    </div>
    <div class="rowcards">

      <?php foreach ($kitchen as $key => $item) : ?>
        <div class="col">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>


</section>

<?php include "bottom.php" ?>