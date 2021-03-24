$("#mn").click(function(){
    $.ajax({
        type:"GET",
        url: "https://randomuser.me/api/",
        success: function(procurar){
            $("#nome").html("Nome: " + procurar.results[0].name.first)
            $("#idade").html("Idade: " + procurar.results[0].dob.age)
            $("#email").html("Email: " + procurar.results[0].email)
        }
    });
});
