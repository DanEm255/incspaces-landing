<section class="hero">
  @if(get_field('hero')['background_image'])
    <div class="hero-background">
      <div class="hero-background__img" style="background-image:url('{{ get_field('hero')['background_image']['url'] }}');"></div>
    </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero-textarea">
          @if (get_field('hero')['header'])
            <h1 class="hero-textarea__hdr">{{ get_field('hero')['header'] }}</h1>
          @endif
          @if (get_field('hero')['paragraph'])
            <div class="hero-textarea__para">{!! get_field('hero')['paragraph'] !!}</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

<main class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <section class="form-block">
          <div class="row r">
            <div class="col-xs-10">
              @if(get_field('form')['header'])
                <h2 class="form-block__hdr">{{ get_field('form')['header'] }}</h2>
              @endif
              <div class="form-block-fieldset">
                @php echo do_shortcode( '[contact-form-7 id="9" title="Enquiry Form"]' ) @endphp
              </div>
            </div>
          </div>
        </section>
        <section class="image-tiles">
          <div class="row">
            <div class="col-xs-4 c">
              @if(get_field('tiles')['main_header'])
                <div class="image-tiles-heading">
                  <h2 class="image-tiles-heading__hdr">{{ get_field('tiles')['main_header'] }}</h2>
                </div>
              @endif
            </div>
            @php $spaces = get_field('tiles')['spaces'] @endphp
            @foreach($spaces as $single_space)
              <div class="col-xs-4 c">
                <div class="image-tiles-single">
                  <div class="image-tiles-single__hdr">
                    @if ($single_space['header'])
                      <span>{{ $single_space['header'] }}</span>
                    @endif
                    @if ($single_space['subheader'])
                      {{ $single_space['subheader'] }}</div>
                    @endif
                    @if ($single_space['background_image'])
                      <div class="inner-background">
                        <div class="inner-background__img" style="background-image:url('{{ $single_space['background_image']['url']  }}')"></div>
                      </div>
                    @endif
                </div>
              </div>
            @endforeach
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
