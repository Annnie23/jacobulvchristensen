<?php
get_header();
?>

<?php
$kort_tekst_over_kontaktformen = get_field('kort_tekst_over_kontaktformen');
$adresse = get_field('adresse');
$email = get_field('email');
$telefonummer = get_field('telefonnummer');
$cvr = get_field('cvr');
?>

<div class="contact-container">
    <div class="contact-form">
        <h4><?php echo esc_html($kort_tekst_over_kontaktformen); ?></h4>
        <p><?php echo esc_html($adresse); ?></p>
        <p><?php echo esc_html($email); ?></p>
        <p><?php echo esc_html($telefonummer); ?></p>
        <p><?php echo esc_html($cvr); ?></p>
        

        <?php echo do_shortcode('[contact-form-7 id="7a0d828" title="Kontakt JUC"]'); ?>
    </div>

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2262.11846288238!2d8.630329276387767!3d55.46060151446004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b23533512a8f9%3A0x6c8132dac104879f!2sSneumg%C3%A5rdsvej%202%2C%206731%20Tj%C3%A6reborg!5e0!3m2!1sda!2sdk!4v1732438864113!5m2!1sda!2sdk" 
                width="400" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<?php get_footer(); ?>
