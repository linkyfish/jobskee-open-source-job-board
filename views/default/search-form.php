<!-- search -->
<div class="well">
    <div class="row">
        <div class="col-md-8">
            <form class="form-horizontal" role="form" method="post" action="<?php _e(BASE_URL .'search/'); ?>">
                <input type="text" class="form-control input-lg" name="terms" placeholder="Search for 'PHP', 'ajax', 'HTML'...">
            </form>
        </div>
        <div class="col-md-4">
            <a type="button" class="btn btn-info btn-lg btn-block" href="<?php _e(BASE_URL); ?>jobs/new" <?php if (ALLOW_JOB_POST == INACTIVE) { echo 'disabled'; } ?>>
            POST A JOB  
            </a>
        </div>
    </div>
</div>