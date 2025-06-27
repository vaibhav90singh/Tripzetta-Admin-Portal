# tripzetta-admin-portal-testing
# 🧾 Tripzetta Invoice Management System

An elegant, responsive, and powerful **Invoice Management Dashboard** built using **HTML, Tailwind CSS, JavaScript, PHP & MySQL**. This system allows users to manage, view, create, download, and share tax invoices seamlessly with WhatsApp & Gmail integration — perfect for travel and service-based businesses.

![Tripzetta Dashboard Screenshot](preview.png)

---

## ✨ Features

- ✅ **Responsive Dashboard UI** with Tailwind CSS
- ➕ **Create Invoices** with full tax and customer info
- 📄 **Generate PDF Invoices** with proper GST breakup (SGST, CGST, IGST)
- 📲 **Send Invoices via WhatsApp** directly
- 📧 **Send Invoices via Gmail**
- 🔍 **Filter Invoices by Date**
- 🧾 **Print-Ready Invoice Layout (A4 size)**
- 📂 **Download/View/Edit/Delete** invoices
- 💾 **Data stored in MySQL via PHP**
- 🔐 **Simple Login-based access control**

---

## 🧰 Tech Stack

| Layer       | Tech Used                      |
|------------|----------------------------------|
| Frontend   | HTML5, Tailwind CSS, JavaScript |
| Backend    | PHP                              |
| Database   | MySQL                            |
| PDF Export | jsPDF + html2canvas              |
| Messaging  | WhatsApp API, `mailto:` for Gmail|

---

## 📂 Folder Structure

/project-root
│
├── index.html # Main Dashboard Page
├── create-invoice.html # Form to create new invoices
├── edit-invoice.html # Edit existing invoices
├── fetch_invoices.php # PHP to fetch invoices from DB
├── delete_invoice.php # PHP to delete an invoice
├── LOGO.png / Trip.png # Branding images
├── style.css (if any)
└── ... (other assets/scripts)

yaml
Copy
Edit

---

## 🖥️ How to Run Locally

> Requires **XAMPP** / **WAMP** / PHP-enabled local server.

1. 📦 Clone this repository:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
🛠️ Set up the MySQL Database:

Import invoice_db.sql into your PHPMyAdmin.

Make sure table name is invoices.

🔧 Place the folder in your local server root:

Example: C:/xampp/htdocs/tripzetta-dashboard

🌐 Start Apache & MySQL in XAMPP.

Access: http://localhost/tripzetta-dashboard/index.html

📸 Screenshots
Dashboard View	Invoice PDF Preview

💡 Use Cases
Travel Companies

Freelancers & Consultants

Small Businesses needing custom tax invoices

Agencies sending invoices via WhatsApp or Email

📬 Contact
For any queries or collaborations:

Vaibhav
📧 tripzetta@gmail.com
📱 +91 9650485130

📄 License
This project is open-source under the MIT License. Use it freely for personal or commercial projects.
