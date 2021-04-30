<?php
/**
 * Template Name: Services page
 */


$custom_fields = get_post_meta($post->ID);
$resultArr = [];

for ($i = 0; $i < $custom_fields["uslugi_block"][0]; $i++) {
  $img_id = $custom_fields["uslugi_block_" . $i . "_img"][0];

  $resultArr[] = [
    'title' => $custom_fields["uslugi_block_" . $i . "_title"][0],
    'desc' => $custom_fields["uslugi_block_" . $i . "_desc"][0],
    'link' => unserialize($custom_fields["uslugi_block_" . $i . "_link"][0])["url"],
    'img' => wp_get_attachment_url($img_id),
    'img_pos' => $custom_fields["uslugi_block_" . $i . "_polozhenie_kartinki"][0],
  ];
}

// echo "<pre>",var_dump(($custom_fields["uslugi_block_4_link"][0])),"</pre>";
?>

<?php get_header(); ?>




<?php foreach($resultArr as $block): ?>

      <section class="drawing block-<?= $block['img_pos']; ?>" style="background-image: url(<?= $block['img'] ?>);">
        <div class="drawing__container container">
          <div class="drawing__block">
            <h2 class="drawing__title drawing__title"><?= $block['title'] ?></h2>
            <p class="drawing__text">
              <?= $block['desc'] ?>
            </p>
            <a href="<?= $block['link'] ?>" class="services-more-btn">Перейти</a>
          </div>
        </div>
      </section>
<?php endforeach; ?>


<?php get_footer(); ?>
