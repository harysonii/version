$(window).on("load",function (){
               
              // if( typeof window.localStorage.getItem("login") !== 'undefined' && window.localStorage.getItem("login") != 1) {
              //      window.location.href="login.html";
    
              //  }else {
    
	           /*$.ajax({
                
                  type: 'get',
                  url: 'http://gothere.000webhostapp.com/check_status.php',
                   dataType: 'html',
                  success: function (response) {
                        
                        if (response == "ok") {
                            
                        }else {
                            window.location.href="login.html";
                        }
                        
                    }
                      
                   
               });  */
                     preloaderFadeOutTime = 2500;
        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
                
               
                });
