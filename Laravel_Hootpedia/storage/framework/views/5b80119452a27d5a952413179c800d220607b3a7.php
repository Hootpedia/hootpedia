<html lang="en">
<head>
    <style>
        .card p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
			max-height: 300px;
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
    <div class="row" style="min-height:100%;">
		<div class="col-md-12">
			<?php echo $__env->make('includes.frontpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

       

    </div>

</div>

<!-- Footer -->


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/home.blade.php ENDPATH**/ ?>