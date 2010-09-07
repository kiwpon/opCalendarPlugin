<?php slot('form_global_error') ?>
<?php if($form->hasGlobalErrors()): ?>
<?php echo $form->renderGlobalErrors() ?>
<?php endif; ?>
<?php end_slot(); ?>
<?php if (get_slot('form_global_error')): ?>
<?php op_include_parts('alertBox', 'FormGlobalError', array('body' => get_slot('form_global_error'))) ?>
<?php endif; ?>

<div id="formSchedule" class="dparts form"><div class="parts">
<div class="partsHeading"><h3><?php echo $options['title'] ?></h3></div>
<?php echo $form->renderFormTag($options['url']), "\n" ?>
<?php echo $form->renderHiddenFields(), "\n" ?>
<strong>*</strong>は必須項目です。

<?php include_partial('inputScheduleTable', array('form' => $form)) ?>

<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　送　信　" /></li>
</ul>
</div>
</form>

</div><!-- parts -->
</div><!-- dparts -->
