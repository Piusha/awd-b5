(function($){

    var init = function(){

        loadData();
        $('.load-users').on('click',function(){
            loadData();
        })
        
    }
    var loadData = function(){
        var auth = JSON.parse(window.localStorage.getItem('__auth'));
        console.log(auth);
        $.ajax({
            url: "/api/users",
            datType: 'JSON',
            data:"token="+auth.token
          }).done(function(data) {
              if(data.status == 'error'){
                  alert(data.error)
              }else{
                var usersTmpl = data.users.map(function(user){
                    return '<tr><td><a href="/users/'+user.id+'">'+user.id+'</a></td><td>'+user.name+'</td><td>'+user.email+'</td></tr>'
                });

                $('#tb_data_wrapper').html(usersTmpl);
              }
                
          });
    }

    
    init();
})(jQuery)