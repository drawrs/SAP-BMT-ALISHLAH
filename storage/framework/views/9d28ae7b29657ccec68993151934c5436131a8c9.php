<?php if(Session::has('msg')): ?>
    <div class="alert alert-<?php echo e(Session::get('type')); ?>"><?php echo e(Session::get('msg')); ?></div>
<?php endif; ?>