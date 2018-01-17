

$(document).ready(function() {
    $('#search').keyup(function(e) {
        var search = $(this).val();
        // Set $_POST['keywords'] = search
        $.post("test.php", {
            keywords: search
        }, function(data, status) {
            // Callback function fills empty div with results
            $("#items").html(data);
        })
    })
});