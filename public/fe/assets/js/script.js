function showForm(formId, activeButtonId, inactiveButtonId) {
    // Hide both forms initially
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'none';
    
    // Show the selected form
    document.getElementById(formId).style.display = 'block';
    
    // Change the color of the selected button and reset the other
    const activeButton = document.getElementById(activeButtonId);
    const inactiveButton = document.getElementById(inactiveButtonId);

    // Apply active button styles
    activeButton.style.backgroundColor = '#007BFF';  // Active background color
    activeButton.style.color = 'white';              // Active text color

    // Reset inactive button styles
    inactiveButton.style.backgroundColor = '#f0f0f0'; // Default background color
    inactiveButton.style.color = 'black';             // Default text color
}
document.addEventListener("DOMContentLoaded", function() {
    // By default, show Form 1 and apply the active style to Button 1
    showForm('form1', 'btn1', 'btn2');
});

function toggleOtherInput(selectElement) {
    const otherInput = document.getElementById('otherInput');

    // Check if the selected option is 'Others'
    if (selectElement.value === 'Others') {
        otherInput.style.display = 'block'; // Show input field
    } else {
        otherInput.style.display = 'none';  // Hide input field
    }
}