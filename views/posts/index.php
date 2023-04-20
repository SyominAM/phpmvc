<h1>posts:</h1>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->fullname; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
  </p>
<?php } ?>