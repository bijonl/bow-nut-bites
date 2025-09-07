<?php 
$display_title = !empty($display_title) ? $display_title : 'h2'; 
$display_title .= ' mb-0'; 
?>


<div class="title-area-content-wrapper text-center">
    <?php if (!empty($section_title)) { ?>
        <div class="title-wrapper">
            <?php 
                // Heading gets an ID so region can be linked to it
                echo pw_seo_heading(
                    $section_title, 
                    $section_title_tag, 
                    $display_title, 
                    [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                ); 
            ?>
        </div>
    <?php } ?>
    <?php if (!empty($section_subtitle)) { ?>
        <div class="subtitle-wrapper wysiwyg">
            <p class="h6"><?php echo $section_subtitle; ?></p>
        </div>
    <?php } ?>
</div>
<?php if (!empty($section_button)) { ?>
    <div class="button-area-wrapper text-center">
        <a 
            href="<?php echo esc_url($section_button['url']); ?>" 
            target="<?php echo esc_attr($section_button['target'] ?: '_self'); ?>" 
            class="pw-solid-button"
            <?php if (!empty($section_button_aria_label) && $section_button_aria_label !== $section_button['title']) { ?>
                aria-label="<?php echo esc_attr($section_button_aria_label); ?>"
            <?php } ?>
        >
            <?php echo esc_html($section_button['title']); ?>
        </a>
    </div>
<?php } ?>

