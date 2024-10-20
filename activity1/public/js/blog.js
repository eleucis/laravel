$(document).ready(function(){
    alert("hello");

    createBlogForm();   
});


function createBlogForm(){
    var form = "#createBlogForm";

    $(form).on('submit', function(event){
        event.preventDefault();

        var url=$(this).attr('data-action');
        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                populateData(response);
            },
            error: function(response){
                console.log(response);
            }
        });
    });
}

function populateData(response){

    var row = '<tr>';
    row += '<th scope ="row">' +response.title+'</th>';
    row += '<th>' +response.description+'</th>';
    // row += '<th>' +response.category.name+'</th>';
    row += '</tr>';

    $('#table').find('tbody').prepend(row);


}