<div class='form-line'>
    <label for='<?php echo($id); ?>'>

        <span class='label text-small'>
            <?php echo($label); if ($required == true) { ?>
                <span class='required'>*</span>
            <?php } ?>
        </span>

        <div class='line-wrapper'>

            <input
                class='input'
                id='<?php echo($id); ?>'
                type='<?php echo($type); ?>'
                placeholder='<?php echo($placeholder); ?>'
                name='<?php echo($name); ?>'
                <?php if ($required == true) { ?>
                    required
                <?php } ?>
            />

        </div>

    </label>
</div>