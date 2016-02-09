/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
$('.logindropdown').hide();
$(document).ready(function(){
  $('.loginbutton').click(function(e){
     e.preventDefault();
    $(this).next('#ddlogin').fadeToggle();
    $(this).toggleClass('active');          
});

});
