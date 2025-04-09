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





const response = await client.responses.create({
    model: "gpt-4o",
    input: "Write a one-sentence bedtime story about a unicorn."
});

console.log(response.output_text);