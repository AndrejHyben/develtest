<!-- navigation bar -->

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                    <?php echo e(_('Home')); ?>

                </a>
                <a class="navbar-brand" href="<?php echo e(url('/posts')); ?>">
                    <?php echo e(_('Posts')); ?>

                </a>
                <a class="navbar-brand" href="<?php echo e(url('/posts/create')); ?>">
                    <?php echo e(_('Add Post')); ?>

                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        
                        <a class="navbar-brand" href="<?php echo e(route('login')); ?>">
                            <?php echo e(_('Login')); ?>

                        </a>
                        
                        <a class="navbar-brand" href="<?php echo e(route('register')); ?>">
                            <?php echo e(_('Register')); ?>

                        </a>
                      
                        
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
  <!-- navigation bar ends here --><?php /**PATH /home/unk88/test/resources/views/includes/navbar.blade.php ENDPATH**/ ?>