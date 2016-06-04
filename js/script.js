$(function(){
  $(document).on('click', '#feedimg', function(e){
    var imgtag = $(this).parent(); // get the div to append the tagging list
    mouseX = e.pageX //- $(imgtag).offset().left; // x and y axis
    mouseY = e.pageY //- $(imgtag).offset().top;
    $('#tagit').remove(); // remove any tagit div first
    $(imgtag).append('<div id="tagit"><div class="box w3-round-2"></div><div class="name"><div class="text "></div><form name="form-description" method="post" action=""><input type="text" name="postcomment" id="tagname" class="w3-input w3-border " style="outline: none" /><input type="submit" name="btnsave" value="Descrever" id="btnsave" class="w3-btn w3-white w3-border " /></form></div></div>');
    $('#tagit').css({top:mouseY-10,left:mouseX-10});
    $('#tagname').focus();
  });


    $(document).on('submit', 'form[name="form-description"]', function(){
      return false;
    })

})
