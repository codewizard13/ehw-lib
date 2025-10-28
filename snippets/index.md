# Snippets Directory

This directory contains reusable code snippets, utilities, and examples across multiple languages and technologies.

## Directory structure

```text
snippets/
├── blurbs/     - Text content and reusable blurbs
├── csv/        - Sample CSV data files and processors
├── email/      - Email templates and signatures
├── html/       - HTML snippets and page templates
├── ipsum/      - Lorem ipsum and placeholder text
├── js/         - JavaScript utilities and Node.js scripts
│   └── scrape/ - Web scraping examples (Node.js)
├── lists/      - Reusable data lists (states, countries, etc.)
├── md/         - Markdown templates
├── php/        - PHP utilities and functions
├── psh/        - PowerShell scripts and automation
├── py/         - Python scripts and utilities
│   └── scrape/ - Web scraping examples (Python)
├── regex/      - Regular expression patterns
└── wp/         - WordPress functions, hooks, and shortcodes
```

## Usage Examples

### WordPress Development

#### Custom Post Types & Admin Features

```php
// Register a Knowledge Base CPT
require_once 'wp/ehCodeSnip__WP__CPT__KB_01.php';

// Add datetime to admin bar
require_once 'wp/ehCodeSnip__WP__AdminBar__AddDateTimeRight.php';

// Show CPT counts in admin bar
require_once 'wp/ehCodeSnip__WP__AdminBar__AddGuestCPTCount.php';

// Add custom dashboard widget
require_once 'wp/ehCodeSnip__WP__Dash__AddCustomWidget.php';
```

### Node.js Development

#### Web Scraping Project

```bash
# Setup and run scraper
cd js/scrape
npm install
node app.js

# Run specific example
node js/scrape/chatgpt/example.mjs
```

#### Browser Utilities

```javascript
// Find hashtags in text
const text = "Check out #javascript and #webdev";
import('./js/eh-find-hashtags.js')
  .then(module => {
    const tags = module.findHashtags(text);
    console.log(tags); // ['javascript', 'webdev']
  });
```

### Python Scripts

#### Web Scraping Setup

```bash
# Create and activate virtual environment
cd py/scrape/chatgpt
python -m venv .venv
source .venv/bin/activate  # Windows: .venv\Scripts\activate
python app.py
```

#### Data Analysis

```python
# Process CSV data
from csv import DictReader

with open('csv/EHCODE_SNIPPET_20230209__DUMMY_DATA__BookCatalog__01.csv') as f:
    reader = DictReader(f)
    for row in reader:
        print(f"Processing: {row['title']}")
```

### PowerShell Utilities

#### File Management

```powershell
# Merge multiple DOCX files
./psh/ehw-merge-mult-docx.ps1

# Create sequential numbered folders
./psh/ehw-generate-sequential-numbered-folders.ps1

# Bulk create directories
./psh/ehw-create-multiple-folders.ps1
```

### Templates

#### WordPress Content Templates

```html
<!-- Q&A Format Template -->
<div class="qa-wrap">
    <div class="question">
        <h3>Q: How do I use this template?</h3>
    </div>
    <div class="answer">
        <p>A: Copy and customize the structure...</p>
    </div>
</div>
```

#### Email Signature

```html
<!-- Professional Email Signature -->
<table class="signature">
    <tr>
        <td><img src="avatar.jpg" alt="Profile"></td>
        <td>
            <p class="name">John Doe</p>
            <p class="title">Senior Developer</p>
        </td>
    </tr>
</table>
```

### Content Processing

#### CSV Data Management

```php
// Process business directory
$file = 'csv/EHCODE_SNIPPET_20230209__DUMMY_DATA__BusinessDirectory__01.csv';
$handle = fopen($file, 'r');
while (($data = fgetcsv($handle)) !== FALSE) {
    list($name, $address, $phone) = $data;
    // Process each business entry
}
fclose($handle);
```

#### Geographic Data Lists

```php
// Include state/country lists
include 'lists/EH_SNIPPET_20230220_LIST__USStates_01.txt';
include 'lists/EH_SNIPPET_20231115_LIST__Countries__WPACF.txt';
```

### Media Management

#### YouTube Playlist Downloads

```bash
# Download dated playlist
yt-dlp --batch-file "ytdlp/ehCode_20230722_TemplateSnippet_YTDLPPlaylistList_01.txt"

# Download with custom format
yt-dlp --batch-file "ytdlp/ehCode_20231231_TemplateSnippet_YTDLP_various.txt" \
  --format "bestvideo[height<=1080]+bestaudio/best"
```

### Patterns & Validation

#### Regular Expression Examples

```php
// Match email addresses
$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

// Match phone numbers
$pattern = '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';

// Match URLs
$pattern = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
```

## Contributing

See the main [CONTRIBUTING.md](../CONTRIBUTING.md) file for naming conventions and guidelines.