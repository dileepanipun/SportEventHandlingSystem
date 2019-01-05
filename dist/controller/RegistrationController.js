

$('#notification-pane').hide();

$('#close-notification').click(function () {
    $('#notification-pane').hide();
});

$('#saveMemberBTN').click(function () {

    let memberForm = $('#memberForm').serialize();

    $.ajax({
        url:"api/service/MemberService.php",
        method: "POST",
        async: true,
        data: memberForm
    }).done(function (resp) {

        if (resp > 0) {
            $('#notification-pane').show();
        }else {
            $('#notification-pane').hide();
        }
    });

});

$('#refreshTable').click(function () {

    $('#memberDetailTbl').empty();

    $.ajax({
        url: "api/service/MemberService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {

        for (var i in resp) {
            var tempVar = resp[i];

            let row = "<tr><th scope=\"row\">"+tempVar[0]+"</th><td>"+tempVar[1]+"</td><td>"+tempVar[2]+"</td><td>"+tempVar[3]+"</td><td>"+tempVar[4]+"</td><td>"+tempVar[5]+"</td><td>"+tempVar[6]+"</td><td>"+tempVar[7]+"</td></tr>";

            $('#memberDetailTbl').append(row);
        }

    });

});