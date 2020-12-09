<form action="//timelinewood.us6.list-manage.com/subscribe/post-json?u=58784e16aacb58ebef5701fbf&amp;id=a8269cf156&c=callback" method="post" target="_blank" novalidate>
  <div id="js-form-inputs">
    <input class="block w-full h-12 md:h-16 px-6 border border-gray-200 rounded mb-2" type="email" name="EMAIL" id="mce-EMAIL" value="" placeholder="Email Address">
    <div class="flex items-start justify-between">
      <!-- response -->
      <p id="js-subscribe-response" class="pt-2 prose prose-sm"></p>
      <button class="block md:inline-block w-full md:w-auto rounded h-12 px-6 border-0 bg-brand-orange text-white font-bold" type="submit" name="subscribe" id="mc-embedded-subscribe">Sign Up Now</button>
    </div>
  </div>
  <!-- honeypot -->
  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" id="js-validate-robot" name="b_a4752870f583bb49a02427b3c_143fa46c21" tabindex="-1" value=""></div>
</form>

<script>
  /*
 * Mailchimp AJAX form submit VanillaJS
 * Vanilla JS
 * Author: Michiel Vandewalle
 * Github author: https://github.com/michiel-vandewalle
 * Github project: https://github.com/michiel-vandewalle/Mailchimp-AJAX-form-submit-vanillaJS
 */

(function () {
    document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
        e.preventDefault();

        // Check for spam
        if(document.getElementById('js-validate-robot').value !== '') { return false }

        // Get url for mailchimp
        var url = this.action.replace('/post?', '/post-json?');

        // Add form data to object
        var data = '';
        var inputs = this.querySelectorAll('#js-form-inputs input');
        for (var i = 0; i < inputs.length; i++) {
            data += '&' + inputs[i].name + '=' + encodeURIComponent(inputs[i].value);
        }

        // Create & add post script to the DOM
        var script = document.createElement('script');
        script.src = url + data;
        document.body.appendChild(script);

        // Callback function
        var callback = 'callback';
        window[callback] = function(data) {

            // Remove post script from the DOM
            delete window[callback];
            document.body.removeChild(script);

            // Display response message
            document.getElementById('js-subscribe-response').innerHTML = data.msg
        };
    });
})();
</script>