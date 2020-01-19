{{-- Post Class tutorial : https://digwp.com/2010/03/add-classes-to-post_class/ --}}
<article class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?> container mx-auto">
  
  <header class="my-4">
    <h1 class="entry-title font-bold text-3xl">
      {!! get_the_title() !!}
    </h1>
    <time class="updated f6" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  </header>

  <div class="flex align-center justify-between">
    <div class="w-1/4 mr-6">
      @include('inquiry/general')
    </div>
    <div class="w-2/4">
      @include('inquiry/companions')
    </div>
    <div class="w-1/4 ml-6">
      @include('inquiry/passenger')
    </div>
  </div>

  @if ( tr_posts_field('advanced_options') == 1 )
  <hr class="my-4">
  <div class="flex align-center justify-between">
    <div class="w-1/4 mr-6">
      @include('inquiry/flight')
    </div>
    <div class="w-1/4 mr-3">
      @include('inquiry/accomodation')
    </div>
    <div class="w-1/4 ml-3">
      @include('inquiry/transportation')
    </div>
    <div class="w-1/4 ml-6">
      <div class="themes">
        @include('inquiry/theme')
      </div>
    </div>
  </div>
  @endif
  
  <br>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp

</article>