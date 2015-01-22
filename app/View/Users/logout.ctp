<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Vous êtes déconnecté'); ?>
        </legend>
    </fieldset>
<?php echo $this->Form->end(__('Logout')); ?>
</div>