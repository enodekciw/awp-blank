<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header><h1>Site Header</h1></header>
    <main>
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </main>
    <footer><h3>Site Footer</h3></footer>
    <?php wp_footer(); ?>
</body>
</html>