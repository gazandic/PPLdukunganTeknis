/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var i=1;
$(function(){
  $('#button-1').prop('checked',true);
  $('#jumbo > :gt(0)').hide();
  setInterval(function(){
      $('#jumbo > :first-child').fadeOut().next()
              .fadeIn().end().appendTo('#jumbo');
      i++;
      if(i>=(document.getElementById("jumbo").childNodes.length/2)){
          i=1;
      }
      $('#button-'+i).prop('checked',true);
  }, 7000);
  $('#slideshow-wrap input').click(function(){
      console.log(this.value);
      while(i!=this.value){
          $('#jumbo > :first-child').hide().next()
                    .fadeIn().end().appendTo('#jumbo');
          i++;
          if(i>=(document.getElementById("jumbo").childNodes.length/2)){
              i=1;
          }
      }
  });
});
$(function(){
  $('#listtesti > :gt(0)').hide();
  setInterval(function(){
      $('#listtesti > :first-child').hide().next()
              .show().end().appendTo('#listtesti');
  }, 7000);
});
