

<?php $__env->startSection('head'); ?>
<script src="<?php echo e(asset('js/signup.js')); ?>" defer></script>
<script type="text/javascript">
    const REGISTRAZIONE_ROUTE = "<?php echo e(url('signup')); ?>";
</script>
<title>Registrazione</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
<form method="POST" autocomplete="off" action="<?php echo e(url('signup')); ?>">
    <?php echo csrf_field(); ?>
    <h1>Benvenuto</h1>
    <?php if($error =='campi_vuoti'): ?>
    <section class='error'>Compilare tutti i campi.</section>
    <?php elseif($error =='utente_esistente'): ?>
    <section class='error'>Username già esistente.</section>
    <?php endif; ?>

    <div class="nome">
        <label for='nome'>Nome</label>
        <div class="container"><input type="nome" name="nome" required></div>
        <span>Nome non valido</span>
    </div>

    <div><input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'></div>

    <div class="cognome">
            <label for='cognome'>Cognome</label>
            <div class="container"><input type="cognome" name="cognome" required></div>
            <span>Cognome non valido</span>
    </div>

    <div class="username">
        <label for='username'>Username</label>
        <div class="container"><input type="username" name="username" required></div>
        <span>Username non valido</span>
    </div>

    <div class="email">
        <label for='email'>Email</label>
        <div class="container"><input type="email" name="email" required></div>
        <span><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>

    <div class="password">
            <label for='password'>Password</label>
            <div class="container"><input type="password" name="password" required></div>
            <span>Password non valida</span>
    </div>

    <div class='submit'>
        <input type="submit" id='log' class='button' value="Registrati">
    </div>

    <p>Hai già un account? <a href="<?php echo e(url('login')); ?>">Accedi</a></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logsign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Files\xampp\htdocs\Animenthusiast\resources\views/signup.blade.php ENDPATH**/ ?>