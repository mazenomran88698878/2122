// JavaScript to toggle between the forms
function toggleForm(form) {
    // Hide all forms
    const allForms = document.querySelectorAll('.form-container');
    allForms.forEach(formContainer => formContainer.classList.remove('active'));

    // Show the selected form
    const activeForm = document.getElementById(form);
    if (activeForm) {
        activeForm.classList.add('active');
    }
}

// Initialize the first form to show
window.onload = function() {
    toggleForm('login'); // Start by showing the login form by default
};
document.getElementById('security_question').addEventListener('change', function() {
    const question = this.value;
    const answerSelect = document.getElementById('security_answer');

    // Clear existing answer options
    answerSelect.innerHTML = '<option value="" disabled selected>Select Answer</option>';

    // Populate answers based on selected question
    switch (question) {
        case 'favorite_movie':
            answerSelect.innerHTML += '<option value="The Godfather">The Godfather</option>';
            answerSelect.innerHTML += '<option value="Titanic">Titanic</option>';
            answerSelect.innerHTML += '<option value="Inception">Inception</option>';
            answerSelect.innerHTML += '<option value="The Dark Knight">The Dark Knight</option>';
            break;

        case 'first_car':
            answerSelect.innerHTML += '<option value="Honda Civic">Honda Civic</option>';
            answerSelect.innerHTML += '<option value="Toyota Corolla">Toyota Corolla</option>';
            answerSelect.innerHTML += '<option value="Ford Mustang">Ford Mustang</option>';
            answerSelect.innerHTML += '<option value="Chevrolet Malibu">Chevrolet Malibu</option>';
            break;

        case 'birth_place':
            answerSelect.innerHTML += '<option value="New York">New York</option>';
            answerSelect.innerHTML += '<option value="Los Angeles">Los Angeles</option>';
            answerSelect.innerHTML += '<option value="Chicago">Chicago</option>';
            answerSelect.innerHTML += '<option value="Miami">Miami</option>';
            break;

        case 'first_school':
            answerSelect.innerHTML += '<option value="Greenfield High">Greenfield High</option>';
            answerSelect.innerHTML += '<option value="Oakridge Academy">Oakridge Academy</option>';
            answerSelect.innerHTML += '<option value="Maple Leaf School">Maple Leaf School</option>';
            answerSelect.innerHTML += '<option value="Sunshine Valley School">Sunshine Valley School</option>';
            break;

        case 'favorite_food':
            answerSelect.innerHTML += '<option value="Pizza">Pizza</option>';
            answerSelect.innerHTML += '<option value="Sushi">Sushi</option>';
            answerSelect.innerHTML += '<option value="Burgers">Burgers</option>';
            answerSelect.innerHTML += '<option value="Ice Cream">Ice Cream</option>';
            break;
    }
});