# 🧪 Task 3: Web Form Validation & Testing

## 📋 Task Summary
This project focuses on building a web page using **HTML**, **CSS**, and **PHP** to collect and validate form data.  
Students are expected to:
- Create a user form with input fields (Full Name, Email, Gender, Website, Comment).
- Implement **server-side validation** using PHP.
- Test the form using various input cases to ensure correctness.
  ## ✅ Test Cases & Output


## ✅ Test Cases & Output

### 🧪 CASE 1: Submit without entering any field  
**Test:** Leave all fields blank and press submit.  
**Expected Result:** Show validation errors for all required fields.

📸 *Screenshot here*  
![CASE 1]
<img src="https://github.com/user-attachments/assets/af2f6b79-2b66-4934-a33b-ad44b06e147f" width="250">

### 🧪 CASE 2: Enter a number in "Full Name" field  
**Test:** Input a numeric value in the Full Name field.  
**Expected Result:** Validation error, name must be alphabetic.

📸 *Screenshot here*  
![CASE 2](images/case2.png)

---

### 🧪 CASE 3: Select two options in "Gender" field  
**Test:** Try selecting more than one gender option (if possible).  
**Expected Result:** Only one option should be selectable (radio button); otherwise, validation error.

📸 *Screenshot here*  
![CASE 3](images/case3.png)

---

### 🧪 CASE 4: Enter email without "@" symbol  
**Test:** Input invalid email like `exampleemail.com`.  
**Expected Result:** Validation error for incorrect email format.

📸 *Screenshot here*  
![CASE 4](images/case4.png)

---

### 🧪 CASE 5: Enter URL without ".com" in Website field  
**Test:** Input an invalid website (e.g., `http://mywebsite`) without `.com`.  
**Expected Result:** URL validation error.

📸 *Screenshot here*  
![CASE 5](images/case5.png)

---

### 🧪 CASE 6: Enter number and characters in "Comment" field  
**Test:** Input alphanumeric comment like `Great123!`.  
**Expected Result:** Acceptable if alphanumeric input is allowed, else show warning.

📸 *Screenshot here*  
![CASE 6](images/case6.png)

---

## 📁 Project Structure
