{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 --}}<script src="/js/app.js"></script>
<script src="/js/jquery-3.1.0.min.js" type="text/javascript"></script>

<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/material-dashboard.min.js" type="text/javascript"></script>
<script src="/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="/js/lazysizes.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://use.fontawesome.com/034c41ac18.js"></script>
<script id="dsq-count-scr" src="//rek-studio.disqus.com/count.js" async></script>
<script type="text/javascript">
$(window).load(function() {
    $("#overlay").fadeOut("slow");
});
</script>
{{-- <script>
lazySizes.init();
</script> --}}
<script async>
	$(function() {
    $("div#photo").show();
})
</script>
<script async>
$('.reksearchloader').click(function(){
// var query;
//     query = document.getElementById("query").value;
//      if (query == "") {
//     	alert('What are you searching for?')
//         return false;
//     };
if ($('input:text').val().length == 0) {
	alert('What are you searching for?')
         return false;
	};
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>';
this.form.submit();
});
</script>
<script>
    $("#tags").select2({
        placeholder:'Choose a category',
        width:'100%',
    });
</script>

<script>
$('#gallery_upload_kt').click(function(){
var x; var y;
    x = document.getElementById("gallery_image").value;
    y = document.getElementById("tags").value;
    if (x == "") {
    	alert('Choose Photo(s)')
        return false;
    }else if (y == "") {
    	alert('Choose Category')
        return false;
    };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Working on it..';
this.form.submit();
});
</script>