<banner class='page-banner'>
  <div class="wrapper">
    <h1 class="page-banner__title">
      <?php if (isset($page_banner_title)) {
        echo $page_banner_title;
      } else {
        echo the_title();
      }
      wp_reset_query();
      ?>
    </h1>
    <span class="page-banner__updated">
      Updated <?php the_modified_date(); ?>
    </span>
  </div>
</banner>
