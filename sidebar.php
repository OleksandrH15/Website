 <section class="sidebar">
     <h2>Latest News</h2>
<?php
    // Отримання останніх постів
    $recent_posts = wp_get_recent_posts(array(
        'post_type' => 'post',
        'numberposts' => 5, // Кількість останніх постів, які ви хочете відобразити
        'post_status' => 'publish'
    ));

    // Виведення посилань на пости
    foreach ($recent_posts as $post) {
        echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
    }
?>


 </section>
