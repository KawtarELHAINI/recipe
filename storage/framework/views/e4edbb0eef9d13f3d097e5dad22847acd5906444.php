

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script> --
        <body > 
            <h2>create new recipe </h2>
            <form action="<?php echo e(route('store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" placeholder="recipe name">
                <textarea name="description" placeholder="content"></textarea>
                <button type="submit">Save recipe</button>
            </form>
            
</body>
</html> 



    <?php /**PATH C:\xampp\htdocs\PROJECTS\recette\resources\views/add.blade.php ENDPATH**/ ?>