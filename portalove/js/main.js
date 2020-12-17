$(document).ready(function () {

    $('.sbutton').click(function () {
        var ID = $(this).attr('data-id');
        $.ajax({
            method: "GET",
            url: "ajax.php", //.php?id="+id
            data: {
                ID: ID, //id
            },
            success:function (result) {
                $('#footer').html(result);

            }

        });
    });

    $('#pridaj').click(function () {
        $.ajax({
            url: "ajax2.php",
            success:function (result) {
                $('#footeradmin').html(result);

            }

        });
    });

    $('#edituj').click(function () {
        $.ajax({
            url: "ajax3.php",
            success:function (result) {
                $('#footeradmin').html(result);

            }

        });
    });

    $('#vymaz').click(function () {
        $.ajax({
            url: "ajax4.php",
            success:function (result) {
                $('#footeradmin').html(result);

            }

        });
    });

});