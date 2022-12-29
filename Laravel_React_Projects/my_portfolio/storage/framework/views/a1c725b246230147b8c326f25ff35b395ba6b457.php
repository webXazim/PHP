
<title>portfolio</title>

<?php $__env->startSection('content'); ?>
    <style>
        .portfolio {
            color: #ff6000 !important;
        }

        .contact-form {
            background-color: var(--bluex);
            /* For browsers that do not support gradients */
            background-image: radial-gradient(circle,
                    var(--bluex),
                    var(--bluex),
                    var(--dblue));

            padding: 5% 0px 5% 0px;
            margin-top: 5px;
            color: var(--text)
        }

        .form input,
        .subject-input textarea {
            background: transparent;
            border: 0;
            outline: 0;
            border-bottom: 2px solid lightgray;
            border-radius: 0px;
        }

        .contact-form-title {
            color: #ff5000;
        }


        .form input:-webkit-autofill,
        .form input:-webkit-autofill:hover,
        .form input:-webkit-autofill:focus,
        .subject-input textarea:-webkit-autofill,
        .subject-input textarea:-webkit-autofill:hover,
        .subject-input textarea:-webkit-autofill:focus {
            border: 0;
            outline: 0;
            border-bottom: 2px solid white;
            -webkit-text-fill-color: white;
            -webkit-box-shadow: 0 0 0px 1000px #000015 inset;
        }

        .form input:focus::placeholder,
        .subject-input textarea:focus::placeholder {
            color: lightgray
        }

        .contact-form .form input:focus,
        .subject-input textarea:focus {
            border: 0;
            outline: 0;
            border-bottom: 2px solid lightgray;
            background: transparent;
        }

        .contact-submit-button {
            background: rgb(60, 60, 60);
            padding: 15px;
            width: 80%;
            letter-spacing: 15px;
            margin-top: 16px;
            color: lightgray;
        }

        .contact-submit-button:hover {
            background: #202020;
        }

        .contact-reset-button {
            color: lightgray;
            background: rgb(255, 0, 0);
            padding: 15px;
            letter-spacing: 15px;
            width: 16%
        }

        .contact-reset-button:hover {
            background: rgba(255, 0, 0, .8);
        }

        .contact-form-group {
            margin: 5px
        }

        .contact-form-title {
            text-align: center;
            padding: 20px;
        }

        .contact-form-title h6 {
            color: lightgray;
            font-size: 18px;
            margin: auto;
        }
    </style>
    <div data-aos='' data-aos-duration='2000' id="header"></div>
    <div id="service"></div>
    <div id="projects"></div>
    <div id="skills"></div>
    <div class="contact-form" id="contact-me">
        <div class="container-xl">
            <div class="contact-form-title">
                <h1 data-aos='fade-up' data-aos-duration="500">Get In Touch!</h1>
                <h6 data-aos='fade-up' data-aos-duration="800">I would love to hear anything from you.</h6>
            </div>
            <div class="card-body">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                        <?php
                            Session::forget('success');
                        ?>
                    </div>
                <?php endif; ?>
                <form class="form" method="POST" action="<?php echo e(route('contact.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div data-aos='fade-up' data-aos-duration="1000" class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="John Doe"
                                    value="<?php echo e(old('name')); ?>">
                                <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div data-aos='fade-up' data-aos-duration="1000" class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="johndoe@example.com"
                                    value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div data-aos='fade-up' data-aos-duration="1000" class="form-group">
                                <strong>Phone:</strong>
                                <input type="text" name="phone" class="form-control" placeholder="000008801324xxx"
                                    value="<?php echo e(old('phone')); ?>">
                                <?php if($errors->has('phone')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('phone')); ?></span><span class="text-danger">
                                        Not
                                        <?php echo e(strlen(old('phone'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div data-aos='fade-up' data-aos-duration="1000" class="form-group">
                                <strong>Subject:</strong>
                                <input type="text" name="subject" class="form-control" placeholder="price..."
                                    value="<?php echo e(old('subject')); ?>">
                                <?php if($errors->has('subject')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('subject')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row subject-input">
                        <div class="col-md-12">
                            <div data-aos='fade-up' data-aos-duration="1000" class="form-group">
                                <strong>Message:</strong>
                                <textarea name="msg" rows="3" class="form-control" placeholder="Can you build website at low cost?"><?php echo e(old('msg')); ?></textarea>
                                <?php if($errors->has('msg')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('msg')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center contact-form-group">
                        <button data-aos='fade-in' data-aos-duration="2000" type="reset"
                            class="contact-reset-button btn-submit">RESET!</button>
                        <button data-aos='fade-in' data-aos-duration="2000"
                            class="contact-submit-button btn-submit">BO😎M!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="contact"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\webXazim\wxa\laravel\portfolio\my_portfolio\resources\views/portfolio.blade.php ENDPATH**/ ?>