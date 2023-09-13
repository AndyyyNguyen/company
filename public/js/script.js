$('button.delete').click(function (e) { 
	const dataUrl = $(this).attr('data-href');
	$('#exampleModal a').attr('href',dataUrl);
});

function gotoPage(page, event){
	event.preventDefault();
	const currentLink = window.location.href;
	const url = new URL(currentLink);
	url.searchParams.set('page',page);
	window.location.href=url.href;
}

$(".form-login").validate({
	rules: {
		// simple rule, converted to {required:true}
		email: {
			required: true,
			email: true,
		},
		password: {
			required: true,
		},

	},
	messages: {

		email: {
			required: 'Vui lòng nhập email',
			email: 'Vui lòng nhập đúng định dạng email. vd: abc@gmail.com',
		},
		password: {
			required: 'Vui lòng nhập mật khẩu',

		},

	},

})


$(".form-dep-create,.form-dep-edit").validate({
    rules: {
	department_id:{
		required:true,
	},
    department_name: {
        required: true,
        maxlength: 256,
        regex: /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
      },
    },

    messages: {
		department_id: {
            required: 'Vui lòng nhập department_id',
        },
		department_name: {
            required: 'Vui lòng nhập department_name',
            maxlength: 'Vui lòng nhập không quá 256 ký tự',
            regex: 'Vui lòng nhập đúng định dạng họ và tên. Không bao gồm số hoặc ký tự đặc biệt.'
        },
      }

  });

  $(".form-emp-create,.form-emp-edit").validate({
    rules: {
	employee_id:{
		required:true,
		},
   	first_name: {
        required: true,
        maxlength: 256,
        regex: /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
      },
	  last_name: {
        required: true,
        maxlength: 256,
        regex: /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
      },
	  email: {
        required: true,
        maxlength: 256,
      },

	  phone_number: {
        required: true,

      },
	  hire_date: {
        required: true,
      },
	  salary: {
        required: true,
      },
	  department_name: {
        required: true,
      },
	},


    messages: {
		employee_id:{
			required: 'Vui lòng nhập employee_id'
			},
		   first_name: {
			required: 'Vui lòng nhập first_name',
			maxlength: 'Vui lòng nhập không quá 256 ký tự',
			regex: 'Vui lòng nhập đúng định dạng tên. không có ký tự đặc biệt.'
		  },
		  last_name: {
			required: 'Vui lòng nhập last_name',
			maxlength: 'Vui lòng nhập không quá 256 ký tự',
			regex: 'Vui lòng nhập đúng định dạng tên. không có ký tự đặc biệt.'
		  },
		  email: {
			required: 'Vui lòng nhập email',
			maxlength: 'Vui lòng nhập không quá 256 ký tự',
			email: 'Vui lòng nhập đúng định dạng gmail. không có ký tự đặc biệt.'
		  },
	
		  phone_number: {
			required: 'Vui lòng nhập phone_number',
	
		  },
		  hire_date: {
			required: 'Vui lòng nhập hire_date',
		  },
		  salary: {
			required: 'Vui lòng nhập salary',
		  },
		  department_name: {
			required: 'Vui lòng nhập department_name',
		  },
      }
});

  $.validator.addMethod(
    "regex",
    function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "Please check your input."
  ); 