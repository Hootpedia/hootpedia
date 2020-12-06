<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>


<div class="container">

    <form action="/search" method="GET" role="search">
        <?php echo csrf_field(); ?>
        <div class="input-group">
            <input type="text" class="form-control" name="q" placeholder="Search">
            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
        </div>
    </form>
    <div>
        <?php if(isset($details)): ?>
            <p> The Search results for your query <b> <?php echo e($query); ?> </b> are :</p>
            <h2>Sample User details</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($article->title); ?></td>
                        <td><?php echo e($user->body); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>


<script type="text/javascript">
    var path = "<?php echo e(route('autocomplete')); ?>";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

</body>
</html>
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/search.blade.php ENDPATH**/ ?>