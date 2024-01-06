<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Opening House</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

    <?php get_header(); ?>

    <main>
        <section class="intro">
            <h1> University Opening House!</h1>
            <p>Come and explore what our university has to offer.</p>
        </section>

        <section class="events">
            <h2>Events Schedule</h2>
            <ul>
                <li>Date: Event description</li>
                <!-- Add more events and descriptions -->
            </ul>
        </section>

        <section class="highlights">
            <h2>Highlights</h2>
            <p>Some key points about the university or special activities during the event.</p>
        </section>

        <section class="contact">
            <h2>Contact Information</h2>
            <p>If you have any questions, feel free to contact us at:</p>
            <address>
                University Name<br>
                Address: 123 University St, City<br>
                Phone: 123-456-7890<br>
                Email: info@university.com
            </address>
        </section>
    </main>

    <?php get_footer(); ?>

</body>
</html>
