<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/app.js"></script>
{{-- <script src="/js/jquery-3.1.0.min.js" type="text/javascript"></script>
 --}}
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/material-dashboard.min.js" type="text/javascript"></script>
<script src="/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="/js/lazysizes.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://use.fontawesome.com/034c41ac18.js"></script>
<script id="dsq-count-scr" src="//rek-studio.disqus.com/count.js" async></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script>
var client = algoliasearch('1OQ6WIFJ2I', '65fa7043c9a493a7eb9e7f4c953787e4');
var index = client.initIndex('projects');
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
{ hint: false, debug: true }, {
    source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
    //value to be displayed in input control after user's suggestion selection
    displayKey: 'title',
    //hash of templates used when rendering dataset
    templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion._highlightResult.title.value + '</span>'
            // <span>' +
            // suggestion._highlightResult.team.value + '</span>';
        }
    }
});
</script>
<script>

jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
    if ( ns.includes("noPreventDefault") ) {
      this.addEventListener("touchstart", handle, { passive: false });
    } else {
      this.addEventListener("touchstart", handle, { passive: true });
    }
  }
};
</script>
<script>

    $("#categories").select2({
        placeholder:'Choose a category',
        width:'100%',
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
<script>
    $(function() {
        $("div#body").show();
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

$('#p_create').click(function(){
var title;
 var body;
  // var tutorial;
   var avatar;
    // var zip_file;
    title = document.getElementById("title").value;
    body = document.getElementById("body").value;
    // tutorial = document.getElementById("tutorial").value;
    avatar = document.getElementById("avatar").value;
    // zip_file = document.getElementById("zip_file").value;
    if (title == "") {
        alert('Choose Title')
        return false;
    }else if (body == "") {
        alert('Enter description')
        return false;
    }
    // else if (tutorial == "") {
    //  alert('Choose Tutorial link')
    //     return false;
    // }
    else if (avatar == "") {
        alert('Choose Image')
        return false;
    };
    // else if (zip_file == "") {
    //  alert('Choose Zip file')
    //     return false;
    // };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Creating..';
this.form.submit();
});

$('#p_edit').click(function(){
var title;
 var body;
  // var tutorial;
   var img;
    // var zip_file;
    title = document.getElementById("title").value;
    body = document.getElementById("body").value;
    // tutorial = document.getElementById("tutorial").value;
    img = document.getElementById("img").value;
    // zip_file = document.getElementById("zip_file").value;
    if (title == "") {
        alert('Choose Title')
        return false;
    }else if (body == "") {
        alert('Edit description')
        return false;
    }
    // else if (tutorial == "") {
    //  alert('Choose Tutorial link')
    //     return false;
    // }
    else if (img == "") {
        alert('Choose Image')
        return false;
    };
    // else if (zip_file == "") {
    //     alert('Choose Zip file')
    //     return false;
    // };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Updating..';
this.form.submit();
});

$('#p_zf').click(function(){
    var zip_file;
    zip_file = document.getElementById("zip_file_1").value;
    if (zip_file == "") {
        alert('Please choose a file to upload')
        return false;
    };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Updating..';
this.form.submit();
});

$('#p_edit_1').click(function(){
    var img;
    img = document.getElementById("img_1").value;
    if (img == "") {
        alert('Please choose an image to upload')
        return false;
    };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Updating..';
this.form.submit();
});
</script>