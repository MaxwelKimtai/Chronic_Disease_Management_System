document.addEventListener('DOMContentLoaded', initializeForm);
// Global state variables
let currentStep = 1;
const totalSteps = 3;

/**
 * Initializes the form and sets up event listeners.
 */
function initializeForm() {
    // Get all necessary DOM elements
    const form = document.getElementById('registrationForm');
    const steps = document.querySelectorAll('.form-step');
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    
    // Check if the form structure is present
    if (!form || steps.length === 0) {
        console.error("Form elements not found. Check if IDs and classes are correct.");
        return;
    }

    // Set up button listeners
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            handleNextStep();
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            handlePreviousStep();
        });
    });

    // Initial render
    showStep(currentStep);
}

/**
 * Shows the specified step and hides the others.
 * @param {number} stepNumber - The step number to display.
 */
function showStep(stepNumber) {
    const steps = document.querySelectorAll('.form-step');
    steps.forEach((step, index) => {
        // Step numbers are 1-indexed, array index is 0-indexed
        if (index + 1 === stepNumber) {
            step.classList.add('active');
        } else {
            step.classList.remove('active');
        }
    });
    
    // Update visual indicators
    updateProgressIndicator(stepNumber);
    // Ensure button visibility is correct
    updateButtonVisibility(stepNumber);
}

/**
 * Updates the visual progress indicators (labels and bar).
 * @param {number} activeStep - The currently active step number.
 */
function updateProgressIndicator(activeStep) {
    const progressSteps = document.querySelectorAll('.step');
    const progressBar = document.querySelector('.progress-bar');
    
    // 1. Update step classes (active/complete)
    progressSteps.forEach((step, index) => {
        const stepNum = index + 1;

        // Reset classes
        step.classList.remove('active', 'complete');

        if (stepNum < activeStep) {
            step.classList.add('complete');
        } else if (stepNum === activeStep) {
            step.classList.add('active');
        }
    });

    // 2. Update progress bar width
    // Formula: (currentStep - 1) / (totalSteps - 1) * 100
    let progressPercentage = 0;
    if (totalSteps > 1) {
        progressPercentage = ((activeStep - 1) / (totalSteps - 1)) * 100;
    } else {
        progressPercentage = activeStep === 1 ? 100 : 0; // Handle single step case if needed
    }
    
    // Ensure the progress bar doesn't extend beyond the last step.
    if (activeStep === totalSteps) {
        progressPercentage = 100;
    }

    progressBar.style.width = `${progressPercentage}%`;
}

/**
 * Handles validation and moves to the next step.
 */
function handleNextStep() {
    if (currentStep < totalSteps) {
        if (validateStep(currentStep)) {
            currentStep++;
            showStep(currentStep);
        } else {
            // Display feedback (using console for simplicity, use a proper UI alert in a real app)
            console.warn(`Validation failed for Step ${currentStep}. Please fill out all required fields.`);
            alert(`Please fill out all required fields in Step ${currentStep} before proceeding.`);
        }
    } else if (currentStep === totalSteps) {
        // This is the final step submission logic
        if (validateStep(currentStep)) {
            // Placeholder for final submission logic (e.g., API call)
            alert("Registration Complete! Submitting form data...");
            // document.getElementById('registrationForm').submit(); // Uncomment this for real submission
        } else {
            console.warn(`Validation failed for final Step ${currentStep}.`);
            alert(`Please fill out all required fields in Step ${currentStep} before submitting.`);
        }
    }
}

/**
 * Handles moving to the previous step.
 */
function handlePreviousStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

/**
 * Simple validation for required fields in the current step.
 * NOTE: For a real application, you need much more robust validation (email format, phone regex, etc.)
 * @param {number} stepNumber - The step number to validate.
 * @returns {boolean} - True if validation passes, false otherwise.
 */
function validateStep(stepNumber) {
    const currentStepElement = document.querySelector(`.form-step:nth-child(${stepNumber})`);
    if (!currentStepElement) return true; // Safety check

    const requiredInputs = currentStepElement.querySelectorAll('[required]');
    let isValid = true;

    requiredInputs.forEach(input => {
        // Check standard input value validity
        if (!input.value.trim()) {
            isValid = false;
            input.style.borderColor = 'red';
            input.focus();
        } else {
            input.style.borderColor = ''; // Reset border color on success
        }
        
        // Specific check for checkbox (terms and conditions)
        if (input.type === 'checkbox' && !input.checked) {
             isValid = false;
             // Note: It's harder to visually highlight a checkbox, 
             // so rely on the general alert/focus for now.
        }
    });

    return isValid;
}

/**
 * Updates the visibility of the Next/Previous/Submit buttons.
 * @param {number} stepNumber - The current step number.
 */
function updateButtonVisibility(stepNumber) {
    const prevButton = document.querySelector('.prev-step');
    const nextButton = document.querySelector('.next-step');
    const submitButton = document.querySelector('.final-submit');

    if (prevButton) {
        // Show Prev button if not on Step 1
        prevButton.style.display = (stepNumber > 1) ? 'block' : 'none';
    }

    if (nextButton) {
        // Show Next button if not on the final step
        nextButton.style.display = (stepNumber < totalSteps) ? 'block' : 'none';
    }
    
    if (submitButton) {
        // Show Submit button only on the final step
        submitButton.style.display = (stepNumber === totalSteps) ? 'block' : 'none';
    }
}
