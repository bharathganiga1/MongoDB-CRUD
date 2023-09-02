
<?php echo form_open('Users/create'); ?>

    <div class="form-group">

        <div class="form-element">
            <label>NAME:</label>
            <input type="text" placeholder="Enter Your Name" name="user_name">
            <h3 class="error-message"><?php echo form_error('user_name'); ?></h3>
        </div>

        <div class="form-element">
            <label>Email:</label>
            <input type="email" placeholder="Enter Your Email" name="user_email">
            <h3 class="error-message"><?php echo form_error('user_email'); ?></h3>
        </div>

        <div class="form-element">
            <input class="btn-submit" type="submit" >
        </div>

    </div>

<?php echo form_close(); ?>