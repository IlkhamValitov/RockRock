$(window).ready(function() {
     const switches = $('.switches div');
     const news_sections = $('.news_section');
     const logo = $('.logo');
     logo.on('mouseover', function(){
          logo.css('cursor', 'pointer');
     })

     
          for(let i = 0; i < news_sections.length; i++) {
               console.log(1);
               setInterval(function() {
                    console.log(2);
                    news_sections[i].removeClass('show');
                    switches[i].removeClass('hidden_switch');
               }, 1000);
               
                    
               }
               
          


























     // setInterval(function(){
     //      console.log(1);
     //      for(let i = 0; i < switches.length; i++) { 
     //           for(let a = 0; a < news_sections.length; a++){
     //                if($(news_sections[a]).hasClass('show')){
     //                     $(news_sections[a]).removeClass('show');
     //                     $(switches[a]).removeClass('hidden_switch');
     //                     if(a >= switches.length - 1){
     //                          $(switches[0]).addClass('hidden_switch');
     //                          break;
     //                     }
     //                     else {
     //                          $(switches[a + 1]).addClass('hidden_switch');
     //                          break;
     //                     } 
     //                } 
     //           }  
     //           if(i >= news_sections.length - 1){
     //                $(news_sections[0]).addClass('show');

     //           }
     //           else $(news_sections[i + 1]).addClass('show');
     //      }
     // }, 1000);//следует упаковать конструкцию ниже в функцию setInterval
          

     //Фрагмент кода закоммичен ввиду того, что требуется переделать функционал отображения слайдера
     // for(let i = 0; i < switches.length; i++) { 
     //      $(switches[i]).click(function() {
     //           for(let a = 0; a < news_sections.length; a++){
     //                if($(news_sections[a]).hasClass('show')){
     //                     $(news_sections[a]).removeClass('show');
     //                     $(switches[a]).removeClass('hidden_switch');
     //                     $(this).addClass('hidden_switch');
     //                     break; 
     //                } 
     //           }  
     //           $(news_sections[i]).addClass('show'); 
     //      });
     // for(let a = 0; a < news_sections.length; a++){
     //      if($(news_sections[a]).hasClass('show')){
     //           $(news_sections[a]).removeClass('show');
     //                $(switches[a]).removeClass('hidden_switch');
     //                // $(this).addClass('hidden_switch');
     //                break; 
     //      } 
     // } 
     //Незакоммиченный код выше должен давать эффект автоматического перелистывания слайдера

     const search = $('.search');
     search.on('mouseover',function () {
          $('.search > .hover_change').addClass('img_visible');
          $('.search > .default_img').addClass('img_hidden');
     });
     search.on('mouseout',function () {
          $('.search > .hover_change').removeClass('img_visible');
          $('.search > .default_img').removeClass('img_hidden');
     });
     search.click(function () {
          search.addClass('hidden_search');
          $('.search_form').addClass('show_search_form');
     })
     $('.central_container').click(function () {
          search.removeClass('hidden_search');
          $('.search_form').removeClass('show_search_form');
     })
     
}); 