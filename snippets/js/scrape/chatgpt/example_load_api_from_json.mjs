/**
 * This is based on the example.mjs file from:
 *  https://platform.openai.com/docs/quickstart, accessed 2025-04-09.
 * 
 * This version is modified to pull the API key from a JSON file
 *  with a custom function.
 * 
 * #GOTCHA:  There is no free tier, so this code technically works, but without
 *   subcribing to a paid plan it is useless.
 * 
 * Author:      Eric L. Hepperle
 * Date:        2025-04-09
 * 
 */

import OpenAI from "openai";

import fs from 'fs';
import path from 'path';

/**
 * Loads a set of API keys from a JSON-formatted file by brand.
 *
 * @param {string} keyFile - Path to the file containing the API keys.
 * @param {string} brand - The key inside the JSON object (e.g., 'ro', 'rw').
 * @returns {string} - The API key for the specified access level.
 * @throws {Error} - If the file doesn't exist, can't be parsed, or the access level is missing.
 */
function getApiKeySet(keyFile, brand) {
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

  const apiKeySet = keys[brand];
  if (!apiKeySet) {
    throw new Error(`API key for access level "${brand}" not found in file.`);
  }

// Return apiKeySet as array like {'openai': {'ro': 'ro_key', 'rw': 'rw_key'}}
  return apiKeySet;
}


const api_key = getApiKeySet('../_private/api_keys.json', 'openai').rw

const client = new OpenAI({
    apiKey: api_key
});


const response = await client.responses.create({
    model: "gpt-4o",
    input: "Write a one-sentence bedtime story about a unicorn."
});

console.log(response.output_text);


