$(function(){
  var urlsend = 'controller/generalcontroller.php';

  $.ajaxSetup({
    url: urlsend,
    method: 'POST',
    beforeSend: '',
    error: ''
  });

  function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
  /* Capture on login click event */
  $("#vn-login").on("click", completeLogin);

  function completeLogin(){
    $("#vn-signup, #vn-watch").css("display", "none");
    $("#vn-login-password, #vn-login-submit, #vn-login-username").css("display", "block");
    $("#vn-login").attr("placeholder", "email or phone");
    $("#vn-form-init").attr("name", "form-login");
  }
  //Login section
  $(document).on('submit', 'form[name="form-login"]', function(){
      var vnlogin = $("#vn-login").val();
    var dados = $(this).serialize()+'&option=login&name='+vnlogin;
    $.ajax({
      data: dados,
      beforeSend: '',
      error: '',
      success: function (retorno){
        if (retorno == 'yes') {
          window.location="home/";
        }
        else{
          $('.msg').html("Try again, password and email are wrong");
        }
      }
    })

    return false;
  })

  /* Signup click and field display */
  $("#vn-signup").on("click", showSignup);

  function showSignup(){
    $("#vn-login, #vn-watch").css("display", "none");
    $("#vn-signup-password, #vn-signup-submit, #vn-user-type, #vn-signup-username").css("display", "block");
    $("#vn-signup").attr("placeholder", "email");
    $("#vn-form-init").attr("name", "form-registeruser");
  }
  //register session
  $(document).on('submit', 'form[name="form-registeruser"]', function(){
    var dados = $(this).serialize()+'&option=signup';
    $.ajax({
      data: dados,
      beforeSend: '',
      error: '',
      success: function (retorno){
        alert(retorno)
        // if (retorno==1) {
        //   window.location.href='picture.php';
        // }
        // else {
        //   alert(retorno);
        // }
      }
    })

    return false
  })
  /* Just watch button active */
  $("#vn-just-watch").on("click", justWatch);

  function justWatch(){
    $(".vn-login-cover").css("display", "none");
    $(".vn-menu").css("display", "block");
  }


  //Set tags on picture of Feeds
  $(document).on('click', '#feedimg', function(e){
    var imgtag = $(this).parent(); // get the div to append the tagging list
    mouseX = e.pageX //- $(imgtag).offset().left; // x and y axis
    mouseY = e.pageY //- $(imgtag).offset().top;
    $('#tagit').remove(); // remove any tagit div first
    $(imgtag).append('<div id="tagit" class=""><div class="box"><i class="material-icons w3-text-white">gps_fixed</i></div><div class="name"><form name="form-description" class="" method="post" action=""><input type="text" name="postcomment" id="tagname" class="w3-input w3-border" style="width: 100%;outline: none; " /><input type="text" class="w3-input w3-small" style="height: 0.5em"><input type="submit" name="btnsave" value="Descrever" id="btnsave" class="w3-btn w3-white w3-round w3-border w3-border-dark-grey" /></form></div><button class="w3-btn w3-small w3-right w3-round" onclick="document.getElementById("tagit").style.display="none""><i class="material-icons">close</i></button></div>');
    $('#tagit').css({top:mouseY-10,left:mouseX-10});
    $('#tagname').focus();
  });
  $(document).on('click','#btncancel',function(){
    $('#tagit').fadeOut();
  });

  //Send description on picture
  $(document).on('submit', 'form[name="form-description"]', function(){
    var dados = $(this).serialize();
    $('form[name="form-description"]').ajaxForm({
      success: function (retorno){
        console.log()
      }
    })
    return false;
  })

  //Send description on picture


  $(document).on('submit', ' form[name="form-photo"]', function(){
    return false;
  })





})
