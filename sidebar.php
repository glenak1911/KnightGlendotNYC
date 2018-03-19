<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p><?php the_author_meta( 'description' ); ?> </p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
	      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="https://github.com/glenak1911">GitHub</a></li>
      <li><a href="https://twitter.com/Kn1ghtVisionNYC">Twitter</a></li>
      <li><a href="https://www.linkedin.com/in/glen-knight-2a5b712b/">LinkedIn</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
