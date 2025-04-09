/**
 * Scrape ChatGPT threads:
 * 
 * This script is based off the answer provided by ChatGPT on how to
 *  scrape ChatGPT on Apr. 9, 2025.
 * 
 * Author:      Eric Hepperle
 * Date:        2025-04-09
 * 
 */

// scrapeChatGPT.js
import fetch from "node-fetch";
import fs from "fs";

// Replace with your actual OpenAI API key
const API_KEY = "your-api-key-here";

// Output file
const OUTPUT_FILE = "results.md";

// Add Markdown header
fs.writeFileSync(OUTPUT_FILE, `#####################
##
##    Merged Doc TOP
##
#####################

`, "utf8");

// Helper: Call OpenAI API with auth headers
const callOpenAI = async (url) => {
  const res = await fetch(url, {
    headers: {
      Authorization: `Bearer ${API_KEY}`,
      "Content-Type": "application/json",
    },
  });
  if (!res.ok) throw new Error(`API Error: ${res.status} ${res.statusText}`);
  return await res.json();
};

// Fetch all threads
const fetchThreads = async () => {
  const endpoint = "https://api.openai.com/v1/threads"; // Threads API endpoint
  const data = await callOpenAI(endpoint);
  return data.data || [];
};

// Fetch messages in a thread
const fetchMessages = async (threadId) => {
  const endpoint = `https://api.openai.com/v1/threads/${threadId}/messages`;
  const data = await callOpenAI(endpoint);
  return data.data || [];
};

// Append thread to Markdown file
const appendThreadToMarkdown = async (threadId) => {
  const messages = await fetchMessages(threadId);
  let md = `## Thread ID: ${threadId}\n\n`;

  messages.reverse().forEach((msg) => {
    const role = msg.role.charAt(0).toUpperCase() + msg.role.slice(1);
    const content = msg.content[0]?.text?.value || "";
    md += `**${role}:**\n\n${content}\n\n---\n\n`;
  });

  md += "##################### END THREAD #####################\n\n";

  fs.appendFileSync(OUTPUT_FILE, md, "utf8");
};

// Main function
const main = async () => {
  try {
    const threads = await fetchThreads();
    console.log(`Found ${threads.length} threads`);

    for (const thread of threads) {
      await appendThreadToMarkdown(thread.id);
    }

    console.log("✅ Done! Merged conversations into results.md");
  } catch (err) {
    console.error("❌ Error:", err.message);
  }
};

main();
