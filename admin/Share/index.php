<?php $url="https://www.developerdesks.com/";
$name="Share post links articles to social network with Yoursite"; 
$caption="social sharing developer desks"; 
$description="Write some fo the description about your content."; 
$logo="https://www.developerdesks.com/logo.png"; ?>
<div class="gplus">
<!--google+ sharing --> 
<a href="https://plus.google.com/share?url={<?php echo $url;?>}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
<img width="200" src="google+.png"/> </a> 
</div>
<!--/google+ sharing --> 
<div class=""fb-class">
<!-- fb sharing -->
<a href="#" id="shareonfacebook"><img src="facebook.jpg"></a>
<div class="fb-share-button" data-href="<?php echo $url; ?>" data-layout="button_count">
</div></a>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script> $(document).ready(function () { $('#shareonfacebook').click(function (e) {  var name ='<?php echo $name; ?>'; var caption ='<?php echo $caption; ?>'; var picture ='<?php echo $picture; ?>'; var description ='<?php echo $description; ?>'; var link ='<?php echo $url; ?>';  e.preventDefault(); FB.ui( { method: 'feed', name: name, link: link, caption: caption, picture: picture, description: description, message: '' }); }); });  </script> <script> FB.init({appId: 'yourappid', status: true, cookie: true, xfbml: true}); </script> <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=yourid&version=v2.0"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>