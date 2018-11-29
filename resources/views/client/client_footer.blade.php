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
{{-- dont forget to update disqus comments to the live site!!!! --}}
<script id="dsq-count-scr" src="//codefield-1.disqus.com/count.js" async></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script>
        {{-- algolia search --}}
var client = algoliasearch('1OQ6WIFJ2I', '65fa7043c9a493a7eb9e7f4c953787e4');
var index = client.initIndex('projects');
autocomplete('#aa-search-input',
{ hint: false, debug: true }, {
    source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
    displayKey: 'dsc_title',
    templates: {
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion._highlightResult.dsc_title.value + '</span>'
        },
        footer: '<a href="https://www.algolia.com/" target="_blank"><img style="float: right;width: 90px; padding: 10px;" src="/storage/algolia_logo/sba_logo.png" /></a>'
    }
});

//  add passive listeners for better scrolling performance
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
    if ( ns.includes("noPreventDefault") ) {
      this.addEventListener("touchstart", handle, { passive: false });
    } else {
      this.addEventListener("touchstart", handle, { passive: true });
    }
  }
};

// select2
    $("#categories").select2({
        placeholder:'Choose a category',
        width:'100%',
    });
// initiate images faster
lazySizes.init();

// hide photos and products until the whole page is loaded
	$(function() {
        $("div#photo").show();
    })

    $(function() {
        $("div#postProduct").show();
    })

// $('.reksearchloader').click(function(){
// // var query;
// //     query = document.getElementById("query").value;
// //      if (query == "") {
// //     	alert('What are you searching for?')
// //         return false;
// //     };
// if ($('input:text').val().length == 0) {
// 	alert('What are you searching for?')
//          return false;
// 	};
// this.disabled=true;
// this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>';
// this.form.submit();
// });

// select2
    $("#tags").select2({
        placeholder:'Choose a category',
        width:'100%',
    });

// add animation on image upload
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

// add animation on product post
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

// add animation on product edit
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

// add animation on file upload
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

// add animation on post image update upload
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

// facebook
$('#fb_click').click(function(){
    $( '#fb_click' ).attr( 'disabled', 'disabled' );
    this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Working..';
});

// github
$('#gh_click').click(function(){
    $( '#gh_click' ).attr( 'disabled', 'disabled' );
    this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Working..';
});

// copy test onclick
function copyText(element) {
  var range, selection, worked;

  if (document.body.createTextRange) {
    range = document.body.createTextRange();
    range.moveToElementText(element);
    range.select();
  } else if (window.getSelection) {
    selection = window.getSelection();
    range = document.createRange();
    range.selectNodeContents(element);
    selection.removeAllRanges();
    selection.addRange(range);
  }

  try {
    document.execCommand('copy');
    alert('text copied');
  }
  catch (err) {
    alert('unable to copy text');
  }
}

 </script>
