(function() {
    $('#exampleBasic').wizard({
        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
    $('#exampleBasic2').wizard({
        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
    $('#exampleValidator').wizard({
        onInit: function() {
            $('#validation').formValidation({
                framework: 'bootstrap',
                // fields: {
                //     name: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'The College name is required'
                //             },
                //             stringLength: {
                //                 min: 3,
                //                 max: 100,
                //                 message: 'The username must be more than 3 and less than 100 characters long'
                //             },
                //             regexp: {
                //                 regexp: /^[a-zA-Z]+$/,
                //                 message: 'The College name can only consist of alphabetical A-Z a-z'
                //             }
                //         }
                //     },
                //     email: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'The email address is required'
                //             },
                //             emailAddress: {
                //                 message: 'The input is not a valid email address'
                //             }
                //         }
                //     },
                //     mobile: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'College Mobile Number is required'
                //             },

                //             regexp: {
                //                 regexp: /^[6789]{1}\d{5}\d{4}$/,
                //                 message: 'The Mobile Number should be start from 6789'
                //             }
                //         }
                //     },
                //     state: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'College Mobile State is required'
                //             },
                //         }
                //     },
                //     city: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'College Mobile City is required'
                //             },
                //         }
                //     },
                //     clg_address: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'College Mobile Address is required'
                //             },
                //         }
                //     },
                //      clg_location: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'Please Select Location'
                //             }

                //         }
                //     }
                // }
            });
        },
        validator: function() {
            var fv = $('#validation').data('formValidation');

            var $this = $(this);

            // Validate the container
            fv.validateContainer($this);

            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
                return false;
            }

            return true;
        },
        onFinish: function() {
            var fd = new FormData($('#validation')[0]);
                   url = $('#validation').attr( 'action' );
                    $.ajax({
                        
                    type: 'POST',
                    url: url,
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    enctype: 'multipart/form-data',
                    success: function(op) {
                        console.log(op);
                        var res = $.parseJSON(op);
                        if (res.res == 1) {
                            swal("Message Finish!",res.msg );
                        }
                    }
                })
        }
    });

    $('#accordion').wizard({
        step: '[data-toggle="collapse"]',

        buttonsAppendTo: '.panel-collapse',

        templates: {
            buttons: function() {
                var options = this.options;
                return '<div class="panel-footer"><ul class="pager">' +
                    '<li class="previous">' +
                    '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' +
                    '</li>' +
                    '<li class="next">' +
                    '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' +
                    '<a href="' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' +
                    '</li>' +
                    '</ul></div>';
            }
        },

        onBeforeShow: function(step) {
            step.$pane.collapse('show');
        },

        onBeforeHide: function(step) {
            step.$pane.collapse('hide');
        },

        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
})();


$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap1"); //Fields wrapper
    var add_button      = $(".add_field_button1"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
    x++; //text box increment
    $(wrapper).append('<div> <div class="form-group"><div class="col-md-12"><label class="col-xs-3 control-label"></label> <br><div class="col-xs-5"><div class ="col-md-3"></div><div class ="col-md-3"></div><div class ="col-md-3"></div><div class ="col-md-3"></div></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_offer[]" placeholder="Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_duration[]" placeholder="Duration Of Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_total_fee[]" placeholder="Overall Fee Of Course" ></div></div><div class ="col-md-3"><div class="form-group"><input type="file" class="form-control textbox" id="" accept=".xlsx,.xls,.doc,.docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name[]" placeholder="" ></div></div><div class ="col-md-12"><label class="col-xs-3 control-label">Add Departments</label><br><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_department[]" placeholder="Add Departments" ></div></div></div><button type="button" id="add-more" class="btn btn-danger remove_field1" style="float:left; padding: 5px;"> Remove</button><br></table></div>'); //add input box
}
});

$(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});


// function ShowHideDiv() {
//     var chkYes = document.getElementById("chkYes");
//     var dvtext = document.getElementById("dvtext");
//     var chkYes1 = document.getElementById("chkYes1");
//     var dvtext1 = document.getElementById("dvtext1");
//     dvtext.style.display = chkYes.checked ? "block" : "none";
//     dvtext1.style.display = chkYes1.checked ? "block" : "none";
//     }

function ShowHideDiv(action) {
  
    if(action=='show')
    {
        $('#dvtext').show();
    }
    else{
        $('#dvtext').hide();
        $('#txtBoxUn').val('');
    }

    }


    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
