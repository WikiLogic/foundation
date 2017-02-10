<form role="search" method="get" id="searchform" class="search" action="<?php echo home_url( '/' ); ?>">
    <label class="search__label">
        <span class="search__label-text"><?php _e('Search for:','bonestheme'); ?></span>
        <input type="search" class="search__input" id="s" name="s" value="" placeholder="<?php _e('Search','bonestheme'); ?>" />
    </label>

    <button type="submit" id="searchsubmit" class="search__submit"><?php _e('Search','bonestheme'); ?></button>
</form>