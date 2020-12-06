<html lang="en">
<head>
    <style>
        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
        }
    </style>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    
</head>

<body>
<!-- Navigation-->
<?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<div class="container-fluid">
    <!-- Testing Positioning for sidebar content-->
    <div class="row" style="height:100%;">
        <div class="col-md-9">

                <div class="card mx-auto d-flex justify-content-center shadow" style="width: 60%; min-width:25rem;">
                    <h2 class="border border-top-0 border-left-0 border-right-0 py-2"><?php echo e($article->tag); ?></h2>
                    <div class="card-body row text-left">
                        <div class="col-3 text-center p-1">
                            <img class="img-fluid border rounded-circle"
                                 src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                                 style="max-width:100px; height:auto;">
                        </div>
                        <div class="col-9">
                            <h5 class="card-title"><?php echo e($article->title); ?></h5>
                            <p class="small text-secondary"><?php echo e($article->content); ?></p>
                        </div>
                    </div>
                </div>
        </div>

    

    <!-- Responsive Sidebar, Defaults to bottom on Small Screens -->
        
    </div>

</div>

<!-- Footer -->


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/articles/show.blade.php ENDPATH**/ ?>