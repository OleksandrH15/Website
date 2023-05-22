<?php
get_header()
?>



<?php get_sidebar(); ?>



<main>
   
    <section class="content">
        <div class="main-text">
            <h1>about games</h1>
            <p>Video games have become a popular form of entertainment worldwide, and for good reason. There are many great games out there that offer hours of fun and excitement. Games can range from action-packed adventures to relaxing puzzles, and everything in between. Here are a few reasons why games are so great:

                First, games can provide a much-needed escape from the stresses of everyday life. Whether you're battling hordes of zombies, exploring a mystical land, or solving challenging puzzles, games can transport you to another world and allow you to forget about your troubles for a while.

                In addition, games can be a great way to connect with others. Multiplayer games, in particular, can be a fun way to socialize and bond with friends and family, whether you're playing online or in person. You can work together to complete missions, compete against each other in races, or just chat and have a good time.</p>
        </div>


    </section>

</main>
<section class="news">
    <h1>Best Games</h1>
    <div class="news-section">
        <div class="new1">
            <h2>the witcher 3 wild hunt</h2>
            <img src = "<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg">
            <p>The Witcher 3: Wild Hunt is an epic role-playing game that has captured the hearts of players around the world. Developed by CD Projekt Red, this game takes you on a thrilling adventure as Geralt of Rivia, a skilled monster hunter known as a Witcher.

                Set in a vast open world, The Witcher 3 offers a rich and immersive experience. The game is known for its stunning graphics, detailed environments, and captivating storytelling. From the bustling cities to the untamed wilderness, every corner of the game world is meticulously crafted and filled with quests, secrets, and memorable characters.

                .</p>
        </div>


        <div class="new1">
            <h2>God of War</h2>
            <img src = "<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg">
            <p>God of War is a highly acclaimed action-adventure game developed by Santa Monica Studio. It serves as a reboot and continuation of the iconic God of War series, introducing players to a new chapter in the story of Kratos, the Spartan warrior-turned-God.

                In this iteration of God of War, Kratos finds himself in the land of Norse mythology, accompanied by his young son, Atreus. Together, they embark on a perilous journey through breathtaking realms filled with gods, monsters, and ancient lore. The game seamlessly weaves together an emotionally driven narrative with intense combat and exploration.
                One of the standout features of God of War is its gripping storytelling and character development. The game explores the complex relationship between Kratos and Atreus, as they navigate their personal demons and face the challenges of a harsh and unforgiving world. The bond between father and son is beautifully portrayed, adding depth and emotional weight to the gameplay experience.
            </p>
        </div>


        <div class="new1">
            <h2>Red Dead Redemption 2</h2>
           <img src = "<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg">
            <p>Red Dead Redemption 2 is an epic open-world action-adventure game developed by Rockstar Games, the creators of the renowned Grand Theft Auto series. Set in the late 19th century, the game takes players on an unforgettable journey through the vast and unforgiving landscapes of the American frontier.

                The game follows the story of Arthur Morgan, a member of the notorious Van der Linde gang. As they navigate the decline of the Wild West, players experience a rich and immersive narrative filled with complex characters, moral dilemmas, and the pursuit of survival. Arthur's journey is a gripping tale of loyalty, redemption, and the consequences of one's actions in a world on the brink of change.</p>
        </div>
        <div class="new1">
            <h2>Cyberpunk 2077</h2>
            <img src = "<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg">
            <p>Cyberpunk 2077 is a highly anticipated action role-playing game developed by CD Projekt Red, the creators of the critically acclaimed Witcher series. Set in the dystopian metropolis of Night City in the year 2077, the game offers a gripping and immersive experience in a futuristic world driven by advanced technology and complex societal issues.

                In Cyberpunk 2077, players assume the role of V, a mercenary navigating the treacherous streets of Night City. With a deep and branching narrative, players make choices that shape V's story and destiny, delving into the dark underbelly of the city's gangs, corporations, and influential figures. The game explores themes of identity, technology, and the blurred lines between humanity and machinery.

                Night City is a sprawling and visually stunning open world that invites players to explore its diverse districts, from the opulent skyscrapers of the corporate elite to the gritty and dangerous outskirts. The city is teeming with vibrant characters, each with their own ambitions, secrets, and agendas, creating a rich tapestry of interactions and conflicts.</p>
        </div>
    </div>
</section>



<?php
// Виведення останніх постів
$args = array(
    'post_type'      => 'post', // Тип поста
    'posts_per_page' => 10, // Кількість постів для виведення
);
$posts = new WP_Query( $args );

if ( $posts->have_posts() ) {
    while ( $posts->have_posts() ) {
        $posts->the_post();

        // Виведення заголовку і контенту поста
        the_title( '<h2>', '</h2>' );
        the_content();
    }
} else {
    echo 'No posts found.';
}
?>


<?php
get_footer()
?>