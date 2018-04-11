<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
	      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Categories</h4>
    <ol class="list-unstyled">
	      <?php wp_list_categories($args = array('title_li'=>'')); ?>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
