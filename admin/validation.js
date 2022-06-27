   function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 08 || charCode == 09)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
function passwordStrength(password){

  var desc = new Array();
  desc[0] = "15%";
  desc[1] = "30%";
  desc[2] = "45%";
  desc[3] = "70%";
  desc[4] = "85%";
  desc[5] = "100%";
  var score   = 0;

  //if password bigger than 6 give 1 point
  if (password.length >= 3) score++;

  //if password has both lower and uppercase characters give 1 point  
  if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

  //if password has at least one number give 1 point
  if (password.match(/\d+/)) score++;

  //if password has at least one special caracther give 1 point
  if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;
  if ( password.match(/.[1,2,3,4,5,6,7,8,9,0]/) ) score++;
  //if password bigger than 12 give another 1 point
  if (password.length > 6) score++;
  document.getElementById("passwordDescription").innerHTML = desc[score];
   document.getElementById("passwordStrength").className = "strength" + score;
}






//phone number
   function onlyNumber(e, t) {
                   var fieldLength = document.getElementById('strng6').value.length;
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return false;
                  else
                    return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
//end phone
   $(document).ready(function(){
    //s1
            $("#strng").blur(function(){
                if($('#strng').val().length  == 0){
                  $("#strng").css("border", "1px solid red");

                }
            });
            $("#strng").click(function(){
                  $("#strng").css("border", "1px solid white");
                  $('#passsth').hide();
            });
//s2
      $("#strng2").blur(function(){
          if($('#strng2').val().length  == 0){
            $("#strng2").css("border", "1px solid red");
          }
      });
      $("#strng2").click(function(){
            $("#strng2").css("border", "1px solid white");
            $('#passsth').hide();
      });

//s3
            $("#strng3").blur(function(){
                if($('#strng3').val().length  == 0){
                  $("#strng3").css("border", "1px solid red");
                }
            });
            $("#strng3").click(function(){
                  $("#strng3").css("border", "1px solid white");
                  $('#passsth').hide();
            });
            //s4
    $("#strng4").blur(function(){
    if($('#strng4').val().length  == 0){
      $("#strng4").css("border", "1px solid red");
    }
    });
    $("#strng4").click(function(){
    $("#strng4").css("border", "1px solid white");
    $('#passsth').hide();
    });
    //s5
    $("#strng5").blur(function(){
    if($('#strng5').val().length  == 0){
      $("#strng5").css("border", "1px solid red");
    }
    });
    $("#strng5").click(function(){
    $("#strng5").css("border", "1px solid white");
    $('#passsth').hide();
    });
    //s6
    $("#strng6").blur(function(){
    if($('#strng6').val().length  == 0){
      $("#strng6").css("border", "1px solid red");
    }
    });
    $("#strng6").click(function(){
    $("#strng6").css("border", "1px solid white");
    $('#passsth').hide();
    });

  });
   $(document).ready(function(){
    $('#passsth').hide();
    $("#pass").click(function(){
    $("#passsth").slideDown(200);
    });
   });
