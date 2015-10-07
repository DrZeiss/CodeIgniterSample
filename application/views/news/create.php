<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <p>
        <label for="title">News Title</label>
        <input type="input" name="title" value="<?php echo set_value('title'); ?>"/>
    </p>

    <p>
        <label for="text">News Content</label>
        <textarea name="text" ><?php echo set_value('text'); ?></textarea>
    </p>
    
    <input type="submit" name="submit" value="Create news item" />

</form>