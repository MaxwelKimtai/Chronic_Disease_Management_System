<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="page-overlay"></div>
    <div class="registration-container">
        
        <div class="form-panel full-width-panel"> 
        <div class="panel-overlay"></div>

            <h2 class="form-title">Patient Registration</h2>
            
            <div class="step-indicator">
                <div class="step active" data-step="1">
                    <span class="step-number">1</span>
                    <span class="step-name">Personal</span>
                </div>
                <div class="step" data-step="2">
                    <span class="step-number">2</span>
                    <span class="step-name">Medical</span>
                </div>
                <div class="step" data-step="3">
                    <span class="step-number">3</span>
                    <span class="step-name">Treatment</span>
                </div>
                <div class="progress-bar"></div>
            </div>

<form class="registration-form" id="multiStepForm" novalidate>

    <!-- STEP 1 -->
    <div class="form-step active" data-step="1">
        <h3>1. Personal Information & Account</h3>

        <div class="field-row">
            <div class="field-group half-width">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="field-group half-width">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
            </div>
        </div>

        <div class="field-row">
            <div class="field-group half-width">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="field-group half-width">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="non-binary">Non-binary</option>
                    <option value="prefer-not-say">Prefer not to say</option>
                </select>
            </div>
        </div>

        <div class="field-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="field-group section-divider">
            <label class="section-label">Set Up Account Security</label>
        </div>

        <div class="field-row">
            <div class="field-group half-width">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="field-group half-width">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="password_confirmation" required>
            </div>
        </div>

        <button type="button" class="primary-button next-step">Next: Medical Profile</button>
    </div>

    <!-- STEP 2 -->
    <div class="form-step" data-step="2">
        <h3>2. Medical Profile</h3>
        
        <div class="field-group">
            <label for="primary-condition">Primary Chronic Condition</label>
            <select id="primary-condition" name="primary_condition" required>
                <option value="" disabled selected>Select Primary Condition</option>
                <option value="Diabetes Type 2">Diabetes Type 2</option>
                <option value="Hypertension">Hypertension</option>
                <option value="Asthma">Asthma</option>
                <option value="CKD">Chronic Kidney Disease (CKD)</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="field-group">
            <label for="diagnosis-date">Date of Diagnosis</label>
            <input type="date" id="diagnosis-date" name="diagnosis_date" required>
        </div>

        <div class="field-group">
            <label for="additional-conditions">Additional Chronic Conditions</label>
            <textarea id="additional-conditions" name="additional_conditions" rows="2" placeholder="List any other chronic conditions (e.g., Rheumatoid Arthritis, Hypothyroidism)"></textarea>
        </div>

        <div class="field-group separator">
            <label for="allergies">Allergies (Medication/Food/Other)</label>
            <input type="text" id="allergies" name="allergies" required placeholder="e.g., Penicillin, Peanuts (or 'None')">
        </div>

        <div class="button-row">
            <button type="button" class="secondary-button prev-step">Back</button>
            <button type="button" class="primary-button next-step">Next: Treatment</button>
        </div>
    </div>

    <!-- STEP 3 -->
    <div class="form-step" data-step="3">
        <h3>3. Current Treatment & Medications</h3>

        <div class="field-group">
            <label for="current-meds">Current Medications</label>
            <textarea id="current-meds" name="current_meds" rows="4" required placeholder="List Name, Dosage, and Frequency for all current medications. e.g., Metformin 500mg - Twice Daily; Aspirin 81mg - Daily"></textarea>
        </div>

        <div class="field-group">
            <label for="past-meds">Past Medications (Optional)</label>
            <textarea id="past-meds" name="past_meds" rows="2" placeholder="List any medications you have recently stopped taking."></textarea>
        </div>

        <div class="field-group final-submission">
            <div class="terms-checkbox-group">
                <input type="checkbox" id="agree-terms" name="agree_terms" required>
                <label for="agree-terms">I agree to the Terms & Privacy Policy and confirm the data is accurate.</label>
            </div>
        </div>

        <div class="button-row">
            <button type="button" class="secondary-button prev-step">Back</button>
            <button type="submit" class="primary-button final-submit">Complete Registration</button>
        </div>
    </div>

    <p class="sign-in-link">
        Already have an account? <a href="#">Sign in</a>
    </p>
</form>
</div>
</div>
    
    <script src="script.js"></script>

</body>
</html>