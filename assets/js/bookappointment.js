// JavaScript Validation and AJAX Submission
$("#bookappointment").validate({
  rules: {
    full_name: { required: true },
    email: { required: true, email: true },
    phone: { required: true, digits: true, maxlength: 10, minlength: 10 },
    service: { required: true },
    date: { required: true },
  },
  messages: {
    full_name: { required: "Please enter name" },
    email: {
      required: "Please enter email",
      email: "Please enter a valid email",
    },
    phone: {
      required: "Please enter phone number",
      digits: "Enter only digits",
      maxlength: "Enter 10 digits",
      minlength: "Enter 10 digits",
    },
    service: { required: "Please select a service" },
    date: { required: "Please select a date" },
  },
});
