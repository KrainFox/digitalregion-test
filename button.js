$(function() {//Обработчик нажатия на кнопки сделанный с помощью Jquery
    $(document).ready(function() {
        $('.autorization').click(function() {
            $.ajax({
                url:"/route.php",
                type:"POST",
                dataType:"text",
                data:({
                    funcName:"login",
                    login: $('.login').val(),
                    password: $('.password').val()
                }),
                success: function(data){
                    let sucesLog = JSON.parse(data);//.parse(data);
                    if (sucesLog.check){
                        $('.logForm').toggleClass('hidden');
                        $('.cabinet').toggleClass('hidden');
                        $('.stat').toggleClass('hidden');
                        $('.login').val(sucesLog.login);
                        $('.password').val(sucesLog.pass);
                        $('.famil').val(sucesLog.famil);
                        $('.name').val(sucesLog.name);
                        $('.parent').val(sucesLog.parent);
                        $('.post').val(sucesLog.post);
                        $('.email').val(sucesLog.email);
                        $('.phone').val(sucesLog.phone);
                    }else{
                        alert(sucesLog.massage);
                    }
                }
            });
        });
    });
});