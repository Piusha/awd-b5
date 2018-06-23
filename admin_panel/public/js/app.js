(function($){

    var init = function(){

        $('.load-users').on('click',function(){
            $.ajax({
                url: "/api/users",
                datType: 'JSON'
              }).done(function(data) {
                    var usersTmpl = data.map(function(user){
                        return '<tr><td><a href="/users/'+user.id+'">'+user.id+'</a></td><td>'+user.name+'</td><td>'+user.email+'</td></tr>'
                    });
    
                    $('#tb_data_wrapper').html(usersTmpl);
              });
        })
        
    }

    init();
})(jQuery)