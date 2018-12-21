$(document).ready(function() {
    var alterClass = function() {
      var ww = document.body.clientWidth;
      if (ww < 450) {
        $('#stickytop').removeClass('sticky-top');
      } else if (ww >= 451) {
        $('#stickytop').addClass('sticky-top');
      };
    };
    $(window).resize(function(){
      alterClass();
    });
    alterClass();
});
// ajax call obj
function ajxobj (url, method, dataType, data) {
    this.jxhr = $.ajax({
      url: url,
      method: method,
      dataType: dataType,
      data: data
    });
  }
  // form submit
function AJAXSubmit (formid) {
    var form = document.getElementById(formid);
    if (!form.action) { alert('returned'); return; }
    var oReq = new XMLHttpRequest();
    if (form.method.toLowerCase() === "post") {
      oReq.open("post", form.action);
      oReq.send(new FormData(form));
    } else { }
    oReq.onload = function () {
    //   $('#AddPostSuccess').html(this.responseText);
      console.log(this.responseText);
    //   if(this.responseText === 'Successfully posted') {
    //     $('#PostTitle, #PostContent, #PostType, #PostCategory, #PostFile').val('');
    }
}
  
  // post type select
$(document).on('change', '#PostType', function () {
var post = new ajxobj ('/farinwatab/posts/get_category/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#PostCategory').html(res); 
    });
});
// new post
$(document).on('click', '#SubmitPost', function (e) {
    e.preventDefault();
    AJAXSubmit('NewPostForm');
});