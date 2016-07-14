<div id="mailchimp-modal" class="mfp-hide modal">
  <img src="/assets/img/mailing-01.svg" class="subscribe-svg subscribe-svg__top">
  <div class="subscribe-wrapper bg--red">
    <a class="modal__close popup-modal-dismiss ss-gizmo ss-delete subscribe-close" href="#"></a>
    <h1 class="modal__title color--white text-center">Sign up for our mailing list:</h1>

    <?php
      $form_action = '//noongoons.us10.list-manage.com/subscribe/post?u=a16967a3803d008fcfa3388a9&id=5108d57724';
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
