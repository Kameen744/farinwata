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
    if (!form.action) { alert('returned'); return;}
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
// admin right links click
$(document).on('click', '.admnrightlink', function() {
  var post = new ajxobj ('/farinwatab/admin/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
      $('#AdminMainPage').html(res);
    });
});
// add new user 
$(document).on('click', '#AddUserSubmit', function () {
  var AddUserName = $('#AddUserName').val();
  var AddUserPassword = $('#AddUserPassword').val();
  var post = new ajxobj ('/farinwatab/admin/create_new_user/','POST', 'HTML', 
  {'AddUserName' : AddUserName, 'AddUserPassword' : AddUserPassword});
    post.jxhr.done(function (res) {
      $('#AddUserSuccess').html(res);
    });
});
// delete user
$(document).on('click', '#delUser', function () {
  var post = new ajxobj ('/farinwatab/admin/delete_user/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#AdminMainPage').html(res); 
    });
});
// manage categories post type select
$(document).on('change', '#catType', function () {
  var post = new ajxobj ('/farinwatab/admin/manage_categories/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#catTable').html(res); 
    });
});
// manage categories add new category
$(document).on('click', '#catAdd', function () {
  var post = new ajxobj ('/farinwatab/admin/add_category/', 'POST', 'HTML', 
  {catType : $('#catType').val(), catText : $('#catText').val()});
    post.jxhr.done(function (res) {
        $('#catTable').html(res); 
    });
});
// manage categories del category
$(document).on('click', '#delCategory', function () {
  var post = new ajxobj ('/farinwatab/admin/delete_category/', 'POST', 'HTML', 
  {delCatTypeId : $('#catType').val(), delCatId : $(this).val()});
    post.jxhr.done(function (res) {
        $('#catTable').html(res); 
    });
});
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