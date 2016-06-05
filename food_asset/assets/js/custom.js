/** 
  * Template Name: SpicyX
  * Version: 1.0  
  * Template Scripts
  * Author: MarkUps
  * Author URI: http://www.markups.io/

  Custom JS
  

  1. FIXED NAVBAR 
  2. TOP SLIDER
  3. ABOUT US (SLICK SLIDER) 
  4. DATEPICKER
  5. SHEF SLIDER (SLICK SLIDER)
  6. TESTIMONIAL SLIDER (SLICK SLIDER)
  7. COUNTER
  8. MIXIT FILTER (FOR GALLERY)
  9. FANCYBOX (FOR PORTFOLIO POPUP VIEW) 
  10. MENU SMOOTH SCROLLING
  11. HOVER DROPDOWN MENU
  12. SCROLL TOP BUTTON
  13. PRELOADER  

  
**/

jQuery(function($){


  /* ----------------------------------------------------------- */
  /*  1. FIXED NAVBAR 
  /* ----------------------------------------------------------- */
    
    
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 200) {
        jQuery('.mu-main-navbar').addClass('navbar-bg');
        jQuery('.navbar-brand').addClass('navbar-brand-small');        
      } else {
          jQuery('.mu-main-navbar').removeClass('navbar-bg');          
          jQuery('.navbar-brand').removeClass('navbar-brand-small');          
      }
  });
  
  /* ----------------------------------------------------------- */
  /*  2. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    jQuery('.mu-top-slider').slick({
      dots: false,
      infinite: true,
      arrows: true,
      speed: 500,     
      autoplay: true,
      fade: true,
      cssEase: 'linear'
    });

  /* ----------------------------------------------------------- */
  /*  3. ABOUT US (SLICK SLIDER)
  /* ----------------------------------------------------------- */      

    jQuery('.mu-abtus-slider').slick({
      dots: false,
      infinite: true,
      arrows: false,
      speed: 500,
      autoplay: true,
      fade: true,      
      cssEase: 'linear'
    });

  /* ----------------------------------------------------------- */
  /*  4. DATEPICKER
  /* ----------------------------------------------------------- */      

    jQuery('#datepicker').datepicker();

  /* ----------------------------------------------------------- */
  /*  5. SHEF SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    jQuery('.mu-chef-nav').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 2,
      autoplay: true,
      autoplaySpeed: 2500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

  /* ----------------------------------------------------------- */
  /*  6. TESTIMONIAL SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    jQuery('.mu-testimonial-slider').slick({
      dots: true,      
      infinite: true,
      arrows: false,
      autoplay: true,
      speed: 500,      
      cssEase: 'linear'
    });       

  /* ----------------------------------------------------------- */
  /*  7. COUNTER
  /* ----------------------------------------------------------- */

    jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });

  /* ----------------------------------------------------------- */
  /*  8. MIXIT FILTER (FOR GALLERY) 
  /* ----------------------------------------------------------- */  

    jQuery(function(){
      jQuery('#mixit-container').mixItUp();
    });

  /* ----------------------------------------------------------- */
  /*  9. FANCYBOX (FOR PORTFOLIO POPUP VIEW) 
  /* ----------------------------------------------------------- */ 
      
    jQuery(document).ready(function() {
      jQuery(".fancybox").fancybox();
    });  

  /* ----------------------------------------------------------- */
  /*  10. MENU SMOOTH SCROLLING
  /* ----------------------------------------------------------- */ 

    //MENU SCROLLING WITH ACTIVE ITEM SELECTED

      // Cache selectors
      var lastId,
      topMenu = $(".mu-main-nav"),
      topMenuHeight = topMenu.outerHeight()+13,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

      // Bind click handler to menu items
      // so we can get a fancy scroll animation
      menuItems.click(function(e){
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
        jQuery('html, body').stop().animate({ 
            scrollTop: offsetTop
        }, 1500);           
         jQuery('.navbar-collapse').removeClass('in');  
        e.preventDefault();
      });

      // Bind to scroll
      jQuery(window).scroll(function(){
         // Get container scroll position
         var fromTop = $(this).scrollTop()+topMenuHeight;
         
         // Get id of current scroll item
         var cur = scrollItems.map(function(){
           if ($(this).offset().top < fromTop)
             return this;
         });
         // Get the id of the current element
         cur = cur[cur.length-1];
         var id = cur && cur.length ? cur[0].id : "";
         
         if (lastId !== id) {
             lastId = id;
             // Set/remove active class
             menuItems
               .parent().removeClass("active")
               .end().filter("[href=#"+id+"]").parent().addClass("active");
         }           
      })
  
  /* ----------------------------------------------------------- */
  /*  11. HOVER DROPDOWN MENU
  /* ----------------------------------------------------------- */ 
  
  // for hover dropdown menu
    jQuery('ul.nav li.dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    
  /* ----------------------------------------------------------- */
  /*  12. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

    jQuery(window).scroll(function(){
      if (jQuery(this).scrollTop() > 300) {
        jQuery('.scrollToTop').fadeIn();
      } else {
        jQuery('.scrollToTop').fadeOut();
      }
    });
     
    //Click event to scroll to top

    jQuery('.scrollToTop').click(function(){
      jQuery('html, body').animate({scrollTop : 0},800);
      return false;
    });
  
  /* ----------------------------------------------------------- */
  /*  13. PRELOADER
  /* ----------------------------------------------------------- */

   jQuery(document).ready(function() { // makes sure the whole site is loaded      
      jQuery('#aa-preloader-area').delay(300).fadeOut('slow'); // will fade out      
    })
   
   $(document).ready(function(){
      orderTask();
      makeLink();
      allOrderListener();
   });

  
});

