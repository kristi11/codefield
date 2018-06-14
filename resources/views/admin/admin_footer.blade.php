<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/app.js"></script>
{{-- <script src="/js/jquery-3.1.0.min.js" type="text/javascript"></script>
 --}} 
 <script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/material-dashboard.min.js" type="text/javascript"></script>
<script src="/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://use.fontawesome.com/034c41ac18.js"></script>
<script type="text/javascript">
    $("#tags").select2({
        placeholder:'Choose a tag',
        width:'100%',
    });
</script>
<script type="text/javascript">
    $("#categories1").select2({
        placeholder:'Choose a category',
        width:'100%',
    });
    $("#categories").select2({
        placeholder:'Choose a category',
        width:'100%',
    });
</script>

<script>
$('#gallery_upload').click(function(){
var x; var y;
    x = document.getElementById("gallery_image").value;
    y = document.getElementById("tags").value;
    if (x == "") {
    	alert('Choose Image(s)')
        return false;
    }else if (y == "") {
    	alert('Choose Tag(s)')
        return false;
    };
this.disabled=true;
this.innerHTML='Working on it..';
this.form.submit();
});

	$('#add_tag').click(function(){
var a;
    a = document.getElementById("name").value;
     if (a == "") {
    	alert('Choose Tag(s)')
        return false;
    };
this.disabled=true;
this.innerHTML='Adding..';
this.form.submit();
});

$('#p_edit').click(function(){
var title;
 var body;
  // var tutorial;
   var img;
    var zip_file;
    title = document.getElementById("title").value;
    body = document.getElementById("body").value;
    // tutorial = document.getElementById("tutorial").value;
    img = document.getElementById("img").value;
    zip_file = document.getElementById("zip_file").value;
    if (title == "") {
    	alert('Choose Title')
        return false;
    }else if (body == "") {
    	alert('Choose Body')
        return false;
    }
    // else if (tutorial == "") {
    // 	alert('Choose Tutorial link')
    //     return false;
    // }
    else if (img == "") {
    	alert('Choose Image')
        return false;
    }
    else if (zip_file == "") {
    	alert('Choose Zip file')
        return false;
    };
this.disabled=true;
this.innerHTML='Updating..';
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
    	alert('Choose Body')
        return false;
    }
    // else if (tutorial == "") {
    // 	alert('Choose Tutorial link')
    //     return false;
    // }
    else if (avatar == "") {
    	alert('Choose Image')
        return false;
    };
    // else if (zip_file == "") {
    // 	alert('Choose Zip file')
    //     return false;
    // };
this.disabled=true;
this.innerHTML='Creating..';
this.form.submit();
});

    $('#add_category').click(function(){
var a;
    a = document.getElementById("name").value;
     if (a == "") {
        alert('Choose category')
        return false;
    };
this.disabled=true;
this.innerHTML='Adding..';
this.form.submit();
});

$('#change_color').click(function(){
var app_color; var font_color;
    app_color = document.getElementById("app_color").value;
    font_color = document.getElementById("font_color").value;
    if (app_color == "") {
        alert('Choose a Color')
        return false;
    }else if (font_color == "") {
        alert('Choose a bootstrap class')
        return false;
    };
this.disabled=true;
this.innerHTML='Changing the color..';
this.form.submit();
});

$('#change_nr').click(function(){
var app_color; var font_color;
    app_color = document.getElementById("app_color").value;
    font_color = document.getElementById("font_color").value;
    if (app_color == "") {
        alert('Choose a Color')
        return false;
    }else if (font_color == "") {
        alert('Choose a bootstrap class')
        return false;
    };
this.disabled=true;
this.innerHTML='Updating..';
this.form.submit();
});

$('#search_btn').click(function(){
var query;
    query = document.getElementById("query").value;
     if (query == "") {
        alert('No query')
        return false;
    };
this.disabled=true;
this.innerHTML='<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>';
this.form.submit();
});

$('#role').click(function(){
var query;
    query = document.getElementById("add_role").value;
     if (query == "") {
        alert('No query')
        return false;
    };
this.disabled=true;
this.innerHTML='Creating..';
this.form.submit();
});



$('#permission').click(function(){
var a;
    a = document.getElementById("add_permission").value;
     if (a == "") {
        alert('No a')
        return false;
    };
this.disabled=true;
this.innerHTML='Creating..';
this.form.submit();
});

$('#givePermission').click(function(){
var a;
    a = document.getElementById("give_permission").value;
     if (a == "") {
        alert('No permission has been given')
        return false;
    };
this.disabled=true;
this.innerHTML='Giving Permission..';
this.form.submit();
});



</script>
