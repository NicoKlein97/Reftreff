<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/schwimmen.jpg") ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h2 class="headline headline--medium"><strong>JETZT</strong> aktiv</h2>
      <h2 class="headline headline--medium">werden und neue</h2>
      <h2 class="headline headline--medium">Leute treffen!</h2>
    </div>
</div>

<div class ="filler">
<p class="Filter_Area_Headline">Referate</p>
  <div class= "filter_sign_area" >
   <i class="fa fa-filter" id="filterBtn"></i>
   <p class="filter_Name">Filter</p>
  </div>
</div>

<div class = "filter_area" id="filter_area" hidden>
  <?php
    get_Filters();
  ?>
</div>

<div class = "aktivity_area">
  <div class="test">
    <?php
    get_activities("main");
    ?>
  </div>
</div>

<div class="call_to_action_area">
  <div class="call_to_action_text">
    <h1>Nichts Dabei?</h1>
    <p>Du hast dein Referat noch nicht gefunden und denkst das etwas fehlt? Dann gründe doch einfach ein neues Referat! Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
    <a href="mailto:asta-fuwa@hs-furtwangen.de"><button class="cta-button">Kontakt aufnehmen</button></a>
  </div>
    <div class="call_to_action_button">
  </div>
</div>

<div class="timetable_area">
    <h3 class="singlePageHeadlines">WOCHENKALENDER</h3>
    <div class="timetable">
    <?php createTimetable() ?>
    </div>
</div>

<?php
get_footer();
?>