function allOrderListener(){

  $('.order-action').click(function(){
    if(confirm("ยืนยันรายการอีกครั้ง")){

      var token = $("#csrf").val();
      var code = $(this).attr('data-code');
      var action = $(this).attr('data-action');

      $.ajax({
        url : 'complete/orders',
        type :'post',
        dataType : 'json',
        data :{
          "_token" : token,
          "code" : code,
          "method" : action
        },
        success : function(xhr,status,data){
          if(status == 'success'){
            if(xhr.status){
              $("."+code).fadeOut('slow');
              $("#td-list").attr("data-count",xhr.count).html(xhr.count + " รายการ");
            }else{
              alert(xhr.describe);
              return false;
            }
          }
        },
        error : function(xhr,status,data){
          alert(status);
          alert(data.responseText);
        }
      });

    }

  });

}

function makeLink(){
  $('.make-link').hover(function(event) {
    var a = $(this).attr('data-h');
    $(this).click(function(){
      location.href = a;
    });
  });
}

function setLabelPrice(price,amount,sum,summary){
  // sum = price * amount; 
  $("#price").html("ราคาต่อชาม " + price + "฿");
  $("#sum").html("รวมทั้งสิ้น " + sum + "฿");
  $("#amount").html(amount + " ชาม");

  // MAKE SUMMARY
  summary = "";
  var leng = $(".mu-make-order-content .row .mu-readmore-btn-active").length;
  $(".mu-make-order-content .row .mu-readmore-btn-active").each(function(index, el) {
    summary += $(this).html() + " ";
    if(index != (leng - 1)){
      summary += "+ ";
    }else{
      summary += "| " + amount + " ชาม" + " ราคา" + sum + " ฿";
    }
  });

  if(summary != ""){
    $("#lb-result").html(summary);
  }
  return summary;
}

function sumCategoryPrice(call){
  var i = 0;
  $(call).each(function(index, el) {
    i = i + parseInt($(this).attr('data-price'));
  });
  return i;
}

