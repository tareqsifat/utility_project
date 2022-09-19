$(function () {
    const init_delete_function = () => {
        $('.delete_btn').off().on('click', function (e) {
            let attr = $(this).data('attr');
            console.log(attr);
            $('.delete_form').attr('action', $(this).data('attr'));
            $('.modal_method_class').val($(this).data('method'));
        });
    };

    init_delete_function();

    

    $('input').on('focus', function (e) {
        $(this).siblings('span').html('');
    });

    $('select').on('focus', function (e) {
        $(this).siblings('span').html('');
    });

    $('textarea').on('focus', function (e) {
        $(this).siblings('span').html('');
    });

    $('.insert_form').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: (res) => {
                Toaster('success', 'data inserted successfully.');
                $(this).trigger('reset');
                $('.note-editable').html('');
                $('.preloader').hide();
                console.log(formData);
            },
            error: (err) => {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                        console.log(formData);
                    }
                }
                Toaster('error', 'Check below for errors');
                $('.preloader').hide();
            },
            beforeSend: () => {
                $('.preloader').show();
            },
        });
    });

    $('.update_form').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: (res) => {
                Toaster('success', 'data updated successfully.');
                $(this).trigger('reset');
                $('.preloader').hide();
            },
            error: (err) => {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                    }
                }
                Toaster('error', 'Check below for errors');
                $('.preloader').hide();
            },
            beforeSend: () => {
                $('.preloader').show();
            },
        });
    });
    function Toaster(icon, message) {
        Toast.fire({
            icon: icon,
            title: message,
        });
    }

    $('.component_form_submit').off().on('click', function () {
        let form = $(this).parents('.component_form');
        let target_select = $(this).parents('.component_form').data('target_select');
        let action = $(this).parents('.component_form').attr('action');
        let inputs = $(form[0]).children('.modal-body').children('.form-group').children('div').children('input');
        let textareas = $(form[0]).children('.modal-body').children('.form-group').children('div').children('textarea');
        let selects = $(form[0]).children('.modal-body').children('.form-group').children('div').children('.select_ontime').children('select');

        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method', 'POST');

        for (const key in inputs) {  
            if (inputs.hasOwnProperty.call(inputs, key)) {
                const element = inputs[key];
                if (parseInt(key) >= 0 && typeof parseInt(key) === "number")
                $(temp_form).append($(element).clone());
            }
        }
        for (const key in textareas) {
            if (textareas.hasOwnProperty.call(textareas, key)) {
                const element = textareas[key];
                if (parseInt(key) >= 0 && typeof parseInt(key) === "number") 
                $(temp_form).append($(element).clone());
            }
        }
        for (const key in selects) {
            if (selects.hasOwnProperty.call(selects, key)) {
                const element = selects[key];
                if (parseInt(key) >= 0 && typeof parseInt(key) === "number") 
                $(temp_form).append($(element).clone());
            }
        }

        let formData = new FormData(temp_form[0]);
        $.ajax({
            url: action,
            type: "POST",
            data: formData,
            success: (res) => {
                console.log(res);
                $('.component_preloader').hide();
                Toaster('success', 'data inserted succesfully');
                $('.modal').modal('hide');
                $('.component_form select').html('');
                $('.component_form textarea').val('');
                $('.component_form input').val('');
                console.log(target_select);
                $(target_select).prepend(res.html);
                $(target_select).val(res.value);
            },
            error: (err) => {
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.component_form .${key}`).text(element);
                    }
                }
                Toaster('error', 'Check below for errors');
                $('.component_preloader').hide();
            },
            beforeSend: () => {
                $('.component_preloader').show();
            },
        });
    });

    $('.parent_select').off().on('change', function () {
        let value = $(this).val();
        let control_url = $(this).data('this_field_control_route');
        let control_class = $(this).data('this_field_will_control');

        $.get(control_url + '/' + value, (res) => {
            console.log(res);
            // if (control_class) {
            $('.' + control_class).html(res);
            // }
        });
    });

    $('.load_options').on('click', function (e) {
        e.preventDefault();
        let url = $(this).data('url');
        let control_class = $(this).siblings().data('this_field_will_control');
        $.get(url, (res) => {
            $(this).siblings('select').html(res);
            if (control_class) {
                $('.' + control_class).html(res);
            }
        });
    });

    let selected_input_field = '';
    
    const get_all_image = () => {
        $.get("/file-manager/get-files", (res) => {
            $(".file_manager_image_list").html(res);
            init_delete_function();
            slected_image_function();
        });
    };
    
    $(".input_file_body").on("click", function () { 
        get_all_image();
        selected_input_field = $(this).children('input')[0];
    });

    $('.fm_file_importer').on('change', function(){
        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method', 'POST');
        $(temp_form).append($(this).clone());
        let formData = new FormData(temp_form[0]);

        $.post('/file-manager/store-file', formData, (res) => {
            if (res) {
                $(this).val('');
                get_all_image();
                Toaster('success', 'Image Uploaded successfully');
            }
        });
    });
    
    let selected_image = [];
    let selected_image_id = [];
    const slected_image_function = () =>{
        selected_image = [];
        selected_image_id = [];
        $('.fm_checkbox').on('click', function(){
            let value = $(this).data('name');
            let value_id = $(this).val();
            let check_image = selected_image.includes(value);
            if (check_image) {
                selected_image = selected_image.filter( name=>name != value);
                selected_image_id = selected_image_id.filter( id=>id != value_id);
            }
            else{
                selected_image.push(value);
                selected_image_id.push(value_id);
                
            }
            // console.log(value, selected_image);
        });

        $('#fm_confirm_btn').on('click', function(e){
            e.preventDefault();
            if (selected_image.length){
                if ($(selected_input_field)[0].multiple == false) {
                    $(selected_input_field).val(selected_image[0]);
                    $(selected_input_field).siblings('img').attr('src', '/' + selected_image[0]);
                }
                else{
                    $(selected_input_field).val(JSON.stringify(selected_image_id));
                    $(selected_input_field).siblings('img').remove();
                    for (let index = 0; index < selected_image.length; index++) {
                        const element = selected_image[index];
                        $(selected_input_field).parent('.input_file_body').prepend('<img src="/'+element+'" style="height: 50px; margin: 5px;" alt="preview product image" />')
                    }
                }
                $('#fileManagerModal').modal('hide');
            }
        })
    } 
    

    

    
});
