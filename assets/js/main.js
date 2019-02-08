$.ajaxSetup({
  beforeSend:function(){
      // show gif here, eg:
      // $("#loading").show();
      console.log('beforesend');
  },
  complete:function(){
      // hide gif here, eg:
      // $("#loading").hide();
      console.log('complete req');
  }
});
// $.ajax({
//    global: false,
// });
// begining custome navbar
window.onload = function() {
  window.jQuery
    ? $(document).ready(function() {
        $(".sidebarNavigation .navbar-collapse")
          .hide()
          .clone()
          .appendTo("body")
          .removeAttr("class")
          .addClass("sideMenu")
          .show(),
          $("body").append("<div class='overlay'></div>"),
          $(".sideMenu").addClass(
            $(".sidebarNavigation").attr("data-sidebarClass")
          ),
          $(".navbar-toggle, .navbar-toggler").on("click", function() {
            $(".sideMenu, .overlay").toggleClass("open"),
              $(".overlay").on("click", function() {
                $(this).removeClass("open"), $(".sideMenu").removeClass("open");
              });
          }),
          $("body").on("click", ".sideMenu.open .nav-item", function() {
            $(this).hasClass("dropdown") ||
              $(".sideMenu, .overlay").toggleClass("open");
          }),
          $(window).resize(function() {
            $(".navbar-toggler").is(":hidden")
              ? $(".sideMenu, .overlay").hide()
              : $(".sideMenu, .overlay").show();
          });
      })
    : console.log("sidebarNavigation Requires jQuery");
};
// end of custom navbar

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
function checkEmpty(elm) {
  var val = $(elm).val();
  if (val == null || val == ""){
      return false;
  }else {
    return true;
  }
}
  // form submit
function AJAXSubmit (formid, elm) {
    var form = document.getElementById(formid);
    if (!form.action) { alert('returned'); return;}
    var oReq = new XMLHttpRequest();
    if (form.method.toLowerCase() === "post") {
      oReq.open("post", form.action);
      oReq.send(new FormData(form));
    } else { }
    oReq.onload = function () {
      var res = this.responseText;
      if(res !='Image size is too big' & res != 'Image is too small' & res != 'Invalid image type'){
        $('#ReporterMainPage').html(res);
      }else{
        $(elm).html(res);
      }
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
// Reporter
// dash link click
$(document).on('click', '.userdashlink', function () {
  var post = new ajxobj ('/farinwatab/posts/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
      $('#ReporterMainPage').html(res);
    });
});
// view post table page no 
$(document).on('click', '.postPage', function () {
  var post = new ajxobj ('/farinwatab/posts/view_posts/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#ReporterMainPage').html(res); 
    });
});
// del posts
$(document).on('click', '.deletePost', function () {
  var post = new ajxobj ('/farinwatab/posts/delete_post/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#ReporterMainPage').html(res); 
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
    if(checkEmpty(PostTitle) &  
    checkEmpty(PostType) & 
    checkEmpty(PostCategory) & 
    checkEmpty(PostContent) & 
    checkEmpty(PostFile)) {
      AJAXSubmit('NewPostForm', '#AddPostSuccess');
    } else {
      $('#AddPostSuccess').html('All fields are required');
    }
});
// upload video
$(document).on('click', '#SubmitVideo', function (e) {
  e.preventDefault();
    if(checkEmpty(VideoTitle) &  
    checkEmpty(VideoFile)) {
      AJAXSubmit('NewVideoForm', '#ReporterMainPage');
    } else {
      $('#AddPostSuccess').html('All fields are required');
    }
});
// delete video
$(document).on('click', '#deleteVid', function () {
  var post = new ajxobj ('/farinwatab/posts/delete_video/' + $(this).val(), 'POST', 'HTML');
    post.jxhr.done(function (res) {
        $('#ReporterMainPage').html(res); 
    });
});
// more next/prev
$(document).on('click', '#newsNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {newsNext : $(this).val(), newsPrevv : $('#newsPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#news').html(res);}
    });
});

$(document).on('click', '#newsPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {newsPrev : $(this).val(), newsNextt : $('#newsNext').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#news').html(res);}
      });
  }
});

$(document).on('click', '#intNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {intNext : $(this).val(), intPrevv : $('#intPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#intnews').html(res);}
    });
});

$(document).on('click', '#intPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    { intPrev : $(this).val(), intNextt : $('#intNext').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#intnews').html(res);}
      });
  }
});

$(document).on('click', '#polNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {polNext : $(this).val(), polPrevv : $('#polPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#polnws').html(res);}
    });
});

$(document).on('click', '#polPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {polPrev : $(this).val(), polNextt : $('#polNext').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#polnws').html(res);}
      });
  }
});

$(document).on('click', '#busNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {busNext : $(this).val(), busPrevv : $('#busPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#busnws').html(res);}
    });
});

$(document).on('click', '#busPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {busPrev : $(this).val(), busNextt : $('#busNext').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#busnws').html(res);}
      });
  }
});

$(document).on('click', '#hltNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {hltNext : $(this).val(), hltPrevv : $('#hltPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#hltnws').html(res);}
    });
});

$(document).on('click', '#hltPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {hltPrev : $(this).val(), hltNextt : $('#hltNext').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#hltnws').html(res);}
      });
  }
});

$(document).on('click', '#lcsprNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {lcsprNext : $(this).val(), lcsprPrevv : $('#lcsprPrev').val(), lcsprtype: $('#locSportVal').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#lcintspt').html(res);}
    });
});

$(document).on('click', '#lcsprPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {lcsprPrev : $(this).val(), lcsprNextt : $('#lcsprNext').val(), lcsprtype: $('#locSportVal').val()});
      post.jxhr.done(function (res) {
        if(res == null || res == ''){
      
        }else {$('#lcintspt').html(res);}
      });
  }
});

$(document).on('click', '#entNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {entNext : $(this).val(), entPrevv : $('#entPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == '' ){
  
      }else {$('#entnws').html(res);}
    });
});

$(document).on('click', '#entPrev', function () {
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {entPrev : $(this).val(), entNextt : $('#entNext').val()});
      post.jxhr.done(function (res) { 
        if(res == null || res == ''){
      
        }else {$('#entnws').html(res);}
      });
  }
  
});

$(document).on('click', '#vidNext', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {vidNext : $(this).val(), vidPrevv : $('#vidPrev').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#vidscol').html(res);}
    });
});

$(document).on('click', '#vidPrev', function () {
  console.log($(this).val());
  if($(this).val() >= 0){
    var post = new ajxobj ('/farinwatab/posts/prev_post/', 'POST', 'HTML',
    {vidPrev : $(this).val(), vidNextt : $('#vidNext').val()});
      post.jxhr.done(function (res) { 
        if(res == null || res == ''){
      
        }else {$('#vidscol').html(res);}
      });
  }
});

$(document).on('click', '#locSportTab', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {lcspr : 'Local', 'lcsproff': $('#lcsprPrev').val(), 'lcslmt': $('#lcsprNext').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#lcintspt').html(res);}
    });
});

$(document).on('click', '#intSportTab', function () {
  var post = new ajxobj ('/farinwatab/posts/next_post/', 'POST', 'HTML',
  {lcspr : 'International', 'lcsproff': $('#lcsprPrev').val(), 'lcslmt': $('#lcsprNext').val()});
    post.jxhr.done(function (res) {
      if(res == null || res == ''){
  
      }else {$('#lcintspt').html(res);}
    });
});
