# Form Submission and File Upload

## Overview

A simple PHP form to collect user info, select skills, and upload a file.

## Features

* Inputs: Name, Email, Password, Skills (checkboxes)
* File upload: PDF, DOC, DOCX
* Sanitizes inputs and handles file upload errors
* Saves uploaded files to an `uploads/` directory

## Security

* Input sanitized with `htmlspecialchars`
* Password shown in plain text (for demo only)
* Upload directory created with proper permissions
