1. Create a folder named "phpMailerLib".
2. Open terminal and run "composer require phpmailer/phpmailer". For more info, goto https://github.com/PHPMailer/PHPMailer
3. The folder structure should look like this.
├── sendEmail.php
├── phpMailerLib
│   └── vendor
│       ├── autoload.php
│       ├── composer
│       └── phpmailer
└── readme.md
4. Now create app password (not your account password) in your google account. (Help: https://support.google.com/mail/answer/185833?hl=en#:~:text=Create%20%26%20use%20App%20Passwords)
5. Set your email id as "Username"
6. Set newly generated app password as Password
7. Set Recipients, CC, BCC etc.
8. Change the email body.
9. run "php sendEmail.php" . Or, write a function as per your need.



