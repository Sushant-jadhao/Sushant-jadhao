// CurrencyConverter.js
import React, { useState } from "react";

const CurrencyConverter = () => {
  const [amount, setAmount] = useState("");
  const [fromCurrency, setFromCurrency] = useState("USD");
  const [toCurrency, setToCurrency] = useState("EUR");
  const [convertedAmount, setConvertedAmount] = useState(null);

  const handleConvert = async () => {
    // Implement currency conversion logic here
    // You can use a currency conversion API or implement your own logic

    // For example, using a hardcoded exchange rate for demonstration
    const exchangeRate = 0.85;
    const result = amount * exchangeRate;

    setConvertedAmount(result.toFixed(2)); // Limit to 2 decimal places
  };

  return (
    <div>
      <h2>Currency Converter</h2>
      <div>
        <label>
          Amount:
          <input
            type="number"
            value={amount}
            onChange={(e) => setAmount(e.target.value)}
          />
        </label>
      </div>
      <div>
        <label>
          From Currency:
          <select
            value={fromCurrency}
            onChange={(e) => setFromCurrency(e.target.value)}
          >
            <option value="USD">USD</option>
            {/* Add other currency options as needed */}
          </select>
        </label>
      </div>
      <div>
        <label>
          To Currency:
          <select
            value={toCurrency}
            onChange={(e) => setToCurrency(e.target.value)}
          >
            <option value="EUR">EUR</option>
            {/* Add other currency options as needed */}
          </select>
        </label>
      </div>
      <button onClick={handleConvert}>Convert</button>
      {convertedAmount && (
        <p>
          Converted Amount: {convertedAmount} {toCurrency}
        </p>
      )}
    </div>
  );
};

export default CurrencyConverter;
