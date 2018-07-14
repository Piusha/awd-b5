(function($){

    var init = function(){

        $('#entry').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                data:$(this).serialize(),
                method:$(this).attr('method')
            }).done(function(resp) {
               if(resp.status == "errror"){
                   alert(resp.error)
               }else{
                   location.href = '/';
               }
               
            });
        });

        $('#login').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                data:$(this).serialize(),
                method:$(this).attr('method')
            }).done(function(resp) {
               if(resp.status == "errror"){
                   alert(resp.error)
               }else{

                    window.localStorage.setItem('__auth',JSON.stringify(resp.user))
                   location.href = '/home';
               }
               
            });
        });
       
        
    }

    init();
})(jQuery)