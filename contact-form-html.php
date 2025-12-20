<?php
// Generate math CAPTCHA
// Session should already be started in contact.php
if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}

// Generate simple math question
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$operation = rand(0, 1); // 0 for addition, 1 for subtraction

if ($operation === 0) {
    $result = $num1 + $num2;
    $question = "$num1 + $num2 = ?";
} else {
    // Ensure result is positive
    if ($num1 < $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    $result = $num1 - $num2;
    $question = "$num1 - $num2 = ?";
}

// Store result in session
$_SESSION['captcha_result'] = $result;
$_SESSION['captcha_question'] = $question;
?>

<!-- Contact Form HTML -->
<form id="contactForm" class="contact-form">
    <div class="form-group">
        <label for="customer_name">Customer Name <span class="required">*</span></label>
        <input type="text" id="customer_name" name="customer_name" required>
    </div>
    
    <div class="form-group">
        <label for="company_name">Company Name</label>
        <input type="text" id="company_name" name="company_name">
    </div>
    
    <div class="form-group">
        <label for="primary_contact">Primary Contact <span class="required">*</span></label>
        <input type="text" id="primary_contact" name="primary_contact" required>
    </div>
    
    <div class="form-group">
        <label for="email_id">Email ID <span class="required">*</span></label>
        <input type="email" id="email_id" name="email_id" required>
    </div>
    
    <div class="form-group">
        <label for="city">City <span class="required">*</span></label>
        <input type="text" id="city" name="city" required>
    </div>
    
    <div class="form-group">
        <label for="product_category">Product Category</label>
        <select id="product_category" name="product_category">
            <option value="">Select Product Category</option>
            <option value="Nurse Call System">Nurse Call System</option>
            <option value="Panic Alarm">Panic Alarm</option>
            <option value="Token Display">Token Display</option>
            <option value="Traffic Light Controller">Traffic Light Controller</option>
            <option value="Peon Call System">Peon Call System</option>
            <option value="Wireless Transceiver">Wireless Transceiver</option>
            <option value="Air Quality Monitor">Air Quality Monitor</option>
            <option value="Other">Other</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="requirement">Requirement</label>
        <textarea id="requirement" name="requirement" rows="4"></textarea>
    </div>
    
    <div class="form-group">
        <label for="customer_type">Customer Type</label>
        <select id="customer_type" name="customer_type">
            <option value="">Select Customer Type</option>
            <option value="Individual">Individual</option>
            <option value="Business">Business</option>
            <option value="Government">Government</option>
            <option value="Hospital">Hospital</option>
            <option value="Other">Other</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="comments">Comments</label>
        <textarea id="comments" name="comments" rows="3"></textarea>
    </div>
    
    <div class="form-group captcha-group">
        <label for="captcha_answer">CAPTCHA <span class="required">*</span></label>
        <div class="captcha-container">
            <div class="captcha-question">
                <strong><?php echo htmlspecialchars($question); ?></strong>
                <button type="button" class="refresh-captcha" onclick="refreshCaptcha()" title="Refresh CAPTCHA">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>
            </div>
            <input type="number" id="captcha_answer" name="captcha_answer" required placeholder="Enter answer" min="0" max="100" autocomplete="off">
        </div>
    </div>
    
    <div class="form-message" id="formMessage"></div>
    
    <button type="submit" id="submitBtn" class="submit-btn">
        <span class="btn-text">Submit</span>
        <span class="btn-loader" style="display: none;">
            <i class="fas fa-spinner fa-spin"></i> Submitting...
        </span>
    </button>
</form>

<style>
.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-group label {
    font-weight: 600;
    color: var(--text-primary);
    font-size: 0.95rem;
}

.form-group .required {
    color: #ef4444;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 0.875rem 1rem;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-size: 1rem;
    font-family: inherit;
    background: var(--bg-primary);
    color: var(--text-primary);
    transition: all 0.3s ease;
    width: 100%;
    box-sizing: border-box;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 100px;
}

.captcha-group {
    margin-top: 0.5rem;
}

.captcha-container {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.captcha-question {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 1rem;
    background: var(--bg-secondary);
    border-radius: 8px;
    border: 2px solid var(--border-color);
    flex-wrap: wrap;
}

.captcha-question strong {
    font-size: 1.1rem;
    color: var(--text-primary);
    flex: 1;
    min-width: 120px;
}

.refresh-captcha {
    background: var(--accent-color);
    color: white;
    border: none;
    border-radius: 6px;
    padding: 0.5rem 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    white-space: nowrap;
}

.refresh-captcha:hover {
    background: var(--accent-hover);
    transform: scale(1.05);
}

.refresh-captcha i {
    font-size: 0.85rem;
}

.captcha-container input {
    max-width: 200px;
    text-align: center;
    font-weight: 600;
    font-size: 1.1rem;
}

.form-message {
    padding: 1rem;
    border-radius: 8px;
    font-weight: 500;
    display: none;
}

.form-message.success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #6ee7b7;
    display: block;
}

.form-message.error {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
    display: block;
}

.submit-btn {
    background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
    color: white;
    border: none;
    border-radius: 10px;
    padding: 1rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 0.5rem;
}

.submit-btn:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(13, 148, 136, 0.3);
}

.submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.btn-loader {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

@media (max-width: 768px) {
    .captcha-question {
        flex-direction: column;
        align-items: stretch;
    }
    
    .captcha-question strong {
        text-align: center;
    }
    
    .captcha-container input {
        max-width: 100%;
    }
}
</style>

<script>
function refreshCaptcha() {
    // Reload the page to get a new CAPTCHA
    window.location.reload();
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formMessage = document.getElementById('formMessage');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Disable button and show loading
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-flex';
            formMessage.style.display = 'none';
            formMessage.className = 'form-message';
            
            // Get form data
            const formData = new FormData(form);
            
            // Submit form
            fetch('contact_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                formMessage.style.display = 'block';
                
                if (data.success) {
                    formMessage.className = 'form-message success';
                    formMessage.textContent = data.message;
                    form.reset();
                    
                    // Reload to get new CAPTCHA
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                    
                    // Scroll to message
                    formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                } else {
                    formMessage.className = 'form-message error';
                    formMessage.textContent = data.message;
                    
                    // Reload to get new CAPTCHA on error
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                    
                    // Scroll to message
                    formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            })
            .catch(error => {
                formMessage.style.display = 'block';
                formMessage.className = 'form-message error';
                formMessage.textContent = 'An error occurred. Please try again.';
                
                // Reload to get new CAPTCHA
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            })
            .finally(() => {
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
            });
        });
    }
});
</script>
