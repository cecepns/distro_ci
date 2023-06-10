function formatCurrency(id, value){
    if(parseInt(value)){
        let number = value;
        let input_field = $('#'+id);
        let input = number.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10 ) : 0;
        input_field.val(input.toLocaleString( "id-ID" ));

    } else {
        $("#"+id).val(0) 
    }
}
