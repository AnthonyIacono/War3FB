<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?= Config::$Configs['facebook']['appId'] ?>', // App ID
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

      FB.XD._origin = window.location.protocol + "//" + document.domain + "/" + FB.guid();
      FB.XD.Flash.init();
      FB.XD._transport = "flash";
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName('head')[0].appendChild(js);
   }(document));

    $(document).ready(function() {
        $('body').delegate('.fb_connect', 'click', function() {
            FB.login(function(r) {
                if(!r.authResponse) {
                    return;
                }

                document.location = '/';
            }, {scope: 'publish_actions,offline_access'});
        });
    });
</script>

    <button class="fb_connect">Connect FB account</button>
<div class="fb-add-to-timeline" data-show-faces="true" perms="publish_actions"></div>