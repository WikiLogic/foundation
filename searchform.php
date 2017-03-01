<?php require('php-helpers/svg-icons.php'); ?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <label class="searchform__label">
        <!-- <span class="searchform__label-text"><?php _e('Search for:','bonestheme'); ?></span> -->
        <input type="search" class="searchform__input" id="s" name="s" value="" placeholder="<?php _e('Search','bonestheme'); ?>" />
    </label>

    <button type="submit" id="searchsubmit" class="searchform__submit"><?php print $SvgIcons->search(); ?></button>
</form>