function deposit() {
    $.post('/pay/fk', {_token: $('meta[name="csrf-token"]').attr('content'), size:$('#amount-deposit').val()}).then(e=>{
        
    });
}