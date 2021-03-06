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
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The College name is required'
                            },
                            stringLength: {
                                min: 3,
                                max: 100,
                                message: 'The username must be more than 3 and less than 100 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+$/,
                                message: 'The College name can only consist of alphabetical A-Z a-z'
                            }
                        }
                    },
                   email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    mobile: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile Number is required'
                            },

                            regexp: {
                                regexp: /^[6789]{1}\d{5}\d{4}$/,
                                message: 'The Mobile Number should be start from 6789'
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile State is required'
                            },
                        }
                    },
                    // city: {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'College Mobile City is required'
                    //         },
                    //     }
                    // },
                    college_address: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile Address is required'
                            },
                        }
                    },
                    college_category: {
                        validators: {
                            notEmpty: {
                                message: 'College Mobile City is required'
                            },
                        }
                    }
                }
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
                        if (res.res == 'success') {
                            swal("Message Finish!",res.msg, res.res );

                            window.location = "../select_booth";
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
                    '<li class="previous btn btn">' +
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
    $(wrapper).append('<div><div class="form-group"><div class ="col-md-12"><div style="border-top: 2px dotted #2b2b2b70;margin-bottom: 30px;"></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textboxui-autocomplete-input search_courses" autocomplete="off" id="search_text" name="course_offer[]" placeholder="Course" required></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox ui-autocomplete-input search_department" autocomplete="off" name="course_department[]" placeholder="Departments" required></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_duration[]" placeholder="Duration Of Course" required></div></div><div class ="col-md-3"><div class="form-group"><input type="text" class="form-control textbox" id="" name="course_total_fee[]" placeholder="Overall Fee Of Course" required></div></div><div class ="col-md-12"><div class="form-group"><textarea class="form-control textbox" id="" name="course_description[]" placeholder="Course Description" required></textarea></div></div><div class ="col-md-12"><div class ="col-md-6"></div><div class="form-group col-md-3 "><label class="control-label pull-right">Fee Structure (PDF Format):</label><br><br></div><div class="form-group col-md-3 pull-right"><input type="file" class="form-control textbox" id="" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="fee_structure_file_name[]" placeholder="" ></div></div></div><button type="button" id="add-more" class="btn btn-danger remove_field1" style="float:left; padding: 5px;"> Remove</button><br></div></div>'); //add input box
}
 // For auto Compleate Course
srcCourse = $('#ajaxCourseUrl').val();
$(".search_courses").autocomplete({
    source: function(request, response) {
        $.ajax({
            url: srcCourse,
            dataType: "json",
            data: {
                term : request.term
            },
            success: function(data) {
                response(data);
            }
        });
    },
    minLength:0,

});
 // For auto Compleate Course
 srcDepartment = $('#ajaxDeparmentUrl').val();
 $(".search_department").autocomplete({
     source: function(request, response) {
         $.ajax({
             url: srcDepartment,
             dataType: "json",
             data: {
                 term : request.term
             },
             success: function(data) {
                 response(data);
             }
         });
     },
     minLength:0,
 
 });
}).click();

$(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});


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
