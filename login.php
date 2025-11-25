<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="page-overlay"></div>
    <div class="login-container">
        
        <div class="visual-panel">
            </div>

        <div class="form-card">
            
            <div class="form-content-wrapper">
                
                <h1 class="welcome-heading">Welcome</h1>
                <p class="login-text">Log in to your account to continue</p>
                
                <form class="login-form">
                    
                    <div class="field-group">
                        <input type="text" id="user-id" name="user-id" required placeholder="yourname@healthcare.com">
                        </div>

                    <div class="field-group">
                        <input type="password" id="password" name="password" required placeholder="**********">
                        <a href="#" class="forgot-password">Forgot your password?</a>
                    </div>
                    
                    <button type="submit" class="primary-button">Log In</button>
                    
                    <div class="secondary-actions">
                        <p>Don't have an account? <a href="register.html" class="signup-link">Sign up!</a></p>
                        
                        <div class="social-icons">
                       <a href="https://facebook.com" class="social-icon" target="_blank" aria-label="Facebook">
                       <i class="fab fa-facebook-f"></i>
                       </a>
                       <a href="https://twitter.com" class="social-icon" target="_blank" aria-label="Twitter">
                       <i class="fab fa-twitter"></i>
                       </a>
                       <a href="https://linkedin.com" class="social-icon" target="_blank" aria-label="LinkedIn">
                       <i class="fab fa-linkedin-in"></i>
                       </a>
                       <a href="https://youtube.com" class="social-icon" target="_blank" aria-label="YouTube">
                       <i class="fab fa-youtube"></i>
                       </a>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>
    
</body>
</html>