<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="contact-page">
    <div class="container">
        <h1>Contact Us</h1>

        <form method="post" class="contact-form">
            <input type="text" name="name" placeholder="Your name" required>
            <input type="email" name="email" placeholder="Your email" required>
            <textarea name="message" placeholder="Your message" required></textarea>

            <button type="submit" name="send_contact">Send message</button>
        </form>

        <?php
        if (isset($_POST['send_contact'])) {
            echo '<p class="success">Message sent successfully!</p>';
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>
