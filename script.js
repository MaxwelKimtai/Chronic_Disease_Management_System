document.addEventListener('DOMContentLoaded', initializeForm);

let currentStep = 1;
const totalSteps = 3;

function initializeForm() {
    const form = document.getElementById('multiStepForm');
    const steps = document.querySelectorAll('.form-step');
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    const progressBar = document.querySelector('.progress-bar');

    if (!form || steps.length === 0) return console.error("Form elements not found.");

    // Next Step Buttons
    nextButtons.forEach(btn => {
        btn.addEventListener('click', async () => {
            if (!validateStep(currentStep)) return;

            const success = await submitStep(currentStep);
            if (!success) return;

            if (currentStep < totalSteps) {
                currentStep++;
                showStep(steps, progressBar, currentStep);
            }
        });
    });

    // Previous Step Buttons
    prevButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(steps, progressBar, currentStep);
            }
        });
    });

    // Final Form Submission (Step 3)
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!validateStep(currentStep)) return;

        const success = await submitStep(currentStep);
        if (success) {
            alert("Registration complete! Redirecting to login...");
            window.location.href = 'login.php';
        }
    });

    showStep(steps, progressBar, currentStep);
}

// ======================
// Step Display & Progress
// ======================
function showStep(steps, progressBar, stepNumber) {
    steps.forEach(step => step.classList.toggle('active', parseInt(step.dataset.step) === stepNumber));

    const progressSteps = document.querySelectorAll('.step');
    progressSteps.forEach(step => {
        const num = parseInt(step.dataset.step);
        step.classList.remove('active', 'completed');
        if (num < stepNumber) step.classList.add('completed');
        else if (num === stepNumber) step.classList.add('active');
    });

    if (progressBar) {
        const percent = ((stepNumber - 1) / (totalSteps - 1)) * 100;
        progressBar.style.width = `${percent}%`;
    }
}

// ======================
// Step Validation
// ======================
function validateStep(stepNumber) {
    const stepEl = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
    if (!stepEl) return true;

    let isValid = true;
    const requiredInputs = stepEl.querySelectorAll('[required]');

    requiredInputs.forEach(input => {
        input.style.borderColor = '';
        if ((input.type !== 'checkbox' && !input.value.trim()) || (input.type === 'checkbox' && !input.checked)) {
            input.style.borderColor = 'red';
            isValid = false;
        }
    });

    // Password checks on step 1
    if (stepNumber === 1) {
        const pw = document.getElementById('password');
        const confirm = document.getElementById('confirm-password');

        if (pw.value.length < 8) {
            alert('Password must be at least 8 characters.');
            pw.style.borderColor = 'red';
            return false;
        }
        if (pw.value !== confirm.value) {
            alert('Passwords do not match.');
            confirm.style.borderColor = 'red';
            return false;
        }
    }

    if (!isValid) alert('Please fill all required fields.');
    return isValid;
}

// ======================
// Submit Step via API
// ======================
async function submitStep(stepNumber) {
    const stepEl = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
    const formData = new FormData(stepEl.closest('form'));
    const payload = {};

    formData.forEach((value, key) => payload[key] = value);
    payload.step = stepNumber;

    try {
        const response = await fetch('http://127.0.0.1:8000/api/patient/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
            },
            body: JSON.stringify(payload)
        });

        const data = await response.json();

        if (response.ok && data.success) {
            console.log(`Step ${stepNumber} saved successfully.`);
            return true;
        } else {
            handleErrors(data);
            return false;
        }
    } catch (err) {
        console.error(err);
        alert('Network or server error. Please try again.');
        return false;
    }
}

// ======================
// Error Handler
// ======================
function handleErrors(data) {
    if (data.errors) {
        Object.keys(data.errors).forEach(key => {
            const input = document.querySelector(`[name="${key}"]`);
            if (input) input.style.borderColor = 'red';
        });
        alert('Please fix the highlighted errors.');
    } else {
        alert(data.message || 'An error occurred. Please try again.');
    }
}
