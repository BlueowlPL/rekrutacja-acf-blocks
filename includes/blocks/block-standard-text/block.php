<?php
/**
 * @var array $block
 */

$id = 'blockStandardText-' . $block['id'];
$block_standard_text = get_field('block-standard-text');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else : ?>
    <section class="section blockStandardText" id="<?= $id; ?>">
        <div class="wrapper">
            <?=$block_standard_text['wysiwyg'];?>
        </div>
    </section>
<?php endif; ?>