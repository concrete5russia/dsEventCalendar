<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

<label for="calendarID"><?php echo t('Calendar') ?></label>

<div style="margin-top: 15px;">
    <select name="calendarID" id="calendarID">
        <?php foreach ($calendars as $cal): ?>
            <option value="<?php echo $cal['calendarID'] ?>"><?php echo $cal['title'] ?></option>
        <?php endforeach; ?>
    </select>
</div>



<!--<p><input type="radio" name="protocol" value="0" checked /> Use HTTP</p>-->
<!--<p><input type="radio" name="protocol" value="1" /> Use HTTPS</p>-->

<!--<hr />-->

<!--<p>If you are testing the system on an inaccessible website, e.g. secured staging server or a local environment:</p>-->
<!--<input type="checkbox" name="disqus_developer" value="1" /><label for="disqus_developer">Enable Developer Mode</label>-->
