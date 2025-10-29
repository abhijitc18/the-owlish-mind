var base_url = window.location.href;

$("#inquiryForm").validate({
  rules: {
    name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
    phone: {
      required: true,
      digits: true,
      maxlength: 10,
      minlength: 10,
    },
    subject: {
      required: true,
    },
    message: {
      required: true,
    },
  },
  messages: {
    name: {
      required: "Please enter name",
    },
    email: {
      required: "Please enter email",
      email: "Please enter valid email",
    },
    phone: {
      required: "Please enter phone number",
      digits: "Please enter only digit",
      maxlength: "Enter maximum 10 digit",
      minlength: "Enter minimum 10 digit",
    },
    subject: {
      required: "Please enter subject",
    },
    message: {
      required: "Please enter message",
    },
  },
});
