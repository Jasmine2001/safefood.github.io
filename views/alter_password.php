<?php
require_once dirname(__FILE__) . "/item/head.php";
require_once dirname(__FILE__) . "/blog_nav.php";
?>

<div>
  <form 
    id="form"  
    onsubmit="return false" 
    action="/safefood/models/password_check.php"
  >
    <div>
      <label>
        <p class="label-txt"><b>請輸入舊密碼 password</b></p>
        <input 
          id="oldpassword" 
          name = "oldpassword"
          type="password" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    
    <div>
      <label>
        <p class="label-txt"><b>請輸入新密碼</b></p>
        <input 
          id="passwordInput" 
          name = "passwordInput" 
          type="password" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt"><b>再確認一次新密碼</b></p>
        <input 
          id="passwordConfirm" 
          name = "passwordConfirm" 
          type="password" 
          class="input" 
          autocomplete="Off" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <button>submit</button>
  </form>
</div>

<script>
$("#form").submit(function(e) {//callback function
  if ($("#passwordInput").val() !== $("#passwordConfirm").val()) {
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      text: '請再確認一次密碼',
    });
    return;
  } else {
    var params = {
      //soldpassword: md5($('#oldpassword').val()),
      update_p: md5($('#passwordInput').val()),
      //: md5($('#passwordConfrim').val()),
    };
    var query = jQuery.param(params);//序列化
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url + '?' + query,
    success: function(data) {
        if (data.includes('已註冊過')) {
          Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            html:data,
          });
        }
        if (data.includes('successfully')) {
          Swal.fire({
            icon: 'success',
            title: 'OK',
            text: 'Your password has been changed successfully',
            allowOutsideClick: false,
            showCancelButton: false,
          }).then((result) => {
            if (result.value) {
              window.location = '/safefood/views/login.php'
            }
          })
        }
      }
    });
    e.preventDefault(); // avoid to execute the actual submit of the form.
  }
});
</script>