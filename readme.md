# Technical Test for Backend Developer at DOMO

This project is a technical test for the position of backend developer at DOMO. It involves adding behavior to a button in an HTML file to send data to a PHP script, validating if the DNI already exists in a CSV file, and adding it if it does not exist.

## Requirements

- **Add behavior to the button in `index.html`**:
  - Send the inputs to `agregar.php` using JavaScript with `fetch`.
  - Do not use `<form>` and its default submit.
  - Display the server's response on the page.

- **Validate in `agregar.php`**:
  - Check if the DNI sent already exists in `usuarios.csv`.
    - If it exists, return "error" (user already exists).
    - If it does not exist, add it to the CSV (delimited by `;`) and return a success message.

## Optional

- Validation of DNI format.
- HTML styling (CSS).

## Project Structure

- `index.html`: Contains the form and the button to add users.
- `agregar.php`: PHP script that validates and adds users to the CSV file.
- `usuarios.csv`: CSV file containing users (DNI and Surname).

## Screenshot

![Screenshot](/ejemplo.jpg)

## Instructions

### Prerequisites

- Have a local server installed (e.g., XAMPP, Laragon).
- Have PHP and a local web server configured.

### Installation

1. Clone the repository
2. Run the local server
3. Hope you like 😉