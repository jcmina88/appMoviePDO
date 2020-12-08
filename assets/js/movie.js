/* 
******* Declaración de variable local
        para la lista de categorias en movie ******
*/

var arrayCategories = []

//Función para agregar elemento
$("#addElement").click(function (e)
{
    //Deshabilita el envío por http
    e.preventDefault()
    let idCategory = $("#category").val()
    let nameCategory = $("#category option:selected").text()

    if(idCategory != '')
    {
        if(typeof existCategory(idCategory) === 'undefined')
        {
            arrayCategories.push(
            {
                'id': idCategory,
                'name': nameCategory
            })
        }
        else
        {
            alert("La categoria ya se encuentra selecciona")
        }
        //Mostrar en HTML la lista de caterías
        showCategories()
    }
    else
    {
        alert("Debe seleccionar una categoría")
    }
})

function existCategory(idCategory)
{
    return arrayCategories.find(function(category)
    {
        return category.id == idCategory
    })
}

function showCategories()
{
    $("#categories-list").empty()

    arrayCategories.forEach(function(category)
    {
        $("#categories-list").append('<div class="form-group"><button onclick="removeElement('+category.id+')" class="btn btn-danger">-</button><span>'+category.name+'</span></div>')
    })
}

function removeElement(idCategory)
{
    let index = arrayCategories.indexOf(existCategory(idCategory))
    arrayCategories.splice(index, 1)
    showCategories()
}

// Metodo para hacer el envío del formulario
("#submit").click(function(e)
{
    e.preventDefault()

    let url = "?controller=movie&method=save"
    //Objeto de parametros para enviar al controlador (Backed)
    let params = 
    {
        name: $('#name').val(),
        description: $('#description').val(),
        user_id: $('#user_id').val(),
        categories: arrayCategories,
    }

    //Metodo Ajax para enviar al formulario
    $.post(url, params, function (response)
    {
        //Respuesta correcta del request
        if(typeof response.error !== 'undefined')
        {
            alert (response.message)
        }
        else
        {
            //Redireccionar a la lista movies
            location.href = "?controller=movie"
        }
    }, 'json').fail(function(err)
    {
        alert("Insersión fallida("+err.responseText+")")
    })
})
