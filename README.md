## Gutenberg Blocks

All custom gutenberg blocks are registred in `acf_register_block.php` file in located in `<theme_path>/includes/acf_register_block.php`

example:
```bash
// define custom gutenberg blocks
add_action('acf/init', 'acf_blocks_init');
function acf_blocks_init() {
  require get_template_directory() . '/includes/blocks/block-standard-text/register_block.php';
}
```

In the location `/includes/blocks` we create a folder containing the established file structure

```bash
blocks/
|-- block-name-of-block/
|   |-- block.php               // block content
|   |-- register_block.php      // block definition
|   |-- _style.scss             // block styles
|   |-- scripts.js              // block scripts
|
```

Example for `register_block.php` (with preview image for admin):

```bash
<?php
acf_register_block_type(
    array(
        'name'				=> 'block-standard-text',
        'title'				=> __('Standard text', 'theme-domain'),
        'description'		=> __('Standard text', 'theme-domain'),
        'render_template'   => dirname(__FILE__) . '/block.php',
        'category'			=> 'layout',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'text', 'standard' ),
        'mode'				=> 'edit',
        'example'  => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_help'   => get_template_directory_uri()  . "/includes/blocks/block-standard-text/img.png",
                )
            )
        )
    )
);
```

Example for `block.php` (with preview image for admin):

```bash
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
```
All fields uses in block need be definited in ACF plugin