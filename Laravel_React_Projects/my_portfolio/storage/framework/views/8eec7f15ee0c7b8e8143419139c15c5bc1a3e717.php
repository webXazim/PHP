
<title>Hire</title>
<link rel="stylesheet" href="css/hire.css" type="text/css" />

<?php $__env->startSection('content'); ?>
    <div class="main-section">
        <section class="container-xl pt-5 pb-5">
            <div class="pt-5">
                <div class="d-flex justify-content-between">
                    <div class="link-tree pb-2">
                        >><a href="/" title="Portfolio">
                            Portfolio</a>
                        > <a href="/hire">Hiring request
                        </a>
                    </div>
                    <div class="link-tree d-none d-md-block">
                        <a href="/customorder" title="Order a custom website">Custom Order</a>
                        << </div>
                    </div>
                    <div class="">
                        <h2>Look at my projects to guess my eXperience.</h2>
                        <p class="hiring-rate"><strong>Hourly rate:</strong> Only <del>$15</del> $1 USD <i
                                title="This offer is only for Uncertain time and anytime I can swtich to regular rate"
                                class="fa-solid fa-circle-info"></i></p>
                        <ul>
                            <h3>You can Hire me for_</h3>
                            <li>To build your Responsive, Dynamic custom web front-end using <i>HTML5</i>,
                                <i>CSS3</i>, <i>Bootstrap</i>, <i>JavaScript</i>,
                                <i>React</i>, <i>Angular</i>.
                            </li>
                            <li>To build your Secure web Back-end using <i>Express</i>, <i>Flask</i>, <i>Laravel</i>.
                            </li>
                            <li>For updating your websites content, new features, bug fixing etc.</li>
                        </ul>
                    </div>
                    <div>
                        <div class="form-text">
                            <h2>Let me know about your project.</h2>
                            <p><strong>Communication</strong> is the first step to start working so fill up the form
                                below and
                                click on SEND ME! button or start live chat.</p>
                        </div>
                        <?php if(auth()->guard()->check()): ?>
                            
                            <div class="card-body">
                                <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(Session::get('success')); ?>

                                        <?php
                                            Session::forget('success');
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <form method="POST" action="<?php echo e(route('hire.store')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                <input type="text" name="name" class="form-control shadow-none"
                                                    placeholder="Name" value="<?php echo e(Auth::user()->name); ?>" readonly="readonly">
                                                <?php if($errors->has('name')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email:</strong>
                                                <input type="text" name="email" class="form-control shadow-none"
                                                    placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" readonly="readonly">
                                                <?php if($errors->has('email')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">
                                                <strong>Why do you want to Hire?</strong><br>

                                                <label for="subject">For: </label>
                                                <select class="pb-1" name="subject" id="subject">
                                                    <option class="cts" value="">Click to select</option>
                                                    <option value="Front-end Development">Front-end Development.</option>
                                                    <option value="Back-end Development">Back-end Development.</option>
                                                    <option value="Full-stack Development">Full-stack Development.</option>
                                                    <option value="Updating Website">Updating Website.</option>
                                                    <option value="Bug Fixing">Bug Fixing.</option>
                                                    <option value="New Features">New Features.</option>
                                                    <option value="Something Else">Something Else!</option>
                                                </select>

                                                <?php if($errors->has('subject')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('subject')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">

                                                <strong>Estimated Work Duration?</strong><br>
                                                <label for="duration">In: </label>
                                                <select class="pb-1" name="duration" id="duration">
                                                    <option class="cts" value="">Click to select</option>
                                                    <option value="Hour">Hour</option>
                                                    <option value="Day">Day</option>
                                                    <option value="Week">Week</option>
                                                    <option value="Month">Month</option>
                                                    <option value="Else!">Else!</option>
                                                </select>

                                                <?php if($errors->has('duration')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('duration')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Write a brief description about the job:</strong>
                                                <textarea name="msg" rows="3" class="form-control" maxlength="3500" required><?php echo e(old('msg')); ?></textarea>
                                                <?php if($errors->has('msg')): ?>
                                                    <span class="text-danger"><?php echo e($errors->first('msg')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center pt-3">
                                        <button class="btn shadow-none">SEND ME!</button>
                                    </div>
                                </form>
                            </div>
                            
                        <?php else: ?>
                            <p class="font-semibold">
                                <a href="/register" class="hover:underline">Register</a> or
                                <a href="/login" class="hover:underline">log in</a> for sending Hiring request.
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\webXazim\wxa\laravel\portfolio\my_portfolio\resources\views/components/hirenorder/hire.blade.php ENDPATH**/ ?>