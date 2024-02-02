<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(auth()->guard()->check()): ?>
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <button>log out</button>
    </form>
    <?php else: ?> 
    <div>
        <h2>Register</h2>
        <form action ="/register" method ="POST">
           <?php echo csrf_field(); ?>
        <input name="name" type="text" placeholder="name">
            <input name="email" type ="text" placeholder="email">
            <input name="password" type ="password" placeholder="password">
          <button>Register</button>
        </form>
    </div>
    <div>
        <h2>Login</h2>
        <form action ="/login" method ="POST">
           <?php echo csrf_field(); ?>
        <input name="loginname" type="text" placeholder="name">
            
            <input name="loginpassword" type ="password" placeholder="password">
          <button>login</button>
        </form>
    </div>
    <?php endif; ?>
    

</body>
</html> <?php /**PATH C:\xampp\htdocs\PROJECTS\recette\resources\views/register.blade.php ENDPATH**/ ?>