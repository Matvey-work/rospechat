<?php
/**
 * Template Name: pop-questions
 */

$custom_fields = get_post_meta(289);


// get_template_part($path);

// echo "<pre>",var_dump($custom_fields),"</pre>";
?>




<section class="popular-questions">
        <div class="container">
          <h2 class="popular-questions__title">

          <?= $custom_fields["pop_questions_title"][0]; ?>

          </h2>

          <p class="popular-questions__text">

          <?= $custom_fields["pop_questions_sub_title"][0]; ?>

          </p>

          <ul class="popular-questions__list">

          <?php for($i = 0; $i < $custom_fields["questions_answers"][0]; $i++): ?>

            <li class="popular-questions__item"><span>
            <?= $custom_fields["questions_answers_". $i ."_question"][0]; ?>
            </span></li>

            <li class="popular-questions__item-hidden">
            <?= $custom_fields["questions_answers_". $i ."_answer"][0]; ?>
            </li>

          <?php endfor; ?>
            
          </ul>
        </div>
      </section>
