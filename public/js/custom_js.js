var client = algoliasearch('MDT0DVY5FL', '96aee440462a2bb026e4bc1190a14066');
var index = client.initIndex('projects');
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
{ hint: false, debug: true }, {
    source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
    //value to be displayed in input control after user's suggestion selection
    displayKey: 'dsc_title',
    //hash of templates used when rendering dataset
    templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion._highlightResult.dsc_title.value + '</span>'
            // <span>' +
            // suggestion._highlightResult.team.value + '</span>';
        }
    }
});


    $("#categories").select2({
        placeholder:'Choose a category',
        width:'100%',
    });

    $(function() {
        $("div#photo").show();
    })

     $(function() {
        $("div#postProduct").show();
    })

     $('.reksearchloader').click(function(){
// var query;
//     query = document.getElementById("query").value;
//      if (query == "") {
//      alert('What are you searching for?')
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