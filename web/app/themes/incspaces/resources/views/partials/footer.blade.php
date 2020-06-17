<footer class="footer" data-aos data-aos-offset="0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-textarea">
          <h2 class="footer-textarea__hdr">Full website coming soon</h2>
        </div>
        <div class="footer-base">
          <div class="footer-base-leftside">
            <img class="footer-base-leftside__img" src="{{ get_template_directory_uri() }}/assets/images/inspaces-logo.png" alt="">
              @if (get_field('platforms', 'options'))
                <div class="inner-social">
                  @php $social = get_field('platforms', 'options') @endphp
                  @foreach($social as $single_social)
                    <a class="inner-social__img" target="_blank" href="{{ $single_social['media_url'] }}">
                      <img src="{{ get_template_directory_uri() }}/assets/images/{{ $single_social['select_media_platform'] }}.svg" alt="{{ $single_social['select_media_platform'] }}" />
                    </a>
                  @endforeach
                </div>
              @endif
          </div>
          <div class="footer-base-rightside">
            <p class="footer-base-rightside__para">&copy; {{ date('Y') }} incspaces. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