function orderTask(){
  var summary = met = "";
  var pNoodle = pSoup = pTopping = pOther = pExtra = 0;
  var active = {".noodle":0, ".soup":0, ".topping":0, ".other":0, ".extra":0};
  var sum = price = 0;
  var amount = 1;
  var sumNoodle = sumCategoryPrice('.noodle');
  var sumSoup = sumCategoryPrice('.soup');
  var sumTopping = sumCategoryPrice('.topping');
  var sumOther = sumCategoryPrice('.other');
  var sumExtra = sumCategoryPrice('.extra');

  sum = price * amount; 
  summary = setLabelPrice(price,amount,sum,summary);

  $("#cancel").click(function(event) {
    pNoodle = pSoup = pTopping = pOther = pExtra = sum = price = 0;
    summary = "";
    active = {".noodle":0, ".soup":0, ".topping":0, ".other":0, ".extra":0};
    amount = 1;
    sumNoodle = sumCategoryPrice('.noodle');
    sumSoup = sumCategoryPrice('.soup');
    sumTopping = sumCategoryPrice('.topping');
    sumOther = sumCategoryPrice('.other');
    sumExtra = sumCategoryPrice('.extra');
    $(".mu-readmore-btn").removeClass('mu-readmore-btn-active');
    $("#lb-result").html("");
    sum = price * amount; 
    summary = setLabelPrice(price,amount,sum,summary);
  });

  $("#order").click(function(event) {
    var s,str="";
    $(".mu-make-order-content .row[data-mustselect='true']").each(function(index, el) {
      s = $(this).attr("id");

      if(active[s] == 0){
        str += "  " + $(this).children('h3').html() + "\n";
      }
    });
    if(str != ""){
      alert("คุณจำเป็นต้องเลือกรายการเหล่านี้\n" + str);
    }else{

      /**
      * SENDING ORDER.
      **/      
      var token = $("#_token").val();

      $.ajax({
        url : 'make/orders',
        type : 'post',
        dataType : 'json',
        data : {
          "_token" : token,
          "amount" : amount,
          "price" : price,
          "total" : sum,
          "summary" : $("#lb-result").html()
        },
        success : function(xhr,status,data){
          //ON SUCCESS
          /*alert("On Success " + xhr.sss);
          alert("On Success " + data.responseText);
          alert("On Success " + status);*/
          if(status = 'success'){
            alert(xhr.describe);
            $("#cancel").click();
            $('html, body').animate({
                  scrollTop: $("#mu-make-order").offset().top
            }, 2000);
          }
        },
        error : function(xhr,status,data){
          /*alert("On Success " + xhr.sss);
          alert("On Success " + data.responseText);
          alert("On Success " + status);*/
          // alert(status);
          location.reload();
        }
      });
    }

  });
  
  $('#plus').click(function(event) {
    if(amount < 15){
      amount++;
    }else{
      return false;
    }
    sum = price * amount; 
    summary = setLabelPrice(price,amount,sum,summary);
  });

  $('#minus').click(function(event) {
    if(amount > 1){
      amount--;
    }else{
      return false;
    }
    sum = price * amount; 
    summary = setLabelPrice(price,amount,sum,summary);
  });


  $('.mu-readmore-btn').click(function(event) {
    var method = $(this).attr("data-method");
    var category = $(this).parent().attr("id");
    var type = $(this).parent().attr("data-type");
    var thisPrice = parseInt($(this).attr("data-price"));

    if(type === "choice"){
      var status = $(this).is('.mu-readmore-btn-active');
      if(status){
        $(this).toggleClass('mu-readmore-btn-active');
        //Minus
        active[category] = 0;
        price -= thisPrice;

        if(method == "increment"){
          sum = price * amount; 
        }else if(method == "replacement"){
          price = sum = thisPrice;
          met = "";
        }
        
        summary = setLabelPrice(price,amount,sum,summary);
      }else{
        $(this).toggleClass('mu-readmore-btn-active');
        //Plus
        active[category] = 1;
        price += thisPrice;
        
        if(method == "increment"){
          sum = price * amount; 
        }else if(method == "replacement"){
          price = sum = thisPrice;
          met = method;
        }
        
        summary = setLabelPrice(price,amount,sum,summary);
      }
    }else if(type === "select"){
      var status = $(this).is('.mu-readmore-btn-active');
      if(status){
        $(category).removeClass('mu-readmore-btn-active');
        //Clear
        switch (category) {
          case ".noodle":
            pNoodle = 0;
            price -= thisPrice;
            break;
          case ".soup":
            pSoup = 0;
            price -= thisPrice;
            break;
          case ".topping":
            pTopping = 0;
            price -= thisPrice;
            break;
          case ".other":
            pOther = 0;
            price -= thisPrice;
            break;
          case ".extra":
            pExtra = 0;
            price -= thisPrice;
            break;
          default:
            // statements_def
            break;
        }
        active[category] = 0;
        
        if(method == "increment"){
          sum = price * amount; 
        }else if(method == "replacement"){
          price = sum = thisPrice;
          met = "";
        }
        
        summary = setLabelPrice(price,amount,sum,summary);
      }else{
        $(category).removeClass('mu-readmore-btn-active');
        $(this).toggleClass('mu-readmore-btn-active');
        //Clear then Plus
        switch (category) {
          case ".noodle":
            price -= pNoodle;
            price += thisPrice;
            pNoodle = thisPrice;
            break;
          case ".soup":
            price -= pSoup;
            price += thisPrice;
            pSoup = thisPrice;
            break;
          case ".topping":
            price -= pTopping;
            price += thisPrice;
            pTopping = thisPrice;
            break;
          case ".other":
            price -= pOther;
            price += thisPrice;
            pOther = thisPrice;
            break;
          case ".extra":
            price -= pExtra;
            price += thisPrice;
            pExtra = thisPrice;
            break;
          default:
            // statements_def
            break;
        }     
        active[category] = 1; 
        
        if(method == "increment"){
          sum = price * amount; 
        }else if(method == "replacement"){
          price = sum = thisPrice;
          met = met;
        }
        
        summary = setLabelPrice(price,amount,sum,summary);
      }
    }else if(type === "hit"){
      return false;
    }

  });
}