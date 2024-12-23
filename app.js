/*
const express = require('express');
const mysql = require('mysql2');
const bcrypt = require('bcryptjs');
const bodyParser = require('body-parser');
const app = express();

// Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(express.static('public'));

// MySQL database connection
const db = mysql.createConnection({
    host: 'localhost',      // Your MySQL host (default is localhost)
    user: 'root',           // Your MySQL username (default is root)
    password: '12345',           // Your MySQL password (if any)
    database: 'user_db'     // Database name we created earlier
});

// Connect to MySQL
db.connect((err) => {
    if (err) {
        console.error('Could not connect to MySQL', err);
        process.exit(1);
    }
    console.log('Connected to MySQL database');
});

// Sign Up endpoint
app.post('/signup', async (req, res) => {
    const { username, email, password, confirmPassword } = req.body;

    // Check if passwords match
    if (password !== confirmPassword) {
        return res.status(400).send('Passwords do not match');
    }

    // Check if user already exists
    db.query('SELECT * FROM users WHERE email = ?', [email], async (err, results) => {
        if (err) return res.status(500).send('Server error');
        
        if (results.length > 0) {
            return res.status(400).send('User already exists');
        }

        // Hash password using bcrypt
        const hashedPassword = await bcrypt.hash(password, 10);

        // Insert new user into the database
        db.query('INSERT INTO users (username, email, password) VALUES (?, ?, ?)', [username, email, hashedPassword], (err, result) => {
            if (err) return res.status(500).send('Server error');
            res.status(201).send('Account created successfully');
        });
    });
});

// Login endpoint
app.post('/login', (req, res) => {
    const { email, password } = req.body;

    // Check if user exists
    db.query('SELECT * FROM users WHERE email = ?', [email], async (err, results) => {
        if (err) return res.status(500).send('Server error');
        
        if (results.length === 0) {
            return res.status(400).send('Invalid credentials');
        }

        // Compare password
        const user = results[0];
        const isMatch = await bcrypt.compare(password, user.password);
        if (!isMatch) {
            return res.status(400).send('Invalid credentials');
        }

        res.status(200).send('Login successful');
    });
});

// Start the server
app.listen(3000, () => {
    console.log('Server running on http://localhost:3000');
});

*/