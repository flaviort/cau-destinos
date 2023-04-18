<div class="form-line">
    <label for="<?php echo($id); ?>" class="wow fadeInUp">

        <span class="label text-small">
            <?php echo($label); if ($required == true) { ?>
                <span class="required">*</span>
            <?php } ?>
        </span>

        <div class="line-wrapper">

            <select
                class="input select"
                id="<?php echo($id); ?>"
                name="<?php echo($name); ?>"
                <?php if ($required == true) { ?>
                    required
                <?php } ?>
            >
                    <option value="" selected disabled><?php echo($placeholder); ?></option>
                    <?php foreach ($options as $option) { ?>
                        <option value="<?php echo($option); ?>"><?php echo($option); ?></option>
                    <?php } ?>
            </select>

            <?php echo file_get_contents("assets/svg/angle-down.svg"); ?>

        </div>

    </label>
</div>