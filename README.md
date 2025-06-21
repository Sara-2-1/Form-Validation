# 🧪 Task 3: Web Form Validation & Testing

## 📋 Task Summary
This project focuses on building a web page using **HTML**, **CSS**, and **PHP** to collect and validate form data.  
Students are expected to:
- Create a user form with input fields (Full Name, Email, Gender, Website, Comment).
- Implement **server-side validation** using PHP.
- Test the form using various input cases to ensure correctness.


## ✅ Test Cases & Output

### 🧪 CASE 1: Submit without entering any field  
**Test:** Leave all fields blank and press submit.  
**Expected Result:** Show validation errors for all required fields.

📸 *Screenshot here*  

<img src="https://github.com/user-attachments/assets/df28f9b1-c986-464e-b0eb-e54185e8fd20" width="250">

### 🧪 CASE 2: Enter a number in "Full Name" field  
**Test:** Input a numeric value in the Full Name field.  
**Expected Result:** Validation error, name must be alphabetic.

📸 *Screenshot here*  

<img src="https://github.com/user-attachments/assets/b7dc9ce1-fea1-4df9-ad8e-292bba4de39e" width="250">


### 🧪 CASE 3: Select two options in "Gender" field  
**Test:** Try selecting more than one gender option (if possible).  
**Expected Result:** Only one option should be selectable (radio button); otherwise, validation error.

📸 *Screenshot here*  

<img src="https://github.com/user-attachments/assets/0da40996-449d-4b08-9556-a1eb687fdb91" width="250">


### 🧪 CASE 4: Enter email without "@" symbol  
**Test:** Input invalid email like `exampleemail.com`.  
**Expected Result:** Validation error for incorrect email format.

📸 *Screenshot here*  
<img src="https://github.com/user-attachments/assets/fb67bd6b-5207-4a78-a742-6a2dd79276d9" width="250">



### 🧪 CASE 5: Enter URL without ".com" in Website field  
**Test:** Input an invalid website (e.g., `http://mywebsite`) without `.com`.  
**Expected Result:** URL validation error.

📸 *Screenshot here*  

<img src="https://github.com/user-attachments/assets/f60cdf82-df33-4768-8856-38d750d29868" width="250">



### 🧪 CASE 6: Enter number and characters in "Comment" field  
**Test:** Input alphanumeric comment like `Great123!`.  
**Expected Result:** Acceptable if alphanumeric input is allowed, else show warning.

📸 *Screenshot here*  

<img src="https://github.com/user-attachments/assets/9e13efe5-11dd-44b6-a14f-5f52dc65e464" width="250">

### 🌐 Web Form Validation (HTML, CSS, PHP)
- Web browser
- Local server (e.g., XAMPP or MAMP)
- PHP 7 or later



## 📁 Project Structure
