$(document).ready(function(){
    $(".squad").click(function(){
        $(".squad_wraper").toggleClass('black');
    })

    $("#testform").find('button').click(function(event){
        event.preventDefault();
        var form = $("#testform");
        $.post(
            "/form/",
            {
                name: form.find('[name = name]').val(),
                phone:  form.find('[name = phone]').val(),
                mail:  form.find('[name = mail]').val(),
                testformvalidate: 'Y',
            },
            function (data){
                console.log(JSON.parse(data));
            }
        );
    })

});