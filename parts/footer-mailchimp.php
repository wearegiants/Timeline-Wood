<div id="mailchimp-modal" class="mfp-hide modal">
  <img src="/assets/img/mailing-01.svg" class="subscribe-svg subscribe-svg__top">
  <div class="subscribe-wrapper bg--red">
    <!--<a class="modal__close popup-modal-dismiss ss-gizmo ss-delete subscribe-close" href="#"></a>-->
    <h1 class="modal__title color--white text-center">Sign up for our mailing list:</h1>

    <?php
      $form_action = get_field('mailchimp_action_url', 11);
    ?>

    <form class="subscribe-form" action="<?php echo $form_action; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
      <div class="input-group">
        <input type="email" value="" placeholder="Enter your email address" name="EMAIL" id="Email" class="subscribe-input color--black" autocorrect="off" autocapitalize="off">
        <span class="input-group-btn">
          <button type="submit" class="subscribe-form-submit bg--white color--red ss-gizmo ss-right right" name="subscribe" id="Subscribe">
            <span class="newsletter__submit-text--large">Submit</span>
          </button>
        </span>
      </div>
    </form>
  </div>
  <img src="/assets/img/mailing-02.svg" class="subscribe-svg subscribe-svg__bottom">
</div>

<script>
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
</script>