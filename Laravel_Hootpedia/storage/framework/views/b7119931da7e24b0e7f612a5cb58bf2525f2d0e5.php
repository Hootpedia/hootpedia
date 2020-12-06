<div class="text-center">
    <!--Article Example-->
    <h1 class="pt-5">Articles/Discussions</h1>
    <div class="d-inline">
        <p>Article blocks go here.</p>

        <!-- Cards for user Discussions -->
        
        <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mx-auto d-flex justify-content-center shadow" style="width: 60%; min-width:25rem;">
                <h2 class="border border-top-0 border-left-0 border-right-0 py-2">Topic</h2>
                <div class="card-body row text-left">
                    <div class="col-3 text-center p-1">
                        <img class="img-fluid border rounded-circle"
                             src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                             style="max-width:100px; height:auto;">
                    </div>
                    <div class="col-9">
                        <h5 class="card-title"><?php echo e($entry->title); ?></h5>
                        <p class="small text-secondary"><?php echo e($entry->title); ?></p>
                        <p class="card-text"><?php echo e($entry->body); ?></p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/articles/results.blade.php ENDPATH**/ ?>