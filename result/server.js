const express = require("express");
const mysql = require("mysql");
const bodyParser = require("body-parser");
const path = require("path");

const app = express();
const port = 4000;

// MySQL connection
const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "semester_results",
});

db.connect((err) => {
  if (err) {
    console.log("Error connecting to MySQL:", err);
  } else {
    console.log("Connected to MySQL");
  }
});

// Middleware
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files (including index.html)
app.use(express.static(path.join(__dirname, "public")));

// Routes
app.get("/results", (req, res) => {
  db.query("SELECT * FROM results", (err, results) => {
    if (err) throw err;
    res.json(results);
  });
});

app.post("/results", (req, res) => {
  const { subject, marks } = req.body;
  db.query(
    "INSERT INTO results (subject, marks) VALUES (?, ?)",
    [subject, marks],
    (err, result) => {
      if (err) throw err;
      res.json({ message: "Result added successfully" });
    }
  );
});

// Start server
app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
