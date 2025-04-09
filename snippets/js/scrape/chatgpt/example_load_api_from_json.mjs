/**
 * This is based on the example.mjs file from:
 *  https://platform.openai.com/docs/quickstart, accessed 2025-04-09.
 * 
 * This version is modified to pull the API key from a JSON file
 *  with a custom function.
 * 
 * Author:      Eric L. Hepperle
 * Date:        2025-04-09
 * 
 */

import OpenAI from "openai";
const client = new OpenAI();

const fs = require('fs');
const path = require('path');

/**
 * Loads an API key from a JSON-formatted file by access level.
 *
 * @param {string} keyFile - Path to the file containing the API keys.
 * @param {string} accessLevel - The key inside the JSON object (e.g., 'ro', 'rw').
 * @returns {string} - The API key for the specified access level.
 * @throws {Error} - If the file doesn't exist, can't be parsed, or the access level is missing.
 */
function getApiKey(keyFile, accessLevel) {
  const filePath = path.resolve(keyFile);

  if (!fs.existsSync(filePath)) {
    throw new Error(`Key file not found: ${filePath}`);
  }

  const fileContent = fs.readFileSync(filePath, 'utf-8');

  let keys;
  try {
    keys = JSON.parse(fileContent);
  } catch (err) {
    throw new Error(`Failed to parse JSON in key file: ${err.message}`);
  }

  const apiKey = keys[accessLevel];
  if (!apiKey) {
    throw new Error(`API key for access level "${accessLevel}" not found in file.`);
  }

  return apiKey.trim();
}




const response = await client.responses.create({
    model: "gpt-4o",
    input: "Write a one-sentence bedtime story about a unicorn."
});

console.log(response.output_text);