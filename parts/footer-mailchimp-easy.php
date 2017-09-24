<div id="mailchimp-modal" class="mfp-hide modal">
  <img src="/assets/img/mailing-01.svg" class="subscribe-svg subscribe-svg__top">
  <div class="subscribe-wrapper bg--red">
    <h1 class="modal__title color--white text-center">Sign up for our mailing list:</h1>
    <?php echo do_shortcode('[epm_mailchimp]' ); ?>
  </div>
  <img src="/assets/img/mailing-02.svg" class="subscribe-svg subscribe-svg__bottom">
</div>

<script>
  $(document).ready(function(){
    $( ".subscribe-form" ).submit(function( event ) {
      $.magnificPopup.close();
      $.cookie("subscribe", 1);
    });

    var cookieValue = $.cookie("subscribe");

    if (!cookieValue) {
      if ( $('body').hasClass('home')) {
        $.magnificPopup.open({
          items: {
            src: '#mailchimp-modal' 
          },
          //modal: true,
          type: 'inline',
          midClick: true,
          removalDelay: 1000,
          mainClass: 'mfp-subscribe fs-grid',
        });
      }
    }
  });
</script>