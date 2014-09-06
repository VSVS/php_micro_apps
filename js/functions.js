//title fade in
$(document).ready(function(){
            $('#vsvs1').fadeIn(5000);
          });
//timer game
$('#Box').click(function(){
          $(this).fadeOut('fast');
        });

        function makeBox(){

          var time = Math.random()
              time = time*5000;

          setTimeout(function(){
              if (Math.random()>0.5){
                document.getElmentById("box").style.borderRadius="100px";
              }
              else{
                document.getElementByID("box").style.borderRadius="0";
              }
          });
        }
//code for weather app
                $('#findMyWeather').click(function(event){
            event.preventDefault();

            $('.alert').hide();

            if ($('#city').val()!=""){
              $.get("scraper.php?city="+$('#city').val(),
                function ( data ){
                  if (data==""){
                    $("#success").hide();
                    $("#fail").fadeIn();
                  }
                  else{
                    $("#fail").hide();            
                    $("#success").html(data).fadeIn();

                  }
                });
                } 
            else{
              $("#noCity").fadeIn();
            }
          });

