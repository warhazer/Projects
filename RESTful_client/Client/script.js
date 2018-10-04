$(document).ready(function(){
    $("#tablediv").hide();

    $("form input[type=submit]").click(function() {
        $("input[type=submit]", $(this).parents("form")).removeAttr("clicked");
        $(this).attr("clicked", "true");
    });

    $(document).off("submit");
    $(document).on("submit", "#create", function(e){
        e.preventDefault();
        var temp = {
            "name": $("form#create input[name=name]").val(),
            "url": $("form#create input[name=url]").val(),
            "theDesc": $("form#create input[name=theDesc]").val()
        };
        var data = JSON.stringify(temp);
        $.post("RESTful.php", data,
            function(request){
                alert(request)
            });
    });

    $(document).on("submit", "#retrieve", function(e){
        e.preventDefault();
        var temp;
        if($("form#retrieve input[name=submit][clicked=true]").val() === "Retrieve By Name")
            temp = {"name" : $("form#retrieve input[name=retname]").val()};
        else
            temp = {"id" : $("form#retrieve input[name=id]").val()};

        $.get("RESTful.php/?params="+encodeURIComponent(JSON.stringify(temp)),
            function(request){
                var arr = JSON.parse(request);
                var markup = "";
                for(var i = 0; i < arr.length; i++){
                    markup +=
                        "<tr>" +
                            "<td>"+ arr[i].id +"</td>"+
                            "<td>"+ arr[i].name +"</td>"+
                            "<td>"+ arr[i].url +"</td>"+
                            "<td>"+ arr[i].theDesc +"</td>"+
                            "<td>"+ arr[i].theDate +"</td>"+
                        "</tr>";
                }
                $("table tbody").append(markup).slideDown(1000);
                $("#tablediv").slideDown(1000);
            });
    });

    $(document).on("submit", "#update", function(e){
        e.preventDefault();
        if($("form#update input[name=id]").val() === "")
            alert("hello");
        var temp = {"id" : $("form#update input[name=id]").val()}
        if($("form#update input[name=name]").val() !== "")
            temp["name"] = $("form#update input[name=name]").val();
        if($("form#update input[name=url]").val() !== "")
            temp["url"] = $("form#update input[name=url]").val();
        if($("form#update input[name=theDesc]").val() !== "")
            temp["theDesc"] = $("form#update input[name=theDesc]").val();
        var data = JSON.stringify(temp);

        $.ajax({
            url: 'RESTful.php',
            type: 'PUT',
            data: data,
            success: function(request) {
                alert(request);
            }
        });
    });

    $(document).on("submit", "#delete", function(e){
        e.preventDefault();
        var temp = {"id" : $("form#delete input[name=id]").val()}
        var data = JSON.stringify(temp);

        $.ajax({
            url: 'RESTful.php',
            type: 'DELETE',
            data: data,
            success: function(request) {
                alert(request);
            }
        });
    });
});