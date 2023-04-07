/*----------------------------------------------------------------------------------------------------------------
                                        function confirmation in delete
----------------------------------------------------------------------------------------------------------------*/
function confirmation(){
    
    return confirm('Voulez-vous vraiment supprimer ?')
}


/*----------------------------------------------------------------------------------------------------------------
                                                Add users
----------------------------------------------------------------------------------------------------------------*/
$(document).on('click','#btn-add',function(e) {
    e.preventDefault();
    
    //alert('ok');
    var data = $("#user_form").serialize();
    //var email = $("#email").val();

    if ($('#name').val() === "" || $('#email').val() === "" || $('#phone').val() === "" || $('#city').val() === "" ) {
        // $('#err').css("display", "block");
        // setTimeout(() => {
        //     $('#err').css("display", "none");
        // }, 3000);
        // return
        alert('Les champs sont vides');
        // return
        //location.reload();
        //$('#addEmployeeModal').modal('hide');
        return	
    }

    $.ajax({
        data: data,
        //data: {data, email,},
        type: "post",
        url: "../controllers/users_add.php",
        success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    alert('Data added successfully !'); 
                    location.reload();						
                }
                else if(dataResult.statusCode==201){
                   alert(dataResult);
                }
                // if (dataResult.statusCode==400) {
                //     alert('User exist in database !'); 
                // } else if(dataResult.statusCode==200){
                //     alert('Data added successfully !'); 
                //     location.reload();		
                // } else if(dataResult.statusCode==201){
                //    alert(dataResult);
                // }
        }
    });
});


/*----------------------------------------------------------------------------------------------------------------
                                Affichage des infos de la bdd dans la table users
----------------------------------------------------------------------------------------------------------------*/
$.getJSON("../controllers/users_all.php", function(result) {
    let e=1;
    for (var i = 0; i < result.length; i++ ) {   
        let trTag = $("<tr id='row' data-id=" + result[i]["id"] + " data-name=" + result[i]["name"] + " data-email=" + result[i]["email"] + " data-phone=" + result[i]["phone"] + " data-city=" + result[i]["city"] + "></tr>");
        $("#table").append(trTag);
        $(trTag).append("<td>" + e++ + "</td>");
        $(trTag).append("<td>" + result[i]["name"] + "</td>");
        $(trTag).append("<td>" + result[i]["email"] + "</td>");
        $(trTag).append("<td>" + result[i]["phone"] + "</td>");
        $(trTag).append("<td>" + result[i]["city"] + "</td>");
        // $(trTag).append("<td><button id='edit' type='button' class='mx-1 btn btn-sm btn-outline-warning' data-toggle='modal' data-target='#editEmployeeModal'>Editer</button><a href='../controller/produitDel.php?ref=" + result[i]["id"] + "' class='btn btn-sm btn-outline-danger' onclick='return confirmation();'>Supprimer</a></td>");
        // $(trTag).append("<td><button id='edit' type='button' data-toggle='modal' data-target='#editEmployeeModal'><i class='material-icons update' title='Edit'>&#xE254;</i></button><button><a href='#deleteEmployeeModal' class='delete' data-id=" + result[i]["id"] + "' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></button></td>");
        // $(trTag).append("<td><button><a href='#delete' class='delete' data-id=" + result[i]["id"] + " data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></button></td>");
           $(trTag).append("<td><button class='btn btn-warning' id='edit' type='button' data-toggle='modal' data-target='#editEmployeeModal'><i class='fa fa-pencil' title='Edit'></i></button></td>");
        // $(trTag).append("<td><button><a href='#deleteEmployeeModal' class='delete' data-id=" + result[i]["id"] + "' data-toggle='modal'><i class='bi bi-trash' data-toggle='tooltip' title='Delete'></i></a></button></td>");
           $(trTag).append("<td><button class='btn btn-danger delete' data-id=" + result[i]["id"] + " data-name=" + result[i]["name"] + " data-toggle='modal' data-target='#deleteEmployeeModal'><i class='fa fa-trash' data-toggle='tooltip' title='Delete'></i></button></td>");
        // $(trTag).append("<td><button><a href='../controllers/users_delete.php?del=" + result[i]["id"] + "' class='delete' onclick='return confirmation();'><i class='bi bi-trash' title='Delete'></i></a></button></td>");
    }
});


/*----------------------------------------------------------------------------------------------------------------
                            Affichage des infos d'un user par son id dans le modal
----------------------------------------------------------------------------------------------------------------*/
$(document).on("click", "#edit", function(e) {
    e.preventDefault();

    var $row = $(this).closest('tr');

    $('#id_u').val($row.data('id'))
    document.getElementById('id_u').readOnly = true;

    $('#name_u').val($row.data('name'));
    $('#email_u').val($row.data('email'));
    $('#phone_u').val($row.data('phone'));
    $('#city_u').val($row.data('city'));

});


/*----------------------------------------------------------------------------------------------------------------
                            Update de l'infos d'un user par son id depuis le modal
----------------------------------------------------------------------------------------------------------------*/
$(document).on('click','#update',function(e) {
    e.preventDefault();

    var data = $("#update_form").serialize();

    if ($('#name_u').val() === "" || $('#email_u').val() === "" || $('#phone_u').val() === "" || $('#city_u').val() === "" ) {
        // $('#err').css("display", "block");
        // setTimeout(() => {
        //     $('#err').css("display", "none");
        // }, 3000);
        // return
        alert('Champs sont vides');
        return
        	
    } else {

        $.ajax({
            data: data,
            type: "post",
            url: "../controllers/users_edit.php",
            success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#editEmployeeModal').modal('hide');
                        alert('Data updated successfully !'); 
                        //alert($("#name_u").val() + ' Data updated successfully !'); 
                        location.reload();						
                    }
                    else if(dataResult.statusCode==201){
                       alert(dataResult);
                    }
            }
        });
    }
});


/*----------------------------------------------------------------------------------------------------------------
                            Delete l'info d'un user par son id depuis le modal
----------------------------------------------------------------------------------------------------------------*/
$(document).on("click", ".delete", function(e) { 
    e.preventDefault();

    //$('#deleteEmployeeModal').modal('show');
    var user_id = $(this).attr("data-id");
    	$('#id_d').val(user_id);
    var name = $(this).attr("data-name");
       $('.usersname').val(name);
        
});

$(document).on("click", "#delete", function(e) {
    e.preventDefault();

    var user_id_del = $('#id_d').val();
    $.ajax({
        url:"../controllers/users_delete.php",
        type: 'post',
        data:{
            id:user_id_del
        },
        dataType: 'json',
        // success: function(){
        //     alert('Data deleted successfully !');
        //     location.reload();
        // }
        success:function(data){
            if (data.statusCode==200) {
                alert('Data deleted successfully !'); 
                location.reload();	
            } else {
                alert('Error of Data deleted !');
            }
            
        }
    });
});


/*----------------------------------------------------------------------------------------------------------------
                                       Sign In of user
----------------------------------------------------------------------------------------------------------------*/
$(document).on("click", "#sign-in", function(e) { 
    e.preventDefault();
    
    // $('#signInModal').modal('show');
    var name = $('#name').val();
    var email = $('#email').val();

    if (name === "" || email === "" ) {
        // $('#err').css("display", "block");
        // setTimeout(() => {
        //     $('#err').css("display", "none");
        // }, 3000);
        // return
        alert('Champs sont vides');
        return	
    } else {
        $.ajax({
            url:"controllers/get_users.php",
            type: 'post',
            data:{
                name: name,
                email: email,
            },
            success: function(response){
                if (response) {
                    alert('Data successfully !');
                    location.replace('views/users.php');
                } else {
                    alert('Name or email incorrect !');
                }
                
            }
        });
    }

});