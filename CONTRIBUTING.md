# Contributing to ehw-lib

This repository contains Eric Hepperle's code library of snippets, frameworks, and utilities. Here are some guidelines for contributing:

## Adding new snippets

1. **Folder structure**: Place snippets in the appropriate language/tech folder under `snippets/`:
   - PHP snippets → `snippets/php/`
   - WordPress hooks/functions → `snippets/wp/`
   - JavaScript utilities → `snippets/js/`
   - Python scripts → `snippets/py/`
   - PowerShell scripts → `snippets/psh/`
   etc.

2. **File naming**: Use this format:
   ```
   ehCode_YYYYMMDD_SnippetTemplate_Description_Version.ext
   ```
   Example: `ehCode_20231117_TemplateSnippet_WPShortcode_01.php`

3. **Documentation**: Each snippet should include:
   - Brief description of what it does
   - Usage example if applicable
   - Any dependencies or requirements
   - Date created/modified
   - Your name if different from Eric Hepperle

## Runnable examples

- For Node.js projects, include a `package.json`
- For Python scripts, consider adding a `requirements.txt`
- Add a README.md in the folder for multi-file examples

## Style guidelines

- Use consistent indentation (spaces preferred)
- Add meaningful comments
- Break complex logic into smaller functions
- Use clear, descriptive variable names

## Questions?

Open an issue or contact Eric Hepperle directly.