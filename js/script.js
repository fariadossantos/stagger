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

  //Set tags on picture of Feeds
  $(document).on('click', '#feedimg', function(e){
    var imgtag = $(this).parent(); // get the div to append the tagging list
    mouseX = e.pageX //- $(imgtag).offset().left; // x and y axis
    mouseY = e.pageY //- $(imgtag).offset().top;
    $('#tagit').remove(); // remove any tagit div first
    $(imgtag).append('<div id="tagit" class=""><div class="box"><i class="material-icons w3-text-white">gps_fixed</i></div><div class="name"><form name="form-description" class="" method="post" action=""><input type="text" name="postcomment" id="tagname" class="w3-input w3-border" style="width: 100%;outline: none; " /><input type="submit" name="btnsave" value="Descrever" id="btnsave" class="w3-btn w3-white w3-round w3-border w3-border-dark-grey" /></form></div><button class="w3-btn"><i class="material-icons">close</i></button></div>');
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
    //register session

    $(document).on('submit', 'form[name="form-signupuser"]', function(){
      var dados = $(this).serialize()+'&option=signup';
      $.ajax({
        data: dados,
        beforeSend: '',
        error: '',
        success: function (retorno){
          if (retorno==1) {
            window.location.href='picture.php';
          }
          else {
            alert(retorno);
          }
        }
      })

      return false
    })


    //Login section
    $(document).on('submit', 'form[name="login"]', function(){
      var dados = $(this).serialize()+'&option=login';
      $.ajax({
        data: dados,
        beforeSend: '',
        error: '',
        success: function (retorno){
          alert(retorno)
        }
      })

      return false;
    })

})
