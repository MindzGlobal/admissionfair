function loading(action,htmlData)
{
    if(action=='start') { $(".loading").html('<i class="fa fa-spinner fa-spin fa-fw"></i>'); }
    else { $(".loading").html(htmlData); }
}


function reSendOtp(url)
{
    var htmlData = $(".loading").html();
    loading('start',htmlData);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },    
        type: 'POST',
        url: url,
        data: { action:'resendOtp' },
        success: function(op) {
            loading('stop',htmlData);
            console.log(op);
            var res = $.parseJSON(op);
            if (res.res == 'success') {
                swal("Success",res.msg, res.res);
            }
            else
            {
                swal("Error",res.msg, res.res);
            }
        }
    })
}
