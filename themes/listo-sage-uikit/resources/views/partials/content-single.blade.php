<div class="container mx-auto mb-10">
  <article class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>">
    <header>
      <h1 class="entry-title text-3xl mt-5 font-bold">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
    </header>
    <div class="entry-content my-5">
      @php the_content() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
  </article>
</div>