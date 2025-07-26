# 📇 Contact Management System

A simple web-based Contact Management System that allows users to **add**, **view**, and **store contacts** using **XML, XSLT, HTML, PHP, and JavaScript**. It also features a 🎉 **Birthday Alert System** and comes with a clean, responsive design.

---

## 🚀 Features

- 📥 Add new contacts using a web form
- 🧾 View contacts styled with XSLT and XML
- 🎂 **Birthday Alert**: Automatically notifies you of birthdays on page load
- 💾 Data stored in `contacts.xml` using structured XML format
- ✅ XML validation with XSD
- 🎨 Styled UI with custom CSS

---

## 💻 Technologies Used

| Component         | Technology           |
|------------------|----------------------|
| Frontend         | HTML, CSS, JavaScript |
| Backend          | PHP (with DOM and SimpleXML) |
| Data Storage     | XML, XSD             |
| Presentation     | XSLT                 |
| Server           | Apache (for local hosting) |

---

## 📁 Project Structure

```bash
/
├── index.html              # Main UI to display contacts
├── add_contact.html   # Form to add new contacts
├── contacts.xml            # XML file storing contact data
├── contacts.xsl            # XSLT stylesheet for displaying contacts
├── contacts.xsd            # XML schema definition (XSD)
├── save_contact.php        # PHP script to save new contact to XML
