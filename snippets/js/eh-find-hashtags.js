/**
 * Author:          Eric Hepperle
 * Date Created:    02/12/2025
 * 
 * How It Works:
 * - Recursively scans all files in the specified folder.
 * - Searches for lines containing hashtags (#example).
 * - Captures three lines before and after each occurrence.
 * - Writes the results to results.md, one level up from the searched directory.
 * 
 * To run:
 * - In browser console:
 * - Change 'your-folder' to the actual folder you want to search.
 * - Run the script in VSCode with node script.js.
 * 
 */

const fs = require('fs');
const path = require('path');

const targetDir = '2024';
const searchDir = path.resolve(__dirname, targetDir); // Change to your target folder
const outputFile = path.resolve(searchDir, '../results.md');

function getLinesAround(lines, index, context = 3) {
    const start = Math.max(0, index - context);
    const end = Math.min(lines.length, index + context + 1);
    return lines.slice(start, end).join('\n');
}

function searchFile(filePath) {
    const content = fs.readFileSync(filePath, 'utf8');
    const lines = content.split('\n');
    const results = [];

    lines.forEach((line, index) => {
        if (/#\w+/.test(line)) {
            results.push(`**File:** ${filePath}\n\n\`\`\`
${getLinesAround(lines, index)}
\`\`\`
`);
        }
    });
    
    return results;
}

function searchDirectory(dir) {
    let results = [];
    const files = fs.readdirSync(dir);

    files.forEach(file => {
        const filePath = path.join(dir, file);
        const stats = fs.statSync(filePath);

        if (stats.isDirectory()) {
            results = results.concat(searchDirectory(filePath));
        } else if (stats.isFile()) {
            results = results.concat(searchFile(filePath));
        }
    });

    return results;
}

const matches = searchDirectory(searchDir);
fs.writeFileSync(outputFile, matches.join('\n\n'), 'utf8');

console.log(`Search complete. Results saved to ${outputFile}`);

// https://chatgpt.com/c/67ad0251-c5b0-8009-b0be-1c278badacaa