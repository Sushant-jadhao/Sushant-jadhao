import React, { useState } from "react";
import axios from "axios";

const Complaint = () => {
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");

  const handleSubmit = async () => {
    try {
      // Assume you have a way to get the student_id
      const student_id = 1; // Replace with the actual student_id
      const response = await axios.post("http://localhost:5000/complaint", {
        student_id,
        title,
        description,
      });
      console.log(response.data.message);
    } catch (error) {
      console.error(
        "Complaint submission failed:",
        error.response ? error.response.data.error : error.message
      );
    }
  };

  return (
    <div>
      <h2>Complaint Submission</h2>
      <label>Title:</label>
      <input
        type="text"
        value={title}
        onChange={(e) => setTitle(e.target.value)}
      />
      <br />
      <label>Description:</label>
      <textarea
        value={description}
        onChange={(e) => setDescription(e.target.value)}
      />
      <br />
      <button onClick={handleSubmit}>Submit Complaint</button>
    </div>
  );
};

export default Complaint;
