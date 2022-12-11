var paysys = 0;
var witdrawsys = 0;

function deposit() {
    $.post('/pay/fk', {_token: $('meta[name="csrf-token"]').attr('content'), size:$('#amount-deposit').val()}).then(e=>{
        if(e.success){
            setTimeout(()=>location.href=e.redirect,1000);
        }
        if(e.error){
            return n(e.message, 'error');
        }
    });
}