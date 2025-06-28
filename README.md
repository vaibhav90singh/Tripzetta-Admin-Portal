# 🧾 Tripzetta Invoice Management System

An elegant, responsive, and powerful **Invoice Management Dashboard** built using **HTML, Tailwind CSS, JavaScript, PHP & MySQL**. This system allows users to manage, view, create, download, and share tax invoices seamlessly with WhatsApp & Gmail integration — perfect for travel and service-based businesses.

![Tripzetta Dashboard Screenshot]
<img width="947" alt="image" src="https://github.com/user-attachments/assets/626417e6-6a22-4821-894c-2a178e720feb" />

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

---

## 🖥️ How to Run Locally

> Requires **XAMPP** / **WAMP** / PHP-enabled local server.

1. 📦 Clone this repository:
   ```bash
   git clone https://github.com/vaibhav90singh/tripzetta_admin_portal.git
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
📧 itsvaibhavsingh0001@gmail.com
📱 +91 99999 99999

📄 License
© 2025 Vaibhav | Tripzetta.com

All Rights Reserved.

This software and its source code are proprietary and confidential. You may not copy, reproduce, modify, distribute, display, or use any part of this software for any commercial or non-commercial purpose without express written permission from the author.

Unauthorized use, replication, or distribution of this software is strictly prohibited and may result in legal action.

This project is intended solely for demonstration and personal learning purposes.

For commercial licensing or inquiries, contact: tripzetta@gmail.com

