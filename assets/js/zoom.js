/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#kotakgambarp").elevateZoom({
    constrainType:"height", constrainSize:274, zoomType: "lens", 
    cursor: 'pointer',gallery:'fotomini',
    galleryActiveClass: 'active', imageCrossfade: true, 
    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

$("#kotakgambarp").bind("click", function(e) { 
    var ez = $('#kotakgambarp').data('elevateZoom');	
    $.fancybox(ez.getGalleryList());
    
    
    return false; }); 