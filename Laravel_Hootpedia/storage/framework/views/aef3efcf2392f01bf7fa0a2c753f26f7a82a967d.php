
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm px-5">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <div class="d-flex">
            <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                 width="100">
            <h2 class="pl-3 pt-4" style="font-family: Noto Serif, serif; font-weight: bold; ">Hootpedia</h2>
        </div>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


        <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="collapsibleNavbar">
            <ul class="navbar-nav text-right">
                <?php if(!auth()->check()): ?>

                <button onclick="document.getElementById('id01').style.display='block'" class="mx-1 btn btn-outline-primary">Login</button>
                <button onclick="document.getElementById('id02').style.display='block'" class="mx-1 btn btn-outline-primary">Register</button>

                   
                <!-- Login -->
				<?php echo $__env->make('includes.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('includes.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                       <! -- Password validation -->

                  

            <?php elseif(auth()->check()): ?>
                    <ul class="navbar-nav text-right">
                
                        <li class="nav-item ">
                            <a class="nav-link" href="/articles/html">Html </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/fundamentals">Fundamentals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/java">Java</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/cplusplus">C++</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/python">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/sql">SQL</a>
                        </li>

                        <li class="nav-item">
                            <a href="/articles/create" class="mx-1 btn btn-outline-primary">

                                <span class="glyphicon glyphicon-circle-arrow-up"></span> Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <button class="mx-1 btn btn-outline-primary">
                                <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" width="25">
                                <a href="/profile"><?php echo e(auth()->user()->name); ?></a>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="mx-1 btn btn-outline-primary">
                                <a href="/logout" >Logout</a>
                            </button>
                        </li>
                    </ul>
            <?php endif; ?>

            </ul>
        </div>
</nav>



<script>
    // Get the modal
    const modal1 = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal1) {
            modal1.style.display = "none";
        }
    }
</script>


<script>
    // Get the modal
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    }
</script>
<?php /**PATH /Users/santiagomonsalve/Documents/GitHub/hootpedia/Laravel_Hootpedia/resources/views/includes/navigation.blade.php ENDPATH**/ ?>