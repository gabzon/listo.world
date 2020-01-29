{{-- Post Class tutorial : https://digwp.com/2010/03/add-classes-to-post_class/ --}}
<article class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?> container mx-auto">
  
  <header class="my-4">
    <h1 class="entry-title font-bold text-3xl">
      {!! get_the_title() !!}
    </h1>
    Request date: <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  </header>  
  <div class="flex flex-wrap overflow-hidden align-center">     
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-2/4 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4">
      @include('inquiry/general')
      <br>
    </div>
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-full sm:order-last md:my-3 md:px-3 md:w-full md:order-last lg:my-4 lg:px-4 lg:w-2/4 xl:my-4 xl:px-4 xl:w-2/4">
      @include('inquiry/companions')
      <br>
    </div>
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-1/4 lg:my-4 lg:px-4 lg:w-1/4 lg:order-last xl:my-4 xl:px-4 xl:w-1/4 xl:lg">
      @include('inquiry/passenger')
      <br>
    </div>
  </div>

  @if ( tr_posts_field('advanced_options') == 1 )
  <hr class="my-4">
  <div class="flex flex-wrap overflow-hidden align-center">
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-2/4 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4">
      @include('inquiry/flight')
    </div>
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-2/4 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4">
      @include('inquiry/accomodation')
    </div>
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-2/4 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4">
      @include('inquiry/transportation')
    </div>
    <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-2/4 md:my-3 md:px-3 md:w-2/4 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4">
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