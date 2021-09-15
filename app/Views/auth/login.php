<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
 
<div class="container">
    <div class="row row justify-content-center align-items-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign In</h4><br>

                <form action="<?= base_url('auth/check') ?>" method="post" autocomplete="on">
                <?= csrf_field(); ?>
                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
            
                    <div class="form-group row justify-content-center align-items-center">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value('email'); ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </div>
                    <div class="form-group row justify-content-center align-items-center">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?= set_value('password'); ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div>
                    <div class="form-group row justify-content-center align-items-center">
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                    </div>
                    <br>
                    
                <a href="<?= site_url('auth/register'); ?>">Have no account ?</a>
                </form>
        </div>
    </div>
</div>
</body>
</html>