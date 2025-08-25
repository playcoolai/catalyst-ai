<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-headline">Have a project in mind? Let's build it.</h1>
        
        <form id="ai-prompt-form" class="ai-prompt-form">
            <label for="user-prompt" class="sr-only">Describe your project or business need.</label>
            <textarea id="user-prompt" name="user_prompt" class="ai-prompt-textarea" placeholder="Describe your project or business need... e.g., 'I need an e-commerce site for my custom furniture business.'"></textarea>
            <button type="submit" class="ai-prompt-submit-button">Show Me Relevant Projects</button>
        </form>
        
    </div>
</section>

<?php get_footer(); ?>